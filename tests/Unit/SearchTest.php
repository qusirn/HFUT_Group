<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Response;
use Illuminate\Foundation\Testing\RefreshDatabase;



class RoomTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testSearch()
    {
        // $roomController = new RoomController();

        $request= $this->request("Get",/"fclassify",["keyword"=>"java")):
        $this->assertEquals(200,$request ->status());
    }
}
