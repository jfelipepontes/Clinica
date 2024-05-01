<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Prontuario;

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
        // $actions->disableDelete();
        $grid->actions(function ($actions) {
            $actions->disableDelete();
            // $actions->disableEdit();
            // $actions->disableShow();
          });

        $grid->filter(function($filter){
            $filter->disableIdFilter();
            $filter->like('id', 'Código');
            $filter->like('paciente.Nome', 'Paciente');
            $filter->like('medico.name', 'Doutor');
        });

        $grid->column('id', __('Código'))->sortable();

        $grid->column('paciente.Nome', __('Paciente'))->sortable();
        $grid->column('medico.name', __('Doutor'))->sortable();
        $grid->column('medico.especialidade', __('Especialidade'));
        $grid->column('registro_medico', __('Registro medico'));


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
