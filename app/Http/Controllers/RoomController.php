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
     /**
      *@SWG\GET(path="/room/{id}",
      *  tags={"room"},
      *  summary="直播间",
      *  description="返回直播间页面",
      *  operationId="room",
      *  @SWG\Parameter(in="path",name="$request",type="string",description="房间号",required=true,
      *  ),
      *  @SWG\Response(response="default", description="操作成功")
      *  )
      */
    public function room(Request $request)
    {
        // $request->session()->forget('messages');
        if($request->session()->has('messages')){
            $messages = $request->session()->get('messages');
            return view('room', $messages);
        }else{
            return view('room', ['messages' => Message::Message('error', 'unlogin', Message::none_user())]);
        }
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
