<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Model\Student;
use Illuminate\Http\Request;

class RoomController extends Controller {

    /**
     *
     *
     * @return Response
     */
    public function room(Request $request)
    {
        
        $messages = $request->session()->get('messages');
        return view('room', ['messages' => $messages]);
    }

}
