<?php
/**
 * Created by PhpStorm.
 * User: peanutonetwo
 * Date: 29/11/18
 * Time: 14.46
 */

namespace Tests\Unit;


use App\Model\Prodotto;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class ProdottoControllerTest extends TestCase
{
    use WithoutMiddleware;

    public function testPut()

    {

        $this->json('PUT','/api/prodotto/',[
            "quantita" => "22",
            "prezzo" => "25.10",
            "descrizione" => "descrizione",
            "categorie_id" => "1",
            "commerciante_id" => "1",
        ])->assertStatus(200);

    }

    public function testAll()
    {
        $this->json('GET','/api/prodotti')->assertStatus(200);
    }

    public function testFind()
    {
        $id = Prodotto::all()->last()->id;
        $this->json('GET', "/api/prodotto/$id")->assertStatus(200);
    }

    public function testPatch()
    {
        $id = Prodotto::all()->last()->id;
        $this->json('PATCH',"/api/prodotto/$id",[
            "quantita" => "22",
            "prezzo" => "25.10",
            "descrizione" => "descrizione",
            "categorie_id" => "1",
            "commerciante_id" => "1",
        ])->assertStatus(200);
    }

    public function testDelete()
    {
        $id = Prodotto::all()->last()->id;
        $this->json('DELETE',"/api/prodotto/$id")->assertStatus(200);
    }









}
