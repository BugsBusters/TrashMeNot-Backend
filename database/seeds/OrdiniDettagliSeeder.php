<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class OrdiniDettagliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $testata_ids = \App\User::where('ruolo','cliente')->pluck('id')->toArray();
        $prodotti = \App\Model\Prodotto::all()->pluck('id')->toArray();
        DB::table('ordini_dettagli')->insert([
            'testata_id' => $faker->randomElement($testata_ids),
            'prodotti_id' => $faker->randomElement($prodotti),
            'quantita' => $faker->numberBetween(1, 10),
            'prezzo_unitario' => $faker->numberBetween(1,50),
        ]);
    }
}
