<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Model\YunPian;
use Illuminate\Http\Request;

class SmsController extends Controller {

    /**
     *
     *
     * @return Response
     */
     /**
      *@SWG\POST(path="/Postcaptcha",
      *  tags={"user"},
      *  summary="短信验证",
      *  description="向用户手机发验证短信",
      *  operationId="sms_func",
      *  @SWG\Parameter(in="path",name="tel",type="string",description="电话号码",required=true,
      *  ),
      *  @SWG\Response(response="default", description="操作成功")
      *  )
      */
    public function sms_func(Request $request)
    {
        $sms = new YunPian;
        $tel = $request->tel;
        $sms->send(
            $request->tel,
            '【5A5A】您的验证码是1234'
        );
    }
}
