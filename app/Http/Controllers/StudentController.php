<?php

namespace App\Http\Controllers;
use App\Model\Message;
use App\Model\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     *@SWG\GET(path="/person",
     *  tags={"user"},
     *  summary="个人中心",
     *  description="返回个人中心页面",
     *  operationId="index",
     *  @SWG\Parameter(in="header",name="user_id",type="string",description="用户ID",required=true,
     *  ),
     *  @SWG\Response(response="default", description="操作成功")
     *  )
     */
    public function index(Request $request)
    {
        if($request->session()->has('messages')){
            $messages = $request->session()->get('messages');
            $student = \App\Model\Student::where('s_id', $messages['user']['user_id'])->first();
            return view('person', [
                'messages' => $messages,
                'student' => $student,
            ]);
        }else{
            return redirect('joinus');
        }
    }

    public function update()
    {
        return view('student_update');
    }
}
