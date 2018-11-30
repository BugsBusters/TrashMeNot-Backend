<?php
/**
 * Created by PhpStorm.
 * User: peanutonetwo
 * Date: 29/11/18
 * Time: 15.37
 */

namespace Tests\Unit;


use App\Model\Ordine_Testata;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class OrdiniTestataControllerTest extends TestCase
{
    use WithoutMiddleware;


    public function testPut()
    {
        $this->json('PUT','/api/ordinetestata/',[
            "cliente_id" => "1",
            "venditore_id" => "1",
            "sconto" =>"10",
            "totale" => "100",
        ])->assertStatus(200);
    }

    public function testAll()
    {
        $this->json('GET','/api/ordinitestata')->assertStatus(200);
    }

    public function testFind()
    {
        $id = Ordine_Testata::all()->last()->id;
        $this->json('GET', "/api/ordinetestata/$id")->assertStatus(200);
    }


    public function testPatch()
    {
        $id = Ordine_Testata::all()->last()->id;
        $this->json('PATCH',"/api/ordinetestata/$id",[
            "cliente_id" => "1",
            "venditore_id" => "1",
            "sconto" =>"20",
            "totale" => "200",
        ])->assertStatus(200);
    }


    public function testDelete()
    {
        $id = Ordine_Testata::all()->last()->id;
        $this->json('DELETE',"/api/ordinetestata/$id")->assertStatus(200);
    }

    public function testAllDettagli()
    {
        $id = Ordine_Testata::all()->last()->id;
        $this->json('GET',"api/ordinetestata/$id/dettagli")->assertStatus(200);
    }




}
