<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'crm', 'especialidade'];

    public function atendimentos()
    {
        return $this->hasMany(Atendimento::class);
    }
}

