<?php
/**
 * Created by PhpStorm.
 * User: peanutonetwo
 * Date: 29/11/18
 * Time: 16.55
 */

use \Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProdottiSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        $categorie = \App\Model\Categoria::all()->pluck('id')->toArray();
        $seller_ids = \App\User::where('ruolo','venditore')->pluck('id')->toArray();
        $prodotti = ["Cover per telefono","Scarpe con Plastica Riciclata","Ciotole Di Vinile","Camioncino","Occhiali Da Sole","Shopping Bag","Spazzolino","Lampadina","Quaderno","Vaso","Bottiglia","Tappi di sughero","Tazza","Zaino","Papillon","T-Shirt","Libro","Bracciale","Portachiavi","Collana"];
        foreach ($prodotti as $prodotto) {
            DB::table('prodotti')->insert([

                'quantita' => $faker->numberBetween(1, 20),
                'prezzo' => $faker->numberBetween(10, 500),
                'descrizione' => $prodotto,
                'categorie_id' => $faker->randomElement($categorie),
                'commerciante_id' => $faker->randomElement($seller_ids),

            ]);
        }
    }

}
