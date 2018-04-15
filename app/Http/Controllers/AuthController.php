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

    /**
     *@SWG\POST(path="/Postregister",
     *  tags={"user"},
     *  summary="用户注册",
     *  description="用户注册接口，需填写手机号，短信验证码，用户名和密码",
     *  operationId="Postregister",
     *  @SWG\Parameter(in="formData",name="name",type="string",description="用户名",required=true,
     *  ),
     *  @SWG\Parameter(in="formData",name="tel",type="string",description="手机号码",required=true,
     *  ),
     *  @SWG\Parameter(in="formData",name="password",type="string",description="密码",required=true,
     *  ),
     *  @SWG\Response(response="default", description="操作成功")
     *  )
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

    /**
     *@SWG\POST(path="/Postlogin",
     *  tags={"user"},
     *  summary="用户登录",
     *  description="用户登录接口，需填手机号和密码",
     *  operationId="Postlogin",
     *  @SWG\Parameter(in="formData",name="tel",type="string",description="手机号码",required=true,
     *  ),
     *  @SWG\Parameter(in="formData",name="password",type="string",description="密码",required=true,
     *  ),
     *  @SWG\Response(response="default", description="操作成功")
     *  )
     */
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

    /**
     *@SWG\GET(path="/logout",
     *  tags={"user"},
     *  summary="用户登出",
     *  description="用户等处接口",
     *  operationId="logout",
     *  @SWG\Response(response="default", description="操作成功")
     *  )
     */
    public function logout(Request $request)
    {
        $request->session()->forget('messages');
        return redirect(url()->previous());
    }
}
