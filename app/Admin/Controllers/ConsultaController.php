<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Consulta;
use Illuminate\Support\Facades\Auth;


class ConsultaController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Consulta';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Consulta());

        $grid->filter(function($filter){
            $filter->disableIdFilter();
            $filter->like('paciente.Nome', 'Paciente');
            $filter->like('medico.name', 'Doutor');
            $filter->date('data_hora', 'Data');
            $filter->like('medico.especialidade', 'Especialidade');
            $filter->like('status', 'Status');
        });

        // Se o ID do usuário logado for 1, exibe todas as consultas
        if(Auth::id() == 1) {
            $grid->model()->with(['paciente', 'medico']);
        } else {
            // Caso contrário, exibe apenas as consultas do médico logado
            $grid->model()->where('medico_id', Auth::id());
        }

        $grid->column('paciente.Nome', __('Paciente'))->sortable();
        $grid->column('medico.name', __('Medico'))->sortable();
        $grid->column('medico.especialidade', __('Especialidade'))->sortable();
        $grid->column('data_hora', __('Dia'))->sortable()->display(function ($data_hora) {
            $data_hora = new \DateTime($data_hora);
            return $data_hora->format('d/m/Y H:i');
        });

        $grid->column('observacoes', __('Tipo'))->sortable();
        $grid->column('status', __('Status'))->sortable();
        $grid->column('prontuario_id', __('Prontuario'));

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
        $show = new Show(Consulta::findOrFail($id));

        $show->field('paciente.Nome', __('Paciente'));
        $show->field('medico.name', __('Medico'));
        $show->field('medico.especialidade', __('Especialidade'));
        $show->field('data_hora', __('Dia'))->display(function ($data_hora) {
            $data_hora = new \DateTime($data_hora);
            return $data_hora->format('d/m/Y H:i');
        });
        $show->field('observacoes', __('Observacoes'));
        $show->field('status', __('Status'));
        $show->field('prontuario_id', __('Prontuario'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
{
    $form = new Form(new Consulta());

    $form->datetime('data_hora', __('Data hora'))
    ->required()
    ->format('DD/MM/YYYY HH:mm')
    ->default(null)
    ->attribute('autocomplete', 'off');

    $form->select('paciente_id', __('Paciente'))->required()->options(function () {
        $pacientes = \App\Models\Paciente::pluck('Nome', 'id')->toArray();
        return $pacientes;
    });

    $form->select('medico_id', __('Médico'))->required()->options(function () {
        $medicos = \App\Models\Medico::all()->map(function ($medico) {
            return [
                'id' => $medico->id,
                'text' => $medico->name . ' - ' . $medico->especialidade,
            ];
        });

        return $medicos->pluck('text', 'id');
    });

    $form->textarea('observacoes', __('Observacoes'));
    $form->text('status', __('Status'))->value('Agendada');

    return $form;
}


}
