<?php
/**
 * Created by PhpStorm.
 * User: peanutonetwo
 * Date: 29/11/18
 * Time: 19.34
 */

namespace Tests\Unit;


use App\Model\Badge;
use App\Model\Traguardo;
use App\User;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class TraguardiControllerTest extends TestCase
{
    use WithoutMiddleware;

    public function testPut()
    {
        $idbadge = Badge::all()->last()->id;
        $iduser = User::all()->last()->id;
        $this->json('PUT','/api/traguardo/',[
            'user_id' => $iduser,
            'badge_id' => $idbadge
        ])->assertStatus(200);
    }

    public function testAll()
    {
        $this->json('GET','/api/traguardi')->assertStatus(200);
    }

    public function testFind()
    {
        $id = Traguardo::all()->last()->id;
        $this->json('GET', "/api/traguardo/$id")->assertStatus(200);
    }
    public function testPatch()
    {
        $id = Traguardo::all()->last()->id;
        $this->json('PATCH',"/api/traguardo/$id",[
            'user_id' => '1',
            'badge_id' => '4',
        ])->assertStatus(200);
    }
    /*
    public function testDelete()
    {
        $id = Traguardo::all()->last()->id;
        $this->json('DELETE',"/api/traguardo/$id")->assertStatus(200);
    }


    public function testUserBadges()
    {
        $id = User::all()->last()->id;
        $this->json('GET', "/api/user/$id/badge")->assertStatus(200);
    }
*/






}
