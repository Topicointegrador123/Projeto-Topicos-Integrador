<?php

namespace App\Models;

use App\Http\Requests\UsuarioStoreUpdateFormRequest;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuario';
    use HasFactory;
    protected $fillable =[
        'nome',
        'email',
        'perfil_usuario',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function perfil()
    {
        return $this->hasOne(Perfil::class, 'perfil_usuario', 'id');
    }

    public function publicacao()
    {
        return $this->hasMany(Publicacao::class, 'usuario_id', 'id');
    }

    public function comentario()
    {
        return $this->hasMany(Comentario::class, 'comentario_usuario_id', 'id');
    }

    public static function getUsuarios(string|null $search = '')
    {
        //refatoração do PhpStorm
        return Usuario::where(function ($query) use ($search){
            if($search){
                $query->where('email', $search);
                $query->orWhere('nome', 'LIKE', "%{$search}%");
            }
        })->get();

//        $usuarios = $this->where(function ($query) use ($search){
//            if($search){
//                $query->where('email', $search);
//                $query->orWhere('nome', 'LIKE', "%{$search}%");
//            }
//        })->get();
//        return $usuarios;
    }

}
