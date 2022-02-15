<?php

namespace Database\Seeders;

use App\Models\Imovel;
use App\Models\Interessado;
use Illuminate\Database\Seeder;

class ImovelTableSeeder extends Seeder
{
    public function run() {

        $imovel1 = Imovel::firstorCreate([

            'codigo' => '01',
            'tipo' => 'casa',
            'pretensao' => 'alugar',
            'titulo' => 'casa bonita',
            'detalhes' => 'vista para o mar',
            'quartos' => '4',
            'valor' => 500,

        ]);

        $imovel2 = Imovel::firstorCreate([

            'codigo' => '23',
            'tipo' => 'apartamento',
            'pretensao' => 'comprar',
            'titulo' => 'apartamento bonito',
            'detalhes' => 'perto do shopping',
            'quartos' => 'quartos1',
            'valor' => 1500,

        ]);

        $imovel3 = Imovel::firstorCreate([

            'codigo' => '45',
            'tipo' => 'flat',
            'pretensao' => 'alugar',
            'titulo' => 'flat bonito',
            'detalhes' => 'vista para o mar',
            'quartos' => '1',
            'valor' => 2000,

        ]);

        $interessado1 = Interessado::firstorCreate([

            'nome' => 'joao croke',
            'email' => 'joaocroke@email.com'

        ]);

        $interessado2 = Interessado::firstorCreate([

            'nome' => 'lais',
            'email' => 'lais@email.com'

        ]);

        $interessado3 = Interessado::firstorCreate([

            'nome' => 'joao victor',
            'email' => 'jv@email.com'

        ]);
    }
}
