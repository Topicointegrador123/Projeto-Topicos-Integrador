<?php

namespace Database\Seeders;

use App\Models\Publicacao;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PublicacaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Publicacao::create([
            'titulo' => 'postagem zuada',
            'postagem' => 'OSAKPDAOPDcapjmcpoaskjdaPOSDKPOkcsacpoakdapoKApocks SOPKACPOASKPO',
            'tipo_publicacao' => 'postagem inicial do seeder',
            'usuario_id' => '1'
        ],
        [
            'titulo' => 'Primeira Postagem do projeto',
            'postagem' => 'Aqui começa a primeira postagem do projeto, que jah guie o caminho do projeto e não esqueça de atualizar as migrations e os seeders :D',
            'tipo_publicacao' => 'postagem inicial do seeder',
            'usuario_id' => '1'
        ]

        );
    }
}
