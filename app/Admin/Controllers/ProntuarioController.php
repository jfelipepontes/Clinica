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

        $grid->column('id', __('Id'));
        $grid->column('paciente_id', __('Paciente id'));
        $grid->column('medico_id', __('Medico id'));
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

        $show->field('id', __('Id'));
        $show->field('paciente_id', __('Paciente id'));
        $show->field('medico_id', __('Medico id'));
        $show->field('registro_medico', __('Registro medico'));

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

        $form->number('paciente_id', __('Paciente id'));
        $form->number('medico_id', __('Medico id'));
        $form->textarea('registro_medico', __('Registro medico'));

        return $form;
    }
}
