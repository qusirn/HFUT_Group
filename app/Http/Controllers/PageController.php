<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Model\Student;
use App\Model\Message;
use Illuminate\Http\Request;

class PageController extends Controller {

    /**
     *
     *
     * @return Response
     */
    public function joinus(Request $request)
    {
        if($request->session()->has('messages')){
            if($request->session()->get('messages')['user'] != -1){
                if($request->session()->has('last_page')){
                    return redirect($request->session()->get('last_page'));
                }
                return view('joinus');
            }
        }
        if(url()->previous() != 'http://192.168.10.10/joinus'){
            $messages = $request->session()->put('last_page', url()->previous());
        }
        return view('joinus');
    }
}
