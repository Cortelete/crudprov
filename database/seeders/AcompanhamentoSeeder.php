<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AcompanhamentoSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('acompanhamentos')->insert([
            ['nome' => 'Refrigerante da Madrugada'],
            ['nome' => 'Café Preto da Reprova'],
            ['nome' => 'Chá de Cadeira'],
            ['nome' => 'Água com Lágrimas'],
            ['nome' => 'Suco de Esperança'],
            ['nome' => 'Milkshake de Motivação'],
            ['nome' => 'Energético do Desespero'],
            ['nome' => 'Smoothie de Códigos Quebrados'],
            ['nome' => 'Toddy com TCC'],
            ['nome' => 'Capuccino de Correção Automática'],
            ['nome' => 'Chá de Camomila para Deploy'],
            ['nome' => 'Água Mineral 100% Pura Procrastinação'],
            ['nome' => 'Refrigerante 404 (Sabor não encontrado)'],
            ['nome' => 'Café Late do Backend'],
            ['nome' => 'Matchá do Front quebrado'],
            ['nome' => 'Refri do Git Merge'],
            ['nome' => 'Chá de Refatoração'],
            ['nome' => 'Água de Merge Conflict'],
            ['nome' => 'Guaraná da Reentrega'],
            ['nome' => 'Sprite de StackOverflow'],
        ]);
    }
}
