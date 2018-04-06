@extends('layout.header_and_footer')
@section('main_content')
<div class="ui raised tiny container segment">
    <div class="top">
        <a href = "/classify"><h1 class="ui header">直播分类</h1></a>
        <div class="ui menu">
            <a class="blue item" href = "/classify">直播分类</a>
            <a class="violet item"href="/classify/php_live">PHP</a>
            <a class="purple item" href="/classify/java_live">Java</a>
            <a class="grey item"href="/classify/bigdate_live">大数据</a>
            <a class="pink item"href="/classify/html_live">HTML/CSS</a>
            <a class="brown item"href="/classify/python_live">Python</a>
            <a class="grey item"href="/classify/cpp_live">C++</a>
        </div>
    </div>
    <div class="ui main container">
        <div class="ui four column very padded doubling stackable grid container">
            @foreach ($lives as $live)
            <div class="column">
                <div class="ui link cards">
                    <div class="card">
                        <div class="tiny image">
                            <img src={{ $live->l_cover}}>
                        </div>
                        <div class="content">
                            <div class="header">{{ $live->l_headling }}</div>
                            <div class="meta">
                                <span><i class="user icon"></i> {{ $live->l_looker_num }} </span>
                            </div>
                            <div class="description">Matthew is an interior designer living in New York. </div>
                        </div>
                        <div class="extra content">
                            <!-- <span><i class="user icon"></i> 廖雪峰 </span> -->
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@stop
