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

        $this->call(NegozianteSeeder::class);
        //TODO DIRE AD ANDREA COSA PORCO DIO DOBBIAMO FARE 
        //$this->call(IndirizziSeeder::class);


        $this->call(CategorieSeeder::class);
        $this->call(ProdottiSeeder::class);

        $this->call(OrdiniTestataSeeder::class);
        $this->call(OrdiniDettagliSeeder::class);
        //$this->call(RateSeeder::class);

        $this->call(BlogSeeder::class);

        $this->call(DomandeRisposteSeeder::class);

        $this->call(BadgeSeeder::class);
        $this->call(TraguardiSeeder::class);

    }
}
