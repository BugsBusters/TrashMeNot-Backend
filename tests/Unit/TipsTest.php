<?php

namespace Tests\Unit;


use App\Model\Blog;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;


class TipsTest extends TestCase
{
     use WithoutMiddleware;

     //insert
    public function testPut()
    {
        $this->json('PUT', '/api/tip', [
            'titolo' => "titolo prova",
            'descrizione' => "descrizione prova"
        ])->assertStatus(200);
    }

    //read
    public function testAll()
    {
        $this->json('GET', '/api/tips')->assertStatus(200);
    }

    //find
    public function testFind()
    {
        $id = Blog::all()->last()->id;
        $this->json('GET', "/api/tip/$id")->assertStatus(200);
    }

    public function testPatch()
    {
        $id = Blog::all()->last()->id;
        $this->json('PATCH', "/api/tip/$id", [
            'titolo' => "titolo prova2",
            'descrizione' => "descrizione prova2"
        ])->assertStatus(200);
    }


    //delete
    public function testDelete()
    {
        $id = Blog::all()->last()->id;
        $this->json("DELETE", "/api/tip/$id")->assertStatus(200);
    }
}
