<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\QueryException;

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

    /**
     * 
     */
    public static function updateProperties($registro)
    {
        try {
            $update = Categorias::find($registro->id);
            $update->descricao = $registro->descricao;
            $update->save();

            if (!empty($update->id)) {
                return $update;
            }

            return false;

        } catch (QueryException $e) {
            return $e;
        }
    }

}
