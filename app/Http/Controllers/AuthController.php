<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Model\Student;
use Illuminate\Http\Request;

class AuthController extends Controller {

    /**
     *
     *
     * @return Response
     */
    public function Postregister(Request $request)
    {
        $student = new Student;
        $messages = $student->register(
            $request->name,
            $request->tel,
            $request->password
        );
        $request->session()->put('messages', $messages);
        if($messages['statue']['value'] != 'success'){
            return redirect('/joinus');
        }
        return redirect($request->session()->get('last_page'));
    }

    public function Postlogin(Request $request)
    {
        $student = new Student;
        $messages = $student->login(
            $request->tel,
            $request->password
        );
        $request->session()->put('messages', $messages);
        if($messages['statue']['value'] == 'success'){
            return redirect($request->session()->get('last_page'));
        }else{
            return redirect('/joinus');
        }
    }

    public function logout(Request $request)
    {
        $request->session()->forget('messages');
        return redirect(url()->previous());
    }
}
