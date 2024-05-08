<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Paciente;
use Illuminate\Support\Facades\Auth;

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

        $grid->filter(function($filter){
            $filter->disableIdFilter();
            $filter->like('Cpf', 'CPF');
            $filter->like('Nome', 'Nome');
        });

        $allowedIds = [1, 44];
        if (!in_array(Auth::id(), $allowedIds)) {
            $grid->actions(function ($actions) {
                $actions->disableDelete();
            });
        }

        $grid->column('Cpf', __('CPF'))->sortable();
        $grid->column('Nome', __('Nome'))->sortable();
        $grid->column('Data_Nascimento', __('Data de Nascimento'))->display(function ($date) {
            return \Carbon\Carbon::parse($date)->format('d/m/Y'); // Formato brasileiro de data
        });

        $grid->column('Telefone', __('Telefone'));
        $grid->column('Email', __('Email'));
        $grid->column('created_at', __('Cadastrado em'))->sortable()->display(function ($timestamp) {
            return \Carbon\Carbon::parse($timestamp)->format('d/m/Y'); // Apenas a data, formato brasileiro
        });
        $grid->model()->orderBy('created_at', 'desc');

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

        $show->field('Cpf', __('CPF'));
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

        // $form->text('Cpf', __('CPF'));
        $form->text('Cpf', __('CPF'))->placeholder('000.000.000-00')->rules('required|string|size:14|regex:/^\d{3}\.\d{3}\.\d{3}-\d{2}$/');
        $form->text('Nome', __('Nome'));
        $form->date('Data_Nascimento', __('Data de Nascimento'));
        $form->text('Endereco', __('Endereço'));
        $form->phonenumber('Telefone', __('Telefone'))->options(['mask' => '(99) 99999-9999']);
        $form->email('Email', __('Email'));
        $form->radio('Genero', __('Gênero'))->options(['Masculino' => 'Masculino', 'Feminino' => 'Feminino'])->default('Masculino');

        return $form;
    }



}
