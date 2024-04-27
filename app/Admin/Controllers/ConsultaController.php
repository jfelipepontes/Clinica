<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Consulta;

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

        // $grid->column('id', __('Cod'));
        $grid->column('paciente.Nome', __('Paciente'));
        $grid->column('medico.name', __('Medico'));
        $grid->column('data_hora', __('Dia'))->display(function ($data_hora) {
            // Forçar a conversão para um objeto DateTime
            $data_hora = new \DateTime($data_hora);
            return $data_hora->format('d/m/Y H:i');
        });
        $grid->column('observacoes', __('Tipo'));
        $grid->column('status', __('Status'));

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

        $show->field('id', __('Id'));
        $show->field('paciente.Nome', __('Paciente'));
        $show->field('medico.name', __('Medico'));
        $show->field('data_hora', __('Data hora'));
        $show->field('observacoes', __('Observacoes'));
        $show->field('status', __('Status'));

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

        $form->number('paciente_id', __('Paciente id'));
        $form->number('medico_id', __('Medico id'));
        $form->number('prontuario_id', __('Prontuario id'));
        $form->datetime('data_hora', __('Data hora'))->default(date('Y-m-d H:i:s'));
        $form->textarea('observacoes', __('Observacoes'));
        $form->text('status', __('Status'));

        return $form;
    }
}
