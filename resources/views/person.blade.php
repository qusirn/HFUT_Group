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
                <img class="ui small left floated image" src="/img/userphoto.png">
                <h2 class = "name">haooon</h2>&nbsp;&nbsp;<a class="ui tag label" onclick="openpopup()">修改</a>
            </div>
            <div class="label">
                <a class="ui blue basic label">JAVA<i class="icon close"></i></a>
                <a class="ui blue basic label">PYTHON<i class="icon close"></i></a>
                <a class="ui blue basic label">网络<i class="icon close"></i></a>
            </div>
            <div class="address">
                <i id="icon" class="map outline icon"></i><p class="info">安徽合肥市&nbsp;&nbsp;&nbsp;&nbsp;</p>
                <i id="icon" class="call square icon"></i><p class="info">18756493615&nbsp;&nbsp;&nbsp;&nbsp;</p>
                <i id="icon" class="thumbs outline up icon"></i><p class="info">2,340赞</p>
            </div>
        </div>
        <div class="personcontent">
            <div class="ui top attached tabular menu">
                <a class="active item">基本资料 </a>
                <a class="item">修改头像 </a>
                <a class="item">修改昵称 </a>
                <a class="item">实名认证 </a>
                <a class="item">绑定手机 </a>
                <a class="item">修改邮箱 </a>
                <div class="right menu">
                    <div class="item">
                        <button class="ui right labeled icon button"><i class="right arrow icon"></i> 开启直播 </button>
                    </div>
                </div>
            </div>
            <div class="ui bottom attached segment">
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
                                <img src="/img/userphotomini.png"></img>
                            </div>
                            <div class="introduce">
                                <div class="description">已上传头像 </div>
                            </div>
                        </div>
                        <div class="ui bottom attached button"><i class="add icon"></i> 更换头像 </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
<div class="ui modal">
    <i class="close icon"></i>
    <div class="header">
        个人信息修改
    </div>
    <div class="image content">
        <div class="ui medium image">
            <img src="/img/userphoto.png">
        </div>
        <div class="description">
            <div class="ui header">您可修改以下个人信息</div>
            <div class="infoitem">
                <div class="ui input">
                    <p class="infotitle">昵称:&nbsp;&nbsp;</p>
                    <input type="text" value="haooon"></input>
                </div>
            </div>
            <div class="infoitem">
                <div class="ui input">
                    <p class="infotitle">生日:&nbsp;&nbsp;</p>
                    <input type="text" value="1997-11-12"></input>
                </div>
            </div>
            <div class="infoitem">
                <div class="ui input">
                    <p class="infotitle">学校:&nbsp;&nbsp;</p>
                    <input type="text" value="合肥工业大学"></input>
                </div>
            </div>
            <div class="infoitem">
                <div class="ui input">
                    <p class="infotitle">手机:&nbsp;&nbsp;</p>
                    <input type="text" value="18756493615"></input>
                </div>
            </div>
            <div class="infoitem">
                <div class="ui input">
                    <p class="infotitle">邮箱:&nbsp;&nbsp;</p>
                    <input type="text" value="1163488165@qq.com"></input>
                </div>
            </div>
        </div>
    </div>
    <div class="actions">
        <div class="ui black deny button">
            取消
        </div>
        <div class="ui positive right labeled icon button">
            确认
            <i class="checkmark icon"></i>
        </div>
    </div>
</div>
<div class="ui hidden divider"></div>
<div class="ui hidden divider"></div>
<div class="ui hidden divider"></div>
<div class="ui hidden divider"></div>
<script type="text/javascript" src="/js/openpopup.js"></script>
@stop
