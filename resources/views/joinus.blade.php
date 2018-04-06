@extends('layout.header_and_footer')

@section('main_content')

<script src="/js/register.js"></script>
<div class="ui shape container text">
    <div class="sides centered">
        <div class="side">
            <div class="ui container main_container text">
                <div class="ui three column grid">
                    <div class="ui ten wide column centered piled segment">
                        <div class="ui attached message">
                            <div class="header">欢迎来<strong>学习</strong>！ </div>
                            <p>填写下面的表单来注册新的账户</p>
                        </div>
                        <form class="ui form attached fluid segment" id="register" method="POST" action="/Postregister">
                            <div class="two fields">
                                <div class="field">
                                    <label>手机号</label>
                                    <input placeholder="请输入手机号" name="tel" type="text" id="tel_num">
                                </div>
                                <div class="two fields" id="captcha">
                                    <div class="field">
                                        <label>验证码</label>
                                        <input name="captcha" type="text">
                                    </div>
                                    <div class="field">
                                        <label>获取验证码</label>
                                        <div class="ui gray button captcha_button">获取</div>
                                    </div>
                                </div>
                            </div>
                            <div class="two fields">
                                <div class="field">
                                    <label>姓名</label>
                                    <input placeholder="请输入姓名" name="name" type="text">
                                </div>
                                <div class="field">
                                    <label>Password</label>
                                    <input type="password" name="password">
                                </div>
                            </div>
                            {!! csrf_field() !!}
                            <div class="ui blue submit button">Submit</div>
                        </form>
                        <div class="ui bottom attached warning message"><i class="icon help"></i> 已经注册？ <a class="changepage">点此</a>登录。 </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="active side">
            <div class="ui container main_container text">
                <div class="ui three column grid">
                    <div class="ui ten wide column centered piled segment">
                        <div class="ui attached message">
                            <div class="header">欢迎来到我们的站点！ </div>
                            <p>填写下面的表单登录</p>
                        </div>
                        <form class="ui form attached fluid segment" id="login" method="POST" action="/Postlogin">
                            {!! csrf_field() !!}
                            <div class="field">
                                <label>手机号</label>
                                <input placeholder="请填写手机号" name="tel" type="text">
                            </div>
                            <div class="field">
                                <label>密码</label>
                                <input placeholder="请填写密码" type="password" name="password">
                            </div>
                            <div class="ui blue submit button">Submit</div>
                        </form>
                        <div class="ui bottom attached warning message">
                            <i class="icon help"></i> 尚未注册？ <a class="changepage">点此</a>注册。
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<link rel="stylesheet" type="text/css" href="/css/joinus.css">
@stop
