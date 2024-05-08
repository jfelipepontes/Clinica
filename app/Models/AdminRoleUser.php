<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminRoleUser extends Model
{
    public $timestamps = false;
    protected $table = 'admin_role_users';
    protected $fillable = ['role_id', 'user_id']; // Adicione 'role_id' ao $fillable

    public function medico()
    {
        return $this->belongsTo(Medico::class, 'user_id');
    }
}
