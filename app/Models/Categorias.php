<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    // use HasFactory;

    protected $fillable = [
        'descricao'
    ];

       /**
     * Display Address of the authenticated user
     * Exibir endereço do usuário autenticado
     * @return [type]
     */
    public function findCategoriasAuth()
    {
        return Categorias::all(); 
    }
}
