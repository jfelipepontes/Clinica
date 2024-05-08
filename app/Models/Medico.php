<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\AdminRoleUser;

class Medico extends Model
{
    protected $table = 'admin_users';

    protected static function boot()
    {
        parent::boot();

        static::created(function ($medico) {
            // Cria um novo registro em admin_role_users
            AdminRoleUser::insert([
                'role_id' => 2, // Defina o role_id como 2
                'user_id' => $medico->id, // Defina o user_id como o ID do admin_user recém-criado
            ]);
        });
    }
}
