<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Paciente;

class PacienteController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Paciente';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */

    protected function grid()
    {
        $grid = new Grid(new Paciente());

        $grid->column('Nome', __('Nome'))->sortable();
        $grid->column('Data_Nascimento', __('Data de Nascimento'))->display(function ($date) {
            return \Carbon\Carbon::parse($date)->format('d/m/Y'); // Formato brasileiro de data
        });
        $grid->column('Genero', __('Gênero'));
        $grid->column('Endereco', __('Endereço'));
        $grid->column('Telefone', __('Telefone'));
        $grid->column('Email', __('Email'));
        $grid->column('created_at', __('Cadastrado em'))->display(function ($timestamp) {
            return \Carbon\Carbon::parse($timestamp)->format('d/m/Y'); // Apenas a data, formato brasileiro
        });

        $grid->filter(function($filter){

            // Remove the default id filter
            $filter->disableIdFilter();

            // Add a column filter
            $filter->like('Nome', 'Nome');

            //... additional filter options
        });

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
        $show = new Show(Paciente::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('Nome', __('Nome'));
        $show->field('Data_Nascimento', __('Data de Nascimento'))->as(function ($date) {
            return \Carbon\Carbon::parse($date)->format('d/m/Y'); // Formato brasileiro de data
        });
        $show->field('Genero', __('Gênero'));
        $show->field('Endereco', __('Endereço'));
        $show->field('Telefone', __('Telefone'));
        $show->field('Email', __('Email'));
        $show->field('created_at', __('Cadastrado em'))->as(function ($timestamp) {
            return \Carbon\Carbon::parse($timestamp)->format('d/m/Y'); // Apenas a data, formato brasileiro
        });

        return $show;
    }


    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Paciente());

        $form->text('Nome', __('Nome'));
        $form->date('Data_Nascimento', __('Data de Nascimento'));
        $form->text('Genero', __('Gênero'));
        $form->text('Endereco', __('Endereço'));
        $form->text('Telefone', __('Telefone'));
        $form->email('Email', __('Email'));

        return $form;
    }



}