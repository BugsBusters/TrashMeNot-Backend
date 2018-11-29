<?php
/**
 * Created by PhpStorm.
 * User: peanutonetwo
 * Date: 29/11/18
 * Time: 23.58
 */

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class BadgeSeeder extends Seeder
{

    public function run()
    {
        $faker = Faker::create();
        $badge_texts = ["Benvenuto!","Complimenti! Hai risposto a 5 domande", "Wow! Hai accumulato 50 monete","Hai letto il tuo primo post", "Primo acquisto sullo store"];
        foreach ($badge_texts as $badge_text)

            DB::table('badge')->insert([
                'testo' => $badge_text,
                'foto' => '/badge.jpg',
                'punti' => rand(0,10),
            ]);
    }

}
