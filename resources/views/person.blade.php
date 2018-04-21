@extends('layout.header_and_footer')
@section('main_content')
<link rel="stylesheet" href="/css/person.css">
<div class="personal">
    <div class="ui horizontal divider">个人中心</div>
    <div class="ui hidden divider"></div>
    <div class="ui hidden divider"></div>
    <div class= "personalmain">
        <div class="personaltop">
            <div>
                @if($student->s_header == '')
                    <img class="ui small left floated image" src="/img/head tiny/joe.jpg">
                @else
                    <img class="ui small left floated image" src="{{ $student->s_header }}">
                @endif
                <h2 class = "name">{{ $student->s_username }}</h2>&nbsp;&nbsp;<a class="ui tag label" onclick="openpopup()">修改</a>
            </div>
            <div class="label">
                <a class="ui blue basic label">JAVA<i class="icon close"></i></a>
                <a class="ui blue basic label">PYTHON<i class="icon close"></i></a>
                <a class="ui blue basic label">网络<i class="icon close"></i></a>
            </div>
            <div class="address">
                <i id="icon" class="student icon"></i><p class="info">学生&nbsp;&nbsp;&nbsp;&nbsp;</p>
                <i id="icon" class="call square icon"></i><p class="info">{{ $student->s_tel }}&nbsp;&nbsp;&nbsp;&nbsp;</p>
                <i id="icon" class="mail outline icon"></i><p class="info">{{ $student->s_email }}</p>

            </div>
        </div>

        <div class="personcontent">
            <div class="ui top attached tabular menu">
                <a class="item active" data-tab="infomation">基本资料 </a>
                <a class="item" data-tab="head">修改头像 </a>
                <a class="item" data-tab="name">修改昵称 </a>
                <a class="item" data-tab="real_name">实名认证 </a>
                <a class="item" data-tab="phone">绑定手机 </a>
                <a class="item" data-tab="email">修改邮箱 </a>
                <div class="right menu">
                    <div class="item">
                        <button class="ui right labeled icon button" onclick="turn()"><i class="right arrow icon"></i> 开启直播 </button>
                    </div>
                </div>
            </div>
            <div class="ui bottom attached tab segment active" data-tab="infomation">
                <div class="ui cards">
                    <div class="card">
                        <div class="content">
                            <div class="header">未绑定手机</div>
                            <div class="cardimage">
                                <img src="/img/phone.png"></img>
                            </div>
                            <div class="introduce">
                                <div class="description"><p class="introduce">绑定手机可享受到手机相关的安全和提醒服务</p> </div>
                            </div>
                        </div>
                        <div class="ui bottom attached button"><i class="add icon"></i> 立即绑定 </div>
                    </div>
                    <div class="card">
                        <div class="content">
                            <div class="header">邮箱未绑定</div>
                            <div class="cardimage">
                                <img src="/img/mail.png"></img>
                            </div>
                            <div class="introduce">
                                <div class="description">您可以使用邮箱来保证您的用户安全 </div>
                            </div>
                        </div>
                        <div class="ui bottom attached button"><i class="add icon"></i> 绑定邮箱 </div>
                    </div>
                    <div class="card">
                        <div class="content">
                            <div class="header">实名认证</div>
                            <div class="cardimage">
                                <img id="icon" src="/img/renzheng.png"></img>
                            </div>
                            <div class="introduce">
                                <div class="description">尚未实名认证，不能开启直播。 </div>
                            </div>
                        </div>
                        <div class="ui bottom attached button"><i class="add icon"></i> 实名认证 </div>
                    </div>
                    <div class="card">
                        <div class="content">
                            <div class="header">上传头像</div>
                            <div class="cardimage">
                            @if($student->s_header == '')
                                <img class="ui small left floated image" src="/img/head tiny/joe.jpg">
                            </div>
                            <div class="introduce">
                                <div class="description">暂未上传头像 </div>
                            </div>
                            @else
                                <img class="ui small left floated image" src="{{ $student->s_header }}">
                            </div>
                            <div class="introduce">
                                <div class="description">已上传头像 </div>
                            </div>
                            @endif
                        </div>
                        <div class="ui bottom attached button"><i class="add icon"></i> 更换头像 </div>
                    </div>
                </div>
            </div>
            <div class="ui bottom attached tab segment" data-tab="head">
                <div class="inside">
                    <p>请选择一个新照片进行上传编辑头像保存后，你可以需要刷新一下本页面（按F5键），才能查看最新的头像效果。</p>
                    <div id="user-header" class="info">
                        @if($student->s_header == '')
                            <img class="ui small left floated image" src="/img/head tiny/joe.jpg">
                        @else
                            <img class="ui small left floated image" src="{{ $student->s_header }}">
                        @endif
                    </div>
                    <form id="header-form" enctype="multipart/form-data" class="ui form" method="POST" action="{{ route('s-header-update') }}">
                        {!! csrf_field() !!}
                        <div class="inline fields">
                            <div class="field">
                                <label>头像文件</label>
                                <input type="file" accept="image/*" name="header_img" onchange="preview(this)">
                            </div>
                        </div>

                        <button class="fluid ui button" type="submit">上传头像</button>
                    </form>
                </div>
            </div>
            <div class="ui bottom attached tab segment" data-tab="name">
                <div class="inside">
                    <h4>当前昵称：&nbsp;&nbsp;haooon</h4>
                    <form class="ui form">
                        <div class="three wide field">
                            <label>新昵称</label>
                            <input type="text" name="" placeholder="请输入新的昵称">
                        </div>
                        <button class="ui button" type="submit">确认修改</button>
                    </form>
                    <div class="ui hidden divider"></div>
                    <div class="ui hidden divider"></div>
                    <p>说明：</p>
                    <p>1.修改昵称后，请用新昵称和原来的密码登录，旧的昵称将无法登录。</p>
                    <p>2.第一次可免费修改昵称。</p>
                    <p>3.新昵称需符合注册规范，可使用数字，字母，汉字，不超过5-30个字符。</p>
                    <p>4.如遇服务器更新或其它问题导致昵称修改失败，请联系我们。</p>
                </div>
            </div>
            <div class="ui bottom attached tab segment" data-tab="real_name">
                <div class="inside">
                    <form class="ui form">
                        <div class="field">
                            <label>身份证</label>
                            <input type="text" name="" placeholder="身份证号码">
                        </div>
                        <div class="field">
                            <label>姓名</label>
                            <input type="text" name="" placeholder="姓名">
                        </div>
                        <div class="field">
                            <div class="ui checkbox">
                                <input type="checkbox" tabindex="0" class="hidden">
                                <label>我同意本服务客户隐私条款</label>
                            </div>
                        </div>
                        <button class="ui button" type="submit">提交认证</button>
                    </form>
                </div>
            </div>
            <div class="ui bottom attached tab segment" data-tab="phone">
                <div class="inside">
                    <form class="ui form">
                        <div class="field">
                            <label>手机号码</label>
                            <input type="text" name="" placeholder="手机号码">
                        </div>
                        <div class="field">
                            <label>验证码</label>
                            <input type="text" name="" placeholder="验证码">
                        </div>
                        <div class="ui hidden divider"></div>
                        <p>您将会收到一个验证码，验证码验证过程不收取任何费用</p>
                        <div class="ui hidden divider"></div>
                        <button class="ui button" type="submit">确认绑定</button>
                    </form>
                </div>
            </div>
            <div class="ui bottom attached tab segment" data-tab="email">
                <div class="inside">
                    <form class="ui form">
                        <div class="field">
                            <label>原邮箱</label>
                            <input type="text" name="" placeholder="原邮箱">
                        </div>
                        <div class="field">
                            <label>新邮箱</label>
                            <input type="text" name="" placeholder="新邮箱">
                        </div>
                        <div class="ui hidden divider"></div>
                        <div class="ui hidden divider"></div>
                        <button class="ui button" type="submit">确认修改</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="ui hidden divider"></div>
<div class="ui hidden divider"></div>
<div class="ui hidden divider"></div>
<div class="ui hidden divider"></div>
<div class="ui hidden divider"></div>
<div class="containertTitle">
    <div class="ui horizontal divider">
        我的录播
    </div>
    <div class="ui hidden divider"></div>
    <a href="#"><span class="moreButton"><i class="list icon"></i></span></a>
    <div class="ui hidden divider"></div>
</div>
<div class="containert">
    <div class="ui special cards">
        @for ($i = 0; $i < 8; $i++)
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
        @endfor
    </div>
</div>

<div id="change_info" class="ui change_info modal">
    <i class="close icon"></i>
    <div class="header">
        个人信息修改
    </div>
    <div class="image content">
        <div class="ui medium image">
            @if($student->s_header == '')
                <img src="/img/head tiny/joe.jpg">
            @else
                <img src="{{ $student->s_header }}">
            @endif
        </div>
        <div class="description">
            <form class="ui form" method="POST" action="{{ route('s-info-update') }}">
                {!! csrf_field() !!}
                <div class="inline fields">
                    <div class="field">
                        <label>昵称</label>
                        <input type="text" name="s_username" placeholder="昵称" value="{{ $student->s_username }}">
                    </div>
                </div>
                <div class="inline fields">
                    <div class="field">
                        <label>邮箱</label>
                        <input type="text" name="s_email" placeholder="邮箱" value="{{ $student->s_email }}">
                    </div>
                </div>
                <div class="inline fields">
                    <div class="field">
                        <label>学校</label>
                        <input type="text" name="s_school" placeholder="学校" value="{{ $student->s_school }}">
                    </div>
                </div>
                <div class="inline fields">
                    <div class="field">
                        <label>专业</label>
                        <input type="text" name="s_major" placeholder="专业" value="{{ $student->s_major }}">
                    </div>
                </div>
                <div class="inline fields">
                    <div class="field">
                        <label>学号</label>
                        <input type="text" name="s_code" placeholder="学号" value="{{ $student->s_code }}">
                    </div>
                </div>
                <button class="ui button" type="submit">确认</button>
            </form>
        </div>
    </div>
    <div class="actions">
        <div class="ui black deny button">
            关闭
        </div>
    </div>
</div>
<div class="ui hidden divider"></div>
<div class="ui hidden divider"></div>
<div class="ui hidden divider"></div>
<div class="ui hidden divider"></div>
@include('layout.teacher_open')
<script type="text/javascript" src="/js/openpopup.js"></script>
<script type="text/javascript" src="/js/tab.js"></script>
<script src="/js/teacheropen.js"></script>
@stop
