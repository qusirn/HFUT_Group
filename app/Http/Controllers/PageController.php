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

     /**
      *@SWG\GET(path="/joinus",
      *  tags={"user"},
      *  summary="页面控制器",
      *  description="如用户未登录，返回登录页面",
      *  operationId="joinus",
      *  @SWG\Parameter(in="path",name="$request",type="string",description="URL",required=true,
      *  ),
      *  @SWG\Response(response="default", description="操作成功")
      *  )
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
