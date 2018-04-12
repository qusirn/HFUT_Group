<?php

namespace App\Http\Controllers;
use App\Model\Message;
use App\Model\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function index(Request $request)
    {
        // $request->session()->forget('messages');
        if($request->session()->has('messages')){
            $messages = $request->session()->get('messages');
            $student = \App\Model\Student::where('s_id', $messages['user']['user_id'])->first();
            return view('person', [
                'messages' => $messages,
                'student' => $student,
            ]);
        }else{
            return view('joinus', ['messages' => Message::Message('', '', Message::none_user())]);
        }
    }
}
