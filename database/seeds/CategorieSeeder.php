<?php

use Illuminate\Database\Seeder;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorie = ["Vestiti", "Scuola", "Accessori", "Arredamento", "Giocattolo", "Tecnologia"];
        foreach ($categorie as $categoria){
            DB::table('categorie')->insert([
                'categoria' => $categoria
            ]);
        }
    }
}
