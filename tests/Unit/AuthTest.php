<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class AuthTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testPostregister()
    {
        $request = $this->call('POST', '/Postregister',["name"=>"haoon","tel"=>"17730226546","password"=>"123456"]);
        $this->assertEquals(302, $request->status());
    }
    public function testPostlogin()
    {
        $request = $this->call('POST', '/Postlogin',["name"=>"haoon","password"=>"123456"]);
        $this->assertEquals(302, $request->status());
    }
}
