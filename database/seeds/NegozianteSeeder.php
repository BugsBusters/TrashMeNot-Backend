<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class NegozianteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create();
        $user_ids = \App\User::where('ruolo','venditore')->pluck('id')->toArray();
        foreach ($user_ids as $user_id) {
            DB::table('negozi')->insert([
                'nome' => $faker->company,
                'p_iva' => $faker->numberBetween(456456766, 789789955),
                'user_id' => $user_id,
            ]);
        }
    }

}
