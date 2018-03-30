<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Users;
use Illuminate\Http\Request;

class AuthController extends Controller {

    /**
     *
     *
     * @return Response
     */
    public function Postregister(Request $request)
    {
        $userFunc = new Users;
        $message = $userFunc->register($request->username, $request->firstname, $request->lastname, $request->password);
        $this->Postlogin($request);
        return view('home');
    }

    public function Postlogin(Request $request)
    {
        $userFunc = new Users;
        $messages = $userFunc->login($request->username, $request->password);
        if($messages['statue']['value'] == 'success'){
            $request->session()->put('messages', $messages);
        }else{
            return view('/register', $messages);
        }

        return redirect('/');
    }

    public function logout(Request $request)
    {
        $request->session()->forget('messages');
        return redirect('/');
    }

}
