<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publicacao extends Model
{
    protected $table = 'publicacao';
    use HasFactory;
    protected $fillable = [
      'postagem',
      'titulo',
      'tipo_publicacao',
      'usuario_id',
      'image',
    ];

    protected $attributes = [
        'tipo_publicacao' => '1',
        'usuario_id' => '1'
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuario_id', 'id');
    }

    public function comentario()
    {
        return $this->hasMany(Comentario::class, 'publicacao_id', 'id');
    }

    public static function getPublicacoes(string|null $search = '')
    {
        return Publicacao::where(function ($query) use ($search){
            if($search){
                $query->where('id', $search);
//                $query->orWhere('data', 'LIKE', "%{$search}%");
            }
        })->get();
    }
}
