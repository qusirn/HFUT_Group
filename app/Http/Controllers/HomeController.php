<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Live;
use App\Model\Video;

class HomeController extends Controller
{
    //获取直播列表
    public function search_live()
    {
        $lives = \App\Model\Live::all()
               ->sortByDesc('l_looker_num')
               ->take(8);
        return $lives;
    }
    //获取录播列表
    public function search_video()
    {
        $videos = \App\Model\Video::all()
               ->sortByDesc('v_looker_num')
               ->take(8);
        return $videos;
    }
    public function search()
    {
        $lives = $this->search_live();
        $videos = $this->search_video();
        return view('home', [
            'lives'  => $lives,
            'videos' => $videos
        ]);
    }
}
