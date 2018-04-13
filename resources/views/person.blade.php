@extends('layout.header_and_footer')
@section('main_content')
<link rel="stylesheet" href="/css/person.css">
<div class="main ui container">
    <h2 class="ui center aligned header">
        <img src="/img/head tiny/patrick.png" class="ui circular image">
        <p>{{ $student->s_username }}</p>
        <a class="ui yellow label">Java</a>
        <a class="ui green label">PHP</a>
        <a class="ui teal label">Python</a>
    </h2>
    <div class="ui divider"></div>
    <div class="ui three column very padded doubling stackable grid container divided" >
        <div class="column">
            <h2 class="ui header">
                <i class="user icon"></i>
                <div class="content">
                    基本信息
                </div>
                <i class="settings icon tiny"></i>
            </h2>

            <div class="ui items">
                <div class="item">
                    <div class="content">
                        <div class="header">身份</div>
                        <div class="meta">
                            <a class="ui violet label">
                                <i id="icon" class="student icon"></i><p class="info">学生&nbsp;&nbsp;&nbsp;&nbsp;</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="content">
                        <div class="header">手机号</div>
                        <div class="meta">
                            <i id="icon" class="call square icon"></i><p class="info">{{ $student->s_tel }}&nbsp;&nbsp;&nbsp;&nbsp;</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="content">
                        <div class="header">电子邮箱</div>
                        <div class="meta">
                        @if ($student->s_email === '')
                            <i id="icon" class="mail outline icon"></i><p class="info">暂未绑定</p>
                        @else
                            <i id="icon" class="mail outline icon"></i><p class="info">{{ $student->s_email}}</p>
                        @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="column">
            <h2 class="ui header">
                <img class="ui image" src="/img/person/school.png">
                <div class="content">
                    学校信息
                </div>
            </h2>
            <div class="ui items">
                <div class="item">
                    <div class="content">
                        <div class="header">学校</div>
                        <div class="meta">
                            <a class="ui orange label">
                            @if ($student->s_school == '')
                                <i id="icon" class="flag icon"></i><p class="info">合肥工业大学</p>
                            @else
                                <i id="icon" class="flag icon"></i><p class="info">{{ $student->s_school}}</p>
                            @endif
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="content">
                        <div class="header">专业</div>
                        <div class="meta">
                            @if ($student->s_major == '')
                                <i id="icon" class="circle icon"></i></i><p class="info">暂未绑定</p>
                            @else
                                <i id="icon" class="circle icon"></i><p class="info">{{ $student->s_major}}</p>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="content">
                        <div class="header">学号</div>
                        <div class="meta">
                        @if ($student->s_code == '')
                            <i id="icon" class="add user icon"></i></i><p class="info">暂未绑定</p>
                        @else
                            <i id="icon" class="add user icon"></i></i><p class="info">{{ $student->s_code}}</p>
                        @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="column">
            <h2 class="ui header">
                <i class="unlock alternate icon"></i>
                <div class="content">
                    帐号信息
                </div>
            </h2>
            <div class="ui items">
                <div class="item">
                    <div class="content">
                        <div class="header">暂未定义</div>
                        <div class="meta">
                            <a class="ui red label">
                                <i id="icon" class="student icon"></i><p class="info">暂未定义&nbsp;&nbsp;&nbsp;&nbsp;</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="content">
                        <div class="header">暂未定义</div>
                        <div class="meta">
                            <i id="icon" class="call square icon"></i><p class="info">暂未定义&nbsp;&nbsp;&nbsp;&nbsp;</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="content">
                        <div class="header">暂未定义</div>
                        <div class="meta">
                        @if ($student->s_email === '')
                            <i id="icon" class="mail outline icon"></i><p class="info">暂未绑定</p>
                        @else
                            <i id="icon" class="mail outline icon"></i><p class="info">暂未定义</p>
                        @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ui hidden divider"></div>
    <a href="/person/update"><button class="fluid ui button" >编辑个人资料</button></a>
    <div class="ui hidden divider"></div>
    <div class="ui hidden divider"></div>
    <div class="ui hidden divider"></div>
    <div class="ui hidden divider"></div>
    <div class="ui horizontal divider">
        观看历史
    </div>
    <div class="ui hidden divider"></div>
    <div class="ui hidden divider"></div>

    <div class="containert">
        <div class="ui four column very padded doubling stackable grid container">
            @for ($i = 0; $i < 8; $i++)
            <div class="column">
                <div class="ui special cards">
                    <div class="card">
                        <div class="blurring dimmable image">
                            <div class="ui dimmer">
                                <div class="content">
                                    <div class="center">
                                        <div class="ui inverted button">Add Friend</div>
                                    </div>
                                </div>
                            </div>
                            <img src="/img/card.jpg">
                        </div>
                        <div class="content">
                            <a class="header">Team Fu</a>
                            <div class="meta">
                                <span class="date">Create in Sep 2014</span>
                            </div>
                        </div>
                        <div class="extra content">
                            <a>
                                <i class="users icon"></i>
                                2 Members
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </div>
</div>



@stop
