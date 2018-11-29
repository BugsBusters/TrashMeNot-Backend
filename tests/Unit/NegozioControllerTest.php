<?php
/**
 * Created by PhpStorm.
 * User: peanutonetwo
 * Date: 29/11/18
 * Time: 12.39
 */

namespace Tests\Unit;


use App\Model\Negozio;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class NegozioControllerTest extends TestCase

{
    use WithoutMiddleware;

    public function testPut()
    {
        $this->json('PUT','/api/negozi/',[
            'nome' => 'nome1',
            'user_id' => '1',
            'p_iva' =>'123456789'
        ])->assertStatus(200);
    }

    public function testAll()
    {
        $this->json('GET','/api/negozi')->assertStatus(200);
    }


    public function testFind()
    {
        $id = Negozio::all()->last()->id;
        $this->json('GET', "/api/negozi/$id")->assertStatus(200);
    }

    public function testPatch()
    {
        $id = Negozio::all()->last()->id;
        $this->json('PATCH',"/api/negozi/$id",[
            '' => 'Categoria2'
        ])->assertStatus(200);
    }

    public function testDelete()
    {
        $id = Categoria::all()->last()->id;
        $this->json('DELETE',"/api/categoria/$id")->assertStatus(200);
    }




}
