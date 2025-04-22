<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PastelSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('pastels')->insert([
            ['sabor' => 'Lágrima de Aluno com Catupiry', 'tamanho' => 'Médio', 'acompanhamento_id' => 1],
            ['sabor' => 'Desespero de Final de Período', 'tamanho' => 'Gigante que mata aula', 'acompanhamento_id' => 2],
            ['sabor' => 'Carne de Véspera de Prova', 'tamanho' => 'Pequeno', 'acompanhamento_id' => 3],
            ['sabor' => 'TCC à Bolonhesa', 'tamanho' => 'Médio', 'acompanhamento_id' => 4],
            ['sabor' => 'Queijo com Bug Recorrente', 'tamanho' => 'Grande', 'acompanhamento_id' => 5],
            ['sabor' => 'Erro 404 - Sabor não encontrado', 'tamanho' => 'Pequeno', 'acompanhamento_id' => 1],
            ['sabor' => 'StackOverflow de Frango', 'tamanho' => 'Médio', 'acompanhamento_id' => 2],
            ['sabor' => 'Fritura Assíncrona com Bacon', 'tamanho' => 'Grande', 'acompanhamento_id' => 3],
            ['sabor' => 'Catupiry com Crise Existencial', 'tamanho' => 'Médio', 'acompanhamento_id' => 4],
            ['sabor' => 'C++on Catupiry', 'tamanho' => 'Pequeno', 'acompanhamento_id' => 5],
            ['sabor' => 'Sabor Ponto Extra', 'tamanho' => 'Gigante que mata aula', 'acompanhamento_id' => 1],
            ['sabor' => 'Reprovação Crocante', 'tamanho' => 'Médio', 'acompanhamento_id' => 2],
            ['sabor' => 'JSabor - O Pastel Dinâmico', 'tamanho' => 'Grande', 'acompanhamento_id' => 3],
            ['sabor' => 'PHP com Pimenta e Paciência', 'tamanho' => 'Médio', 'acompanhamento_id' => 4],
            ['sabor' => 'OOP (Ovo, Orégano e Presunto)', 'tamanho' => 'Pequeno', 'acompanhamento_id' => 5],
            ['sabor' => 'Commit Final (Prometo)', 'tamanho' => 'Grande', 'acompanhamento_id' => 1],
            ['sabor' => 'Deploy de Quatro Queijos', 'tamanho' => 'Gigante que mata aula', 'acompanhamento_id' => 2],
            ['sabor' => 'Sprint com Salsicha', 'tamanho' => 'Médio', 'acompanhamento_id' => 3],
            ['sabor' => 'Merge de Sabores', 'tamanho' => 'Grande', 'acompanhamento_id' => 4],
            ['sabor' => 'Pull Request de Pepperoni', 'tamanho' => 'Pequeno', 'acompanhamento_id' => 5],
            ['sabor' => 'NotFound com Chocolate (Doce)', 'tamanho' => 'Pequeno', 'acompanhamento_id' => 1],
            ['sabor' => 'Café com Catupiry (modo hardcore)', 'tamanho' => 'Pequeno', 'acompanhamento_id' => 2],
            ['sabor' => 'Segunda-feira Supreme', 'tamanho' => 'Médio', 'acompanhamento_id' => 3],
            ['sabor' => 'Refatoração de Carne Louca', 'tamanho' => 'Gigante que mata aula', 'acompanhamento_id' => 4],
            ['sabor' => 'MVC: Mussarela, Vinagrete e Calabresa', 'tamanho' => 'Grande', 'acompanhamento_id' => 5],
        ]);
    }
}
