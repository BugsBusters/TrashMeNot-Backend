<?php

namespace Tests\Unit;

use App\Model\Categoria;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CategoriaControllerTest extends TestCase
{

    // CRUD  CREATE READ UPDATE DELETE (PUT GET PATCH DELETE)
    use WithoutMiddleware;


    public function testPut()
    {
        $this->json('PUT','/api/categoria/',[
            'categoria' => 'Categoria1'
        ])->assertStatus(200);
    }

    public function testAll()
    {
        $this->json('GET','/api/categorie')->assertStatus(200);
    }


    public function testFind()
    {
        $id = Categoria::all()->last()->id;
        $this->json('GET', "/api/categoria/$id")->assertStatus(200);
    }

    public function testPatch()
    {
        $id = Categoria::all()->last()->id;
        $this->json('PATCH',"/api/categoria/$id",[
            'categoria' => 'Categoria2'
        ])->assertStatus(200);
    }

    public function testDelete()
    {
        $id = Categoria::all()->last()->id;
        $this->json('DELETE',"/api/categoria/$id")->assertStatus(200);
    }
}
