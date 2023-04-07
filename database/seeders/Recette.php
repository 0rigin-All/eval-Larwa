<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Recette extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('recettes')->delete();
 DB::table('recettes')->insert([
 'titre' => 'Pates carbonara',
 'ingredients' => 'pates, jambon, creme',
 'photo' => ' http://webmmi.iut-tlse3.fr/~pecatte/Laravel/Pates/PatesCarbo.jpg',
 'duree' => 20
 ]);
 DB::table('recettes')->insert([
 'titre' => 'Pates bolognaises',
 'ingredients' => 'pates, sauce tomate, viande',
 'photo' => ' http://webmmi.iut-tlse3.fr/~pecatte/Laravel/Pates/PatesBolo.jpg',
 'duree' => 15
 ]);
    }
}
