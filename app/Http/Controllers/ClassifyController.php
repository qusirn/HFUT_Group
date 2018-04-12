<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Model\Live;
use App\Model\Teacher;

class ClassifyController extends Controller
{
    //观看量前8直播列表
    public function index()
    {
        $lives = \App\Model\Live::all()
               ->sortByDesc('l_looker_num')
               ->take(8);
        return view('classify',['lives' => $lives]);
    }
    //查询php类直播
    public function php_live()
    {
        $lives = \App\Model\Live::where('l_classify',"PHP")
               ->orderBy('l_looker_num', 'desc')
               ->take(8)
               ->get();
        return view('classify',['lives' => $lives]);
    }
    //查询java类直播
    public function java_live()
    {
        $lives = \App\Model\Live::where('l_classify',"Java")
               ->orderBy('l_looker_num', 'desc')
               ->take(8)
               ->get();
        return view('classify',['lives' => $lives]);
    }
    //查询大数据类直播
    public function bigdate_live()
    {
        $lives = \App\Model\Live::where('l_classify',"BigData")
               ->orderBy('l_looker_num', 'desc')
               ->take(8)
               ->get();
        return view('classify',['lives' => $lives]);
    }
    //查询html类直播
    public function html_live()
    {
        $lives = \App\Model\Live::where('l_classify',"HTML")
               ->orderBy('l_looker_num', 'desc')
               ->take(8)
               ->get();
        return view('classify',['lives' => $lives]);
    }
    //查询python类直播
    public function python_live()
    {
        $lives = \App\Model\Live::where('l_classify',"Python")
               ->orderBy('l_looker_num', 'desc')
               ->take(8)
               ->get();
        return view('classify',['lives' => $lives]);
    }
    //查询c++类直播
    public function cpp_live()
    {
        $lives = \App\Model\Live::where('l_classify',"C++")
               ->orderBy('l_looker_num', 'desc')
               ->take(8)
               ->get();
        return view('classify',['lives' => $lives]);
    }
}
