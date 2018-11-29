<?php
/**
 * Created by PhpStorm.
 * User: peanutonetwo
 * Date: 29/11/18
 * Time: 18.59
 */

namespace Tests\Unit;


use App\Model\Rate;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class RateControllerTest extends TestCase
{
    use  WithoutMiddleware;

    public function testPut()
    {
        $this->json('PUT','/api/rate/',[
            'user_id' => '1',
            'rate' => '3',
            'prodotti_id' => '1',
        ])->assertStatus(200);
    }

    public function testAll()
    {
        $this->json('GET','/api/rate')->assertStatus(200);
    }


    public function testFind()
    {
        $id = Rate::all()->last()->id;
        $this->json('GET', "/api/rate/$id")->assertStatus(200);
    }

    public function testPatch()
    {
        $id = Rate::all()->last()->id;
        $this->json('PATCH',"/api/rate/$id",[
            'user_id' => '1',
            'rate' => '3',
            'prodotti_id' => '1',
        ])->assertStatus(200);
    }

    public function testDelete()
    {
        $id = Rate::all()->last()->id;
        $this->json('DELETE',"/api/rate/$id")->assertStatus(200);
    }


}
