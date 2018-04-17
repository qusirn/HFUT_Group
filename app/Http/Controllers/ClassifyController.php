<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Model\Live;
use App\Model\Teacher;
use App\Model\Video;

class ClassifyController extends Controller
{
    //观看量前8直播列表
    public function index()
    {
        $lives = \App\Model\Live::all()
               ->sortByDesc('l_looker_num')
               ->take(8);
        return view('classify', ['lives' => $lives]);
    }

    //查询直播/录播
    public function search(Request $request)
    {
        $formal = $request->formal;
        $classify = $request->classify;

        if($formal == "录播"){
            if($classify == '全部'){
                $videos = \App\Model\Video::all()
                       ->sortByDesc('v_looker_num')
                       ->take(8);
            }else {
                $videos = \App\Model\Video::where('v_classify', $classify)
                       ->orderBy('v_looker_num', 'desc')
                       ->take(8)
                       ->get();
            }
            return view('video_list', ['videos' => $videos]);

        }else{
            if($classify == '全部'){
                $lives = \App\Model\Live::all()
                       ->sortByDesc('l_looker_num')
                       ->take(8);
            }else {
                $lives = \App\Model\Live::where('l_classify', $classify)
                       ->orderBy('l_looker_num', 'desc')
                       ->take(8)
                       ->get();
            }
            return view('classify_list', ['lives' => $lives]);
        }
    }
}
