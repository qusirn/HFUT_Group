@extends('layout.header_and_footer')
@section('main_content')
<script src="/js/AgoraRTCSDK-2.1.1.js"></script>
<script src="/js/AgoraWBSDK-1.0.0.js"></script>
<script src="/js/AgoraSig-1.2.1.js"></script>
<script src="/js/src/ace.js" type="text/javascript" charset="utf-8"></script>
<script src="/js/code_reader.js" type="text/javascript" charset="utf-8"></script>
<script src="/js/live_reader.js"></script>
<div class="ui container large center aligned grid live_page">
    <div class="ui container grid center aligned">
        <div class="ui fourteen wide column room_message left aligned">
            <h2 class="ui header">
                <img class="ui image" src="/img/school.png">
                <div class="content">
                    {{ $live->l_headling }}
                    <div class="sub header">
                        {{ $live->l_description}}
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
            直播内容
        </h4>
        <div class="ui nine wide column live_frame">
            <div class="ui pointing secondary menu">
                <a class="item active" data-tab="first">大头</a>
                <a class="item" data-tab="second">白板</a>
                <a class="item" data-tab="third">PPT</a>
                <a class="item" data-tab="fourth">代码</a>
            </div>
            <div class="ui tab active" data-tab="first">
                <div id="video">
                    <div id="agora_local"></div>
                </div>
            </div>
            <div class="ui tab" data-tab="second">
                <div id="wbHost"></div>
            </div>
            <div class="ui tab" data-tab="third">
            </div>
            <div class="ui tab" data-tab="fourth" id="code">
            </div>
        </div>
        <div class="ui five wide column segment left aligned">
            <h3 class="ui dividing header" style="margin-top:-15px;padding-bottom:10px;">评论区</h3>
            <div class="reply_content">

                <div class="ui comments" id="comments">

                    @for ($i = 0; $i < 10; $i++)

                    @endfor

                </div>
            </div>
            <div class="ui column reply_button right aligned">
                <form class="ui form">
                    <div class="field">
                        <textarea rows="2" id="msg"></textarea>
                    </div>
                    <div class="ui two column grid">
                        <div class="column">
                            <img id="emoji_button" src="/img/emoji.png">
                            <div class="ui flowing popup top left transition hidden">
                                @include('layout.emoji_list')
                            </div>
                        </div>
                        <div class="column">
                            <div class="ui blue labeled submit icon button" id="send">
                                <i class="icon edit"></i> Add Reply
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<link rel="stylesheet" type="text/css" href="/css/room.css">
<script src="/js/room.js"></script>
<script src="/js/chat.js"></script>
<script src="/js/script_reader.js"></script>
<script src="/js/controller_for_student.js"></script>
@stop
