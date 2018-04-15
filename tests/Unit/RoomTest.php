<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Response;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Http\Controllers\RoomController;


class RoomTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        // $roomController = new RoomController();
        $request = $this->call('GET', '/room/123');
        $this->assertEquals(200, $request->status());
    }
}
