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
            <a id="live-all" class="live item active" data-tab="live-all">全部</a>
            <a id="live-C++" class="live item" data-tab="live-C++">C++</a>
            <a id="live-all" class="live item" data-tab="live-Java">Java</a>
            <a id="live-all" class="live item" data-tab="live-Python">Python</a>
            <a id="live-all" class="live item" data-tab="live-PHP">PHP</a>
            <a id="live-all" class="live item" data-tab="live-C">C</a>
        </div>
        <div class="ui hidden divider"></div>
        <div class="ui hidden divider"></div>
        <div class="ui hidden divider"></div>
        <div id = "live-all-1" class="classify-list ui tab active" data-tab="live-all">
            @include('classify_list')
        </div>
        <div id = "live-all-2" class="classify-list ui tab active" data-tab="live-C++">

        </div>
        <div id = "live-all-3" class="classify-list ui tab active" data-tab="live-Java">

        </div>
        <div id = "live-all-4" class="classify-list ui tab active" data-tab="live-Python">

        </div>
        <div id = "live-all-5" class="classify-list ui tab active" data-tab="live-PHP">

        </div>
        <div id = "live-all-6" class="classify-list ui tab active" data-tab="live-C">

        </div>
    </div>
    <div class="ui tab" data-tab="video">
        <div class="ui divider"></div>
        <div class="ui secondary menu">
            <div class="header item">分类:</div>
            <a class="item active" data-tab="video/all">全部</a>
            <a class="item" data-tab="video/C++">C++</a>
            <a class="item" data-tab="video/Java">Java</a>
            <a class="item" data-tab="video/Python">Python</a>
            <a class="item" data-tab="video/PHP">PHP</a>
            <a class="item" data-tab="video/C">C</a>
        </div>
        <div class="ui hidden divider"></div>
        <div class="ui hidden divider"></div>
        <div class="ui hidden divider"></div>

        <div class="video-list ui tab active" data-tab="video">

        </div>
    </div>
</div>
<script src="/js/classify.js"></script>
<script type="text/javascript">
    $('.tabular.menu .item').tab();
</script>
@stop
