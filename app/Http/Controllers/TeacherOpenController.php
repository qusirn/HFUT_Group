<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Live;
use Illuminate\Support\Facades\Storage;

class TeacherOpenController extends Controller
{

    //前台数据插入数据库
    public function store(Request $request)
    {
        //实例化一条数据
        $live = new \App\Model\Live;
        $l_code = $this->getLiveNum();
        //验证
        $this->validate($request, [
            'l_headling' => 'required|max:50',
            // 't_id' => 'required|integer|exists:teachers,t_id',
            'l_tag' => 'required|max:255',
            'l_classify' => 'required|max:50',
            'cover_img' => 'required|max:50'
        ]);
        $live->t_id = 1;
        $live->l_headling = $request->l_headling;
        $live->l_cover = $request->cover_img;
        $live->l_classify = $request->l_classify;
        $live->l_description = $request->l_description;
        $live->l_tag = $request->l_tag;
        if ($request->l_is_broadcast == "on") {
            $live->l_is_broadcast = 1;
        }else {
            $live->l_is_broadcast = 0;
        }
        $live->l_code = $l_code;
        $live->l_looker_num = 0;
        $live->l_is_pause = 0;
        $live->l_code_editor = 0;
        $live->l_chat = 1;
        $live->l_control_switch = 1;

        $url = Storage::putFileAs(
            'public/live_cover_img', $request->file('cover_img'), $live->l_code.'.jpg'
        );
        $live->l_cover = Storage::url($url);
        //存储
        $live->save();

        
        return redirect('live/'.$live->l_code);
    }

    //改变开关属性
    public function reverseSwitch($l_code, $tool)
    {
        //$tool对应数据库中的白板、ppt、视频等的字段
        //$value为tool字段对应的值
        $live = \App\Model\Live::where('l_code',$l_code);
        $value = $live->$tool;
        if ($value == 0) {
            $value = 1;
        }elseif ($value == 1) {
            $value = 0;
        }else {
            return false;
        }
        $live->update('$tool', $value);
    }

    //生成直播号
    public function getLiveNum()
    {
        $l_code=date("ymdHis");
        return $l_code;
    }
}
