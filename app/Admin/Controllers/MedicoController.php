<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Medico;

class MedicoController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Funcionários';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Medico());

        $grid->filter(function($filter){
            $filter->disableIdFilter();
            $filter->like('name', 'Nome');
            $filter->like('especialidade', 'Especialidade');
        });

        // $grid->disableDelete();
        $grid->disableCreation();

        $grid->model()->where('id', '>', 1);
        $grid->column('name', __('Nome'))->sortable();
        $grid->column('especialidade', __('Especialidade'))->sortable();
        $grid->column('numero_sala', __('Sala'))->sortable();

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
        $show = new Show(Medico::findOrFail($id));

        $show->field('id', __('Código'));
        $show->field('name', __('Nome'));
        $show->field('username', __('Login'));
        $show->field('especialidade', __('Especialidade'));
        $show->field('numero_sala', __('Sala'));
        $show->field('created_at', __('Cadastrado Em'))->as(function ($value) {
            return \Carbon\Carbon::parse($value)->format('d/m/Y');
        });
        // $show->text('Senha', __('*****'))->default('********');
        // $show->field('avatar', __('Avatar'));
        // $show->field('remember_token', __('Remember token'));
        // $show->field('created_at', __('Cadastrado Em'));
        // $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Medico());

        $form->text('name', __('Nome'));
        $form->text('especialidade', __('Especialidade'));
        $form->text('numero_sala','Sala');
        $form->text('username', __('Login'));
        // $form->password('password', __('Senha'));
        // $form->image('avatar', __('Avatar'));
        // $form->text('remember_token', __('Remember token'));


        return $form;
    }
}
