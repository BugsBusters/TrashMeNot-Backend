<?php
/**
 * Created by PhpStorm.
 * User: peanutonetwo
 * Date: 30/11/18
 * Time: 0.29
 */

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class RateSeeder
{

    public function run ()
    {
        $faker = Faker::create();
        $cliente_ids = \App\User::where('ruolo','cliente')->pluck('id')->toArray();
        $prodotti = \App\Model\Prodotto::all()->pluck('id')->toArray();
        DB::table('rate')->insert([
            'user_id' => $faker->randomElement($cliente_ids),
            'prodotti_id' => $faker->randomElement($prodotti),
            'rate' => $faker->numberBetween(0, 10),
        ]);
    }

}
