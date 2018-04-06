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
