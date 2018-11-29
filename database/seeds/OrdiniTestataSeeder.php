<?php
/**
 * Created by PhpStorm.
 * User: peanutonetwo
 * Date: 29/11/18
 * Time: 16.51
 */

use Illuminate\Database\Seeder;

class OrdiniTestataSeeder extends Seeder
{

    public function run ()
    {
        DB::table('ordini_testata')->insert([

            'venditore_id' => "1",
            'cliente_id' => "1",
            'totale' => '200',
            'sconto' => '3'
        ]);
    }

}
