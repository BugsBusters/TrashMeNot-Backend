<?php

namespace Tests\Unit;


use App\Model\Blog;
use App\Model\Domanda;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;


class DomandeTest extends TestCase
{
    use WithoutMiddleware;

    //insert
    public function testPut()
    {
        $ran = rand(1,10);
        $this->json('PUT', '/api/domanda', [
            'domanda' => "domanda prova",
            'livello' => "$ran"
        ])->assertStatus(200);
    }

    //read
    public function testAll()
    {
        $this->json('GET', '/api/domande')->assertStatus(200);
    }

    //find
    public function testFind()
    {
        $id = Domanda::all()->last()->id;
        $this->json('GET', "/api/domanda/$id")->assertStatus(200);
    }

    public function testPatch()
    {
        $id = Domanda::all()->last()->id;
        $this->json('PATCH', "/api/domanda/$id", [
            'domanda' => "domanda prova2",
            'livello' => 2
        ])->assertStatus(200);
    }


    //delete
    public function testDelete()
    {
        $id = Domanda::all()->last()->id;
        $this->json("DELETE", "/api/domanda/$id")->assertStatus(200);
    }
}
