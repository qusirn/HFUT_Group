<?php

namespace App\Http\Controllers;
use App\Model\Video;
use App\Model\Message;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index(){
        //数据处理
        // 没有录播视频
        if(\App\Model\Video::all()->isEmpty()){
            return view('empty_video');
        }
        $videos_query = \App\Model\Video::all();
        $classifies = $videos_query->groupBy('v_classify');
        $classify_arr = $classifies->keys()->all();
        // 该分类前八的视频作为精选视频展示
        $videos_arr = array();
        foreach ($classifies as $classify_arr => $video_arr) {
             $recommend = $video_arr
                ->sortBy('v_looker_num')
                ->values()
                ->take(8);
            $videos_arr = array_merge($videos_arr, array($classify_arr => $recommend->toArray()));
        }
        Message::message('error', '学生已存在', Message::none_user());
        // print_r($videos_arr);
        return view('video', [
            'messages' => Message::message('error', '学生已存在', Message::none_user()),
            'videos_arr' => $videos_arr,
        ]);
    }

    

}
