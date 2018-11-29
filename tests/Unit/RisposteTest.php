<?php

namespace Tests\Unit;


use App\Model\Domanda;
use App\Model\Risposta;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;


class RisposteTest extends TestCase
{
    use WithoutMiddleware;

    public function testAll()
    {
        $id = Domanda::all()->last()->id;
        $this->json('GET', "/api/domanda/$id/risposte")->assertStatus(200);
    }

    public function testFind()
    {
        $id = Risposta::all()->last()->id;
        $this->json('GET', "/api/risposta/$id")->assertStatus(200);
    }

    public function testPut()
    {
        $dom_id = Risposta::all()->last()->domande_id;
        $this->json('PUT', "/api/domanda/$dom_id/risposta", [
            'risposta' => "risposta prova ciao22",
            'esatto' => "0",
            'domande_id' => $dom_id
        ])->assertStatus(200);
    }

    public function testPatch()
    {
        $id = Risposta::all()->last()->id;
        $this->json('PATCH', "/api/risposta/$id", [
            'risposta' => "risposta prova",
            'esatto' => 0,
            'domande_id' => 1,

        ])->assertStatus(200);
    }

    //delete
    public function testDelete()
    {
        $id = Risposta::all()->last()->id;
        $this->json("DELETE", "/api/risposta/$id")->assertStatus(200);
    }

}