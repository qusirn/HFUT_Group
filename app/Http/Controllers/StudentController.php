<?php

namespace App\Http\Controllers;
use App\Model\Message;
use App\Model\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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

    public function info_update(Request $request)
    {
        $messages = $request->session()->get('messages');
        $student = \App\Model\Student::where('s_id', $messages['user']['user_id'])->first();
        if($student->s_email == $request->s_email) {
            $this->validate($request, [
                's_username' => 'required|string|min:4|max:24',
                's_school' => 'nullable',
                's_major' => 'nullable',
                's_code' => 'nullable',
            ]);
        } else {
            $this->validate($request, [
                's_username' => 'required|string|min:4|max:24',
                's_email' => 'nullable|email|unique:students,s_email',
                's_school' => 'nullable',
                's_major' => 'nullable',
                's_code' => 'nullable',
            ]);
        }
        $student->s_username = $request->s_username;
        $student->s_email = $request->s_email;
        $student->s_school = $request->s_school;
        $student->s_major = $request->s_major;
        $student->s_code = $request->s_code;
        $student->save();
        $is_update = True;
        $request->session()->put('is_update', $is_update);
        $request->session()->put('messages', Message::message('success', '欢迎 '.$student->s_username, Message::user($student)));
        //return($student->toArray());
        return redirect()->route('person');
    }

    public function header_update(Request $request)
    {
        $is_update = False;
        if ($request->hasFile('header_img')) {
            $messages = $request->session()->get('messages');
            $student = \App\Model\Student::where('s_id', $messages['user']['user_id'])->first();
            $url = Storage::putFileAs(
                'public/header_img', $request->file('header_img'), $student->s_id.'.png'
            );
            $is_update = True;
            $student->s_header = Storage::url($url);
            $student->save();
        }
        $request->session()->put('is_update', $is_update);
        $request->session()->put('messages', Message::message('success', '修改头像成功', Message::user($student)));

        return redirect()->route('person');
    }

    public function get_student(Request $requess)
    {
        $status = 'error';
        $ret = array("status"=>$status);
        if($request->session()->has('messages')){
            $messages = $request->session()->get('messages');
            $student = \App\Model\Student::where('s_id', $messages['user']['user_id'])->first();
            $ret['status'] = 'success';
            $ret['data'] = $student->toArray();
            // print_r($ret);
            return response()->json($ret);
        }else{
            // print_r($ret);
            return response()->json($ret);
        }
    }
    public function update_student(Request $request)
    {
        $status = 'error';
        $ret = array("status"=>$status);
        if($request->session()->has('messages')){
            $messages = $request->session()->get('messages');
            $student = \App\Model\Student::where('s_id', $messages['user']['user_id'])->first();
            $ret['status'] = 'success';
            $ret['data'] = $student->toArray();
            // print_r($ret);
            return response()->json($ret);
        }else{
            // print_r($ret);
            return response()->json($ret);
        }

    }
}
