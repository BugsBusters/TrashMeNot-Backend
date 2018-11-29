<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker =Faker::create();
        foreach (range(1,20) as $index) {
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => bcrypt('secret'),
                'punti' => $faker->numberBetween(0, 500),
                'coins' => $faker->numberBetween(5, 100),
                'ruolo' => $faker->randomElement(["cliente", "venditore"]),
                'livello' => $faker->numberBetween(1, 27),
                'progresso' => $faker->numberBetween(0,2500),
            ]);
        }
    }
}
