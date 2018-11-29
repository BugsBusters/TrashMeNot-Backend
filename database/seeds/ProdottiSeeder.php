<?php
/**
 * Created by PhpStorm.
 * User: peanutonetwo
 * Date: 29/11/18
 * Time: 16.55
 */

use \Illuminate\Database\Seeder;

class ProdottiSeeder extends Seeder
{
    public function run()
    {
        DB::table('prodotti')->insert([

            'quantita' => '12',
            'prezzo' => '52.00',
            'descrizione' => 'Tazza',
            'categorie_id' => '1',
            'commerciante_id' => '1'

        ]);
    }

}
