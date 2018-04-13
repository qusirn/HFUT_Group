@extends('layout.header_and_footer')
@section('main_content')
<script src="/js/person.js" charset="utf-8"></script>
<div class="main ui container">
    <div id="menu" class="ui top attached tabular menu">
        <a class="active item" data-tab="base-info">基本信息 </a>
        <a class="item" data-tab="school-info">学校信息 </a>
        <a class="item" data-tab="account-info">帐号信息 </a>
        <a class="item" data-tab="update-passwd">修改密码 </a>
        <a class="item" data-tab="update-tel">修改绑定手机 </a>
        <a class="item" data-tab="update-email">修改绑定邮箱 </a>
    </div>
    <div class="ui bottom attached tab segment active" data-tab="base-info">
      基本信息
    </div>
    <div class="ui bottom attached tab segment" data-tab="school-info">
      学校信息
    </div>
    <div class="ui bottom attached tab segment" data-tab="account-info">
      帐号信息
    </div>
    <div class="ui bottom attached tab segment" data-tab="update-passwd">
      修改密码
    </div>
    <div class="ui bottom attached tab segment" data-tab="update-tel">
      绑定手机
    </div>
    <div class="ui bottom attached tab segment" data-tab="update-email">
      修改邮箱
    </div>
</div>

@stop
