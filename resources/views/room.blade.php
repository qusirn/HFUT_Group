@extends('layout.header_and_footer')
@section('main_content')
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
            </div>
            <div class="ui tab" data-tab="second">
              2
            </div>
            <div class="ui tab" data-tab="third">
              3
            </div>
            <div class="ui tab" data-tab="fourth">
              4
            </div>
        </div>
        <div class="ui five wide column segment left aligned">
            <div class="reply_content">
                <div class="ui comments">
                    <h3 class="ui dividing header">Comments</h3>
                    @for ($i = 0; $i < 10; $i++)
                    <div class="comment">
                        <a class="avatar">
                            <img src="/img/head tiny/matt.jpg">
                        </a>
                        <div class="content">
                            <a class="author">Matt</a>
                            <div class="metadata">
                                <span class="date">Today at 5:42PM</span>
                            </div>
                            <div class="text">
                                How artistic!
                            </div>
                        </div>
                    </div>
                    <div class="comment">
                        <a class="avatar">
                            <img src="/img/head tiny/elliot.jpg">
                        </a>
                        <div class="content">
                            <a class="author">Elliot Fu</a>
                            <div class="metadata">
                                <span class="date">Yesterday at 12:30AM</span>
                            </div>
                            <div class="text">
                                <p>This has been very useful for my research. Thanks as well!</p>
                            </div>
                        </div>
                    </div>
                    <div class="comment">
                        <a class="avatar">
                            <img src="/img/head tiny/joe.jpg">
                        </a>
                        <div class="content">
                            <a class="author">Joe Henderson</a>
                            <div class="metadata">
                                <span class="date">5 days ago</span>
                            </div>
                            <div class="text">
                                Dude, this is awesome. Thanks so much
                            </div>
                        </div>
                    </div>
                    @endfor
                </div>
            </div>
            <div class="ui column reply_button right aligned">
                <form class="ui form">
                    <div class="field">
                        <textarea rows="2"></textarea>
                    </div>
                    <div class="ui blue labeled submit icon button">
                        <i class="icon edit"></i> Add Reply
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<link rel="stylesheet" type="text/css" href="/css/room.css">
<script src="/js/room.js"></script>
@stop
