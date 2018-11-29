<?php
/**
 * Created by PhpStorm.
 * User: peanutonetwo
 * Date: 30/11/18
 * Time: 0.31
 */

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TraguardiSeeder
{
    public function run()

    {

        $faker = Faker::create();
        $cliente_ids = \App\User::where('ruolo', 'cliente')->pluck('id')->toArray();
        $badge_ids = \App\Model\Badge::all()->pluck('id')->toArray();
        foreach ($cliente_ids as $cliente_id){
            DB::table('traguardi')->insert([
                'user_id' => $cliente_id,
                'badge_id' => $faker->randomElement($badge_ids),
            ]);
            DB::table('traguardi')->insert([
                'user_id' => $cliente_id,
                'badge_id' => $faker->randomElement($badge_ids),
            ]);
        }
    }


}
