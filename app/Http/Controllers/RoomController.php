<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Model\Student;
use App\Model\Message;
use Illuminate\Http\Request;

class RoomController extends Controller {

    /**
     *
     *
     * @return Response
     */
    public function room(Request $request)
    {
        return view('room');
    }

    public function live(Request $request)
    {
        return view('live');
    }

    public function host_board(Request $request)
    {
        return view('host_board');
    }

}
