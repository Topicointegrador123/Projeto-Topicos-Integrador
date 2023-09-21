<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Perfil extends Model
{
    use SoftDeletes, HasFactory;

    protected $table = 'perfil';
    protected $fillable = [
      'nome'
    ];

    public function usuario(){
        return $this->hasMany(Usuario::class, 'perfil_usuario', 'id');
    }
}
