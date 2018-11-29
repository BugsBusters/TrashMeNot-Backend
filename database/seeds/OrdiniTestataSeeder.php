<?php
/**
 * Created by PhpStorm.
 * User: peanutonetwo
 * Date: 30/11/18
 * Time: 0.19
 */

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class OrdiniTestataSeeder extends Seeder
{

    public function run ()
    {
        $faker = Faker::create();
        $cliente_ids = \App\User::where('ruolo','cliente')->pluck('id')->toArray();
        $seller_ids = \App\User::where('ruolo','venditore')->pluck('id')->toArray();
        foreach (range(0,19) as $index)
            DB::table('ordini_testata')->insert([

                'data' => $faker->date('y-m-d'),
                'venditore_id' => $faker->randomElement($seller_ids),
                'cliente_id' => $faker->randomElement($cliente_ids),
                'totale' => $faker->numberBetween(10, 200),
                'sconto' => $faker->numberBetween(0,50),
            ]);
    }



}
