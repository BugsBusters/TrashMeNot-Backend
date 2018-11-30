<?php
/**
 * Created by PhpStorm.
 * User: peanutonetwo
 * Date: 29/11/18
 * Time: 19.45
 */

namespace Tests\Unit;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use App\Model\Badge;
use Tests\TestCase;

class BadgeControllerTest extends TestCase
{

    use WithoutMiddleware;

    public function testPut()
    {

        $this->json('PUT','/api/badge',[
            'foto' => 'foto',
            'testo' => 'testo',
            'punti' => '2'
        ])->assertStatus(200);
    }




    public function testAll()
    {
        $this->json('GET','/api/badge')->assertStatus(200);
    }

    public function testFind()
    {
        $id = Badge::all()->last()->id;
        $this->json('GET', "/api/badge/$id")->assertStatus(200);
    }


    public function testPatch()
    {
        $id = Badge::all()->last()->id;
        $this->json('PATCH',"/api/badge/$id",[
            'foto' => 'foto',
            'testo' => 'testo',
            'punti' => '20',
        ])->assertStatus(200);
    }

    public function testDelete()
    {
        $id = Badge::all()->last()->id;
        $this->json('DELETE',"/api/badge/$id")->assertStatus(200);
    }



}
