<?php
/**
 * Created by PhpStorm.
 * User: edoardo
 * Date: 29/11/2018
 * Time: 23:31
 */


use Tests\TestCase;

class UserTest extends TestCase{


    public function testBadge()
    {
        $id= \App\User::find($id)->
        $this->json('GET',"/api/user/$id/badge")->assertStatus(200);
    }
}