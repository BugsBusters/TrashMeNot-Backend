<?php
/**
 * Created by PhpStorm.
 * User: peanutonetwo
 * Date: 29/11/18
 * Time: 12.39
 */

namespace Tests\Unit;


use App\Model\Negozio;
use App\User;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class NegozioControllerTest extends TestCase

{
    use WithoutMiddleware;

    public function testPut()
    {
        $this->json('PUT','/api/negozio/',[
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
        $this->json('GET', "/api/negozio/$id")->assertStatus(200);
    }

    public function testPatch()
    {
        $id = Negozio::all()->last()->id;
        $this->json('PATCH',"/api/negozio/$id",[
            'nome' => 'nome1',
            'user_id' => '1',
            'p_iva' =>'123456789'
        ])->assertStatus(200);
    }

    public function testnegozioUser()
    {
        $id = User::all()->last()->id;
        $this->json('GET', "/api/user/$id/negozio")->assertStatus(200);
    }

    public function testDelete()
    {
        $id = Negozio::all()->last()->id;
        $this->json('DELETE',"/api/negozio/$id")->assertStatus(200);
    }




}
