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
        // $request->session()->forget('messages');
        if($request->session()->has('messages')){
            $messages = $request->session()->get('messages');
            return view('room', $messages);
        }else{
            return view('room', ['messages' => Message::Message('', '', Message::none_user())]);
        }
    }
}
