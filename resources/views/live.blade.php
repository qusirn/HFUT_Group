@extends('layout.header_and_footer')
@section('main_content')

<script src="/js/AgoraRTCSDK-2.1.1.js"></script>
<script src="/js/AgoraWBSDK-1.0.0.js"></script>
<script src="/js/AgoraSig-1.2.1.js"></script>
<script src="/js/script-host.js"></script>
<script src="/js/live.js"></script>
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
                    <div id="ready_screen" class="ready_screen">
                        <div class="ui active centered inline loader"></div>
                        <div class="ui hidden divider"></div>
                        <p>请做好准备……</p>
                    </div>
                    <div id="agora_local"></div>
                </div>
            </div>
            <div class="ui tab board" data-tab="second">
                <div id="ready_screen" class="ready_screen">
                    <div class="ui active centered inline loader"></div>
                    <div class="ui hidden divider"></div>
                    <p>请做好准备……</p>
                </div>
            </div>
            <div class="ui tab" data-tab="third">
                <div id="ready_screen" class="ready_screen">
                    <div class="ui active centered inline loader"></div>
                    <div class="ui hidden divider"></div>
                    <p>请做好准备……</p>
                </div>
            </div>
            <div class="ui tab" data-tab="fourth">
                <div id="ready_screen" class="ready_screen">
                    <div class="ui active centered inline loader"></div>
                    <div class="ui hidden divider"></div>
                    <p>请做好准备……</p>
                </div>
                4
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

        <h4 class="ui horizontal divider header controller">
            <i class="settings icon"></i>
            控制面板
        </h4>

        <div class="ui container text five column grid">
            <div class="statistic column">
                <div class="value">
                    <div id="head_live_button" class="slide_button">
                        <input type="checkbox" name="check-1" value="4" class="lcs_check" autocomplete="off" />
                    </div>
                </div>
                <div class="label">
                    大头直播
                </div>
            </div>
            <div class="statistic column">
                <div class="value">
                    <div id="board_live_button" class="slide_button">
                        <input type="checkbox" name="check-2" value="4" class="lcs_check" autocomplete="off" />
                    </div>
                </div>
                <div class="label">
                    白板
                </div>
            </div>
            <div class="statistic column">
                <div class="value">
                    <div id="ppt_live_button" class="slide_button">
                        <input type="checkbox" name="check-3" value="4" class="lcs_check" autocomplete="off" />
                    </div>
                </div>
                <div class="label">
                    ppt
                </div>
            </div>
            <div class="statistic column">
                <div class="value">
                    <div id="code_live_button" class="slide_button">
                        <input type="checkbox" name="check-4" value="4" class="lcs_check" autocomplete="off" />
                    </div>
                </div>
                <div class="label">
                    代码编辑器
                </div>
            </div>
        </div>
        <div class="ui container ten wide column grid">
            <div class="ui fluid selection dropdown six wide column">
                <input type="hidden" name="user">
                <i class="dropdown icon"></i>
                <div class="default text">Select Friend</div>
                <div class="menu">
                    <div class="item" data-value="jenny">
                        <img class="ui mini avatar image" src="/img/head tiny/jenny.jpg">
                        Jenny Hess
                    </div>
                </div>
            </div>
            <div class="ui four wide column forbid">
                <button class="orange ui button">禁封用户</button>
            </div>
        </div>
        <div class="ui container ten wide column grid">
            <div class="ui fluid selection dropdown six wide column">
                <input type="hidden" name="user">
                <i class="dropdown icon"></i>
                <div class="default text">Select Friend</div>
                <div class="menu">
                    <div class="item" data-value="jenny">
                        <img class="ui mini avatar image" src="/img/head tiny/jenny.jpg">
                        Jenny Hess
                    </div>
                </div>
            </div>
            <div class="ui four wide column forbid">
                <button class="green ui button">解封用户</button>
            </div>
        </div>
        <div class="ui container ten wide column grid">
            <button class="ui red button eight wide column">退出直播</button>
        </div>
    </div>
</div>
<link rel="stylesheet" type="text/css" href="/css/live.css">
<link rel="stylesheet" type="text/css" href="/css/room.css">
<script src="/js/room.js"></script>
<script src="/js/chat.js"></script>
@stop
