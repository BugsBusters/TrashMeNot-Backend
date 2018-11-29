<?php
/**
 * Created by PhpStorm.
 * User: peanutonetwo
 * Date: 29/11/18
 * Time: 18.20
 */

namespace Tests\Unit;


use App\Model\Ordini_Dettagli;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class OrdiniDettagliControllerTest extends TestCase
{

    use WithoutMiddleware;


    public function testPut()
    {
        $this->json('PUT','/api/dettagliordine/',[

            'testata_id' => '1',
            'prodotti_id' => '1',
            'quantita' => '20',
            'prezzo_unitario' => '20',

        ])->assertStatus(200);
    }

    public function testAll()
    {
        $this->json('GET','/api/dettagliordini')->assertStatus(200);
    }

    public function testFind()
    {
        $id = Ordini_Dettagli::all()->last()->id;
        $this->json('GET', "/api/dettagliordine/$id")->assertStatus(200);
    }

    public function testPatch()
    {
        $id = Ordini_Dettagli::all()->last()->id;

        $this->json('PATCH',"/api/dettagliordine/$id",[

            'testata_id' => '1',
            'prodotti_id' => '1',
            'quantita' => '20',
            'prezzo_unitario' => '30',

        ])->assertStatus(200);
    }

    public function testDelete()
    {
        $id = Ordini_Dettagli::all()->last()->id;
        $this->json('DELETE',"/api/dettagliordine/$id")->assertStatus(200);
    }






}
