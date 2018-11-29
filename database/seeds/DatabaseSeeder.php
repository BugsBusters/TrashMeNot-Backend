<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(CategorieSeeder::class);
        $this->call(NegozianteSeeder::class);
        $this->call(OrdiniTestataSeeder::class);
        $this->call(ProdottiSeeder::class);
    }
}
