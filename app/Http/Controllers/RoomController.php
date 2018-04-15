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
<<<<<<< HEAD
        // $request->session()->forget('messages');
        if($request->session()->has('messages')){
            $messages = $request->session()->get('messages');
            return view('room', $messages);
        }else{
            return view('room', ['messages' => Message::Message('error', 'unlogin', Message::none_user())]);
        }
=======
        return view('room');
>>>>>>> 5b643f378bd1761b7831e01ab9d9f6af161b94be
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
