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
        $userFunc = new Student;
        $message = $userFunc->register(
            $request->name,
            $request->tel,
            $request->password
        );
        if($message['user'] == -1){
            return redirect(url()->previous());
        }
        $request->session()->put('messages', $messages);
        $this->Postlogin($request);
        return view('home');
    }

}
