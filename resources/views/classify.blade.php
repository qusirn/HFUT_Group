@extends('layout.header_and_footer')
@section('main_content')
<link rel="stylesheet" href="/css/classify.css">
<link rel="stylesheet" href="/css/animate.min.css">
<div class="ui hidden divider"></div>
<div class="ui hidden divider"></div>
<div class="center">
    <div class="ui secondary menu">
        <div class="header item">形式:</div>
        <a class="item active" data-tab="live">直播</a>
        <a class="item" data-tab="video">录播</a>
    </div>
    <div class="ui tab active" data-tab="live">
        <div class="ui divider"></div>
        <div class="ui secondary menu">
            <div class="header item">分类:</div>
            <a class="item active" data-tab="live/C++">C++</a>
            <a class="item" data-tab="live/Java">Java</a>
            <a class="item" data-tab="live/Python">Python</a>
            <a class="item" data-tab="live/PHP">PHP</a>
            <a class="item" data-tab="live/C">C</a>
        </div>
        <div class="ui hidden divider"></div>
        <div class="ui hidden divider"></div>
        <div class="ui hidden divider"></div>
        <div class="ui tab active" data-tab="live/C++">
            @include('layout.classify_list')
        </div>
        <div class="ui tab" data-tab="live/Java">
            @include('layout.classify_list')
        </div>
        <div class="ui tab" data-tab="live/Python">
            @include('layout.classify_list')
        </div>
        <div class="ui tab" data-tab="live/PHP">
            @include('layout.classify_list')
        </div>
        <div class="ui tab" data-tab="live/C">
            @include('layout.classify_list')
        </div>
    </div>
    <div class="ui tab" data-tab="video">
        <div class="ui divider"></div>
        <div class="ui secondary menu">
            <div class="header item">分类:</div>
            <a class="item active" data-tab="video/C++">C++</a>
            <a class="item" data-tab="video/Java">Java</a>
            <a class="item" data-tab="video/Python">Python</a>
            <a class="item" data-tab="video/PHP">PHP</a>
            <a class="item" data-tab="video/C">C</a>
        </div>
        <div class="ui hidden divider"></div>
        <div class="ui hidden divider"></div>
        <div class="ui hidden divider"></div>
        <div class="ui tab active" data-tab="video/C++">
            @include('layout.classify_list')
        </div>
        <div class="ui tab" data-tab="video/Java">
            @include('layout.classify_list')
        </div>
        <div class="ui tab" data-tab="video/Python">
            @include('layout.classify_list')
        </div>
        <div class="ui tab" data-tab="video/PHP">
            @include('layout.classify_list')
        </div>
        <div class="ui tab" data-tab="video/C">
            @include('layout.classify_list')
        </div>
    </div>
</div>
<script src="/js/classify.js"></script>
@stop
