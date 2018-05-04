@extends('layout.header_and_footer')
@section('main_content')

<script src="/js/AgoraRTCSDK-2.1.1.js"></script>
<script src="/js/AgoraWBSDK-1.0.0.js"></script>
<script src="/js/AgoraSig-1.2.1.js"></script>
<script src="/js/controller_signal.js"></script>
<script src="/js/script-host.js"></script>
<script src="/js/src/ace.js" type="text/javascript" charset="utf-8"></script>
<script src="/js/code.js" type="text/javascript" charset="utf-8"></script>
<script src="/js/live.js"></script>
<script src="/js/recording.js"></script>
<script src="/js/lc_switch.js" type="text/javascript"></script>
<div class="ui container large center aligned grid live_page">
    <div class="ui container grid center aligned">
        <div class="ui fourteen wide column room_message left aligned">
            <h2 class="ui header">
                <img class="ui image" src="/img/school.png">
                <div class="content">
                    Learn More
                    <div class="sub header">
                        Check out our plug-in marketplace
                    </div>
                </div>
            </h2>

            <a class="ui green label">Java</a> &nbsp
            <a class="ui teal label">C++</a> &nbsp
            <a class="ui blue label">Python</a> &nbsp
            <a class="ui violet label">Learning</a> &nbsp
            <a class="ui purple label">haooon</a> &nbsp

        </div>
        <h4 class="ui horizontal divider header">
            <i class="tag icon"></i>
            录博内容
        </h4>
        <video src="movie.ogg" controls="controls" height="480px" width="960px">
        您的浏览器不支持 video 标签。
        </video>
    </div>
</div>

@stop
