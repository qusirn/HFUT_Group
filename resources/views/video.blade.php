@extends('layout.header_and_footer')
@section('main_content')
<div class="pusher">
    <div class="full height">
        <div class="article">
            <div class="main ui container">
                @foreach ($videos_arr as $classify => $videos)
                <div class="ui raised tiny container segment">
                    <h2 class="ui header">{{ $classify }}</h2>
                    <div class="ui four column very padded doubling stackable grid container">
                        @foreach ($videos as $video)
                        <div class="column">
                            <script src="js/video.js" charset="utf-8"></script>
                            <div class="ui special cards">
                                <div class="card">
                                    <div class="blurring dimmable image">
                                        <div class="ui dimmer">
                                            <div class="content">
                                                <div class="center">
                                                    <div class="ui inverted button">点击观看</div>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="/img/test/test.jpeg">
                                    </div>
                                    <div class="content">
                                        <a class="header">{{ $video['v_headling'] }}</a>
                                        <div class="meta">
                                            <span class="date">这里是课程介绍</span>
                                        </div>
                                    </div>
                                    <div class="extra content">
                                        <a><i class="users icon"></i>课程标签</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@stop
