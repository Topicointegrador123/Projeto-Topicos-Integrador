<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;
    protected $fillable =
    [
     'descricao'
    ];

    protected $attributes = [
        'comentario_usuario_id' => '1',
    ];

    public function usuario()
    {
        return $this->hasOne(Usuario::class,'comentario_usuario_id', 'id');
    }

    public function publicacao()
    {
        return $this->hasOne(Publicacao::class,'publicacao_id', 'id');
    }

    public static function getComentarios ($publicacao_id)
    {
        $comentarios = Comentario::where('publicacao_id', $publicacao_id)->get();
        return compact('comentarios');
    }
}

