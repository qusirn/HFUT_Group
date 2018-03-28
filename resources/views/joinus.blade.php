@extends('layout.header_and_footer')

@section('main_content')
<style>
.main_container{
    margin-top:80px;
}
</style>
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
                            {!! csrf_field() !!}
                            <div class="two fields">
                                <div class="field">
                                    <label>First Name</label>
                                    <input placeholder="First Name" name="firstname" type="text">
                                </div>
                                <div class="field">
                                    <label>Last Name</label>
                                    <input placeholder="Last Name" name="lastname" type="text">
                                </div>
                            </div>
                            <div class="field">
                                <label>Username</label>
                                <input placeholder="Username" name="username" type="text">
                            </div>
                            <div class="field">
                                <label>Password</label>
                                <input type="password" name="password">
                            </div>
                            <div class="inline field">
                                <div class="ui checkbox">
                                    <input type="checkbox" name="term" id="terms">
                                    <label for="terms">我同意上述条款以及条件。</label>
                                </div>
                            </div>
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
                                <label>Username</label>
                                <input placeholder="Username" name="username" type="text">
                            </div>
                            <div class="field">
                                <label>Password</label>
                                <input type="password" name="password">
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

@stop
