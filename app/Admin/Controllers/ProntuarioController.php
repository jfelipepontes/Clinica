<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Prontuario;
use Illuminate\Support\Facades\Auth;

class ProntuarioController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Prontuario';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
{
    $grid = new Grid(new Prontuario());

    $grid->filter(function($filter){
        $filter->disableIdFilter();
        $filter->like('id', 'Código');
        $filter->like('paciente.Nome', 'Paciente');
        $filter->like('medico.name', 'Doutor');
    });

    $allowedIds = [1, 44];
    if (!in_array(Auth::id(), $allowedIds)) {
        $grid->actions(function ($actions) {
            $actions->disableDelete();
        });
    }

    // Se o ID do usuário logado for 1, exibe todos os prontuários
    $allowedIds = [1, 44, 43, 42];
    if (in_array(Auth::id(), $allowedIds)) {
        $grid->model()->with(['paciente', 'medico']);
    } else {
        // Caso contrário, exibe apenas os prontuários do médico logado
        $grid->model()->where('medico_id', Auth::id());
    }

    $grid->column('id', __('Código'))->sortable();
    $grid->column('paciente.Nome', __('Paciente'));
    $grid->column('medico.name', __('Doutor'));
    $grid->column('registro_medico', __('Registro Médico'));
    $grid->model()->orderBy('id', 'desc');

    return $grid;
}








    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Prontuario::findOrFail($id));

        $show->field('id', __('Código'));
        $show->field('paciente.Nome', __('Paciente'));
        $show->field('paciente.Data_Nascimento', __('Data de Nascimento'))->as(function ($data_nascimento) {
            return date('d/m/Y', strtotime($data_nascimento));
        });
        $show->field('paciente.Endereco', __('Endereço'));
        $show->field('paciente.Telefone', __('Telefone'));
        $show->field('paciente.Genero', __('Sexo'));
        $show->field('registro_medico', __('Registro medico'));
        $show->field('medico.name', __('Doutor'));

        // $show->field('consulta.data_hora', __('Data da Consulta'))->as(function ($data_hora) {
        //     return date('d/m/Y H:i', strtotime($data_hora));
        // });

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Prontuario());

        $form->select('paciente_id', __('Paciente'))->options(function () {
            $pacientes = \App\Models\Paciente::pluck('Nome', 'id')->toArray();
            return $pacientes;
        });

        $form->select('medico_id', __('Medico'))->options(function () {
            $medicos = \App\Models\Medico::pluck('name', 'id')->toArray();
            return $medicos;
        });
        $form->textarea('registro_medico', __('Registro medico'));

        return $form;
    }
}
