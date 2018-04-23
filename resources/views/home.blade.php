@extends('layout.header_and_footer')
@section('main_content')
<link rel="stylesheet" href="/css/home.css">
<link rel="stylesheet" href="/css/animate.min.css">
<div class="carousel" @mouseenter="enter" @mouseleave="leave">
    <transition-group
            tag="ul"
            name="image"
            enter-active-class="animated lightSpeedIn"
            leave-active-class="animated lightSpeedOut"
    >
        <li v-for='(image,index) in img' :key='index' v-show="index === mark">
            <a href="javascript:;">
                <img :src="image">
            </a>
        </li>
    </transition-group>
    <div class="bullet">
        <span v-for="(item,index) in img.length" :class="{'activeBullet':index === mark}"
         @click="change(index)" :key="index"></span>
    </div>
    <div class="switches">
        <span class="prev" @click="prev">&lt;</span>
        <span class="next" @click="next">&gt;</span>
    </div>
</div>
<div class="ui hidden divider"></div>
<div class="containertTitle">
    <div class="ui horizontal divider">
        直播推荐
    </div>
    <div class="ui hidden divider"></div>
    <a href="#"><span class="moreButton"><i class="list icon"></i></span></a>
    <div class="ui hidden divider"></div>
</div>
<div class="containert">
    <div class="ui grid container">
        @for ($i = 0; $i < 8; $i++)
        <div class="four wide column">
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
<div class="ui hidden divider"></div>
<div class="ui hidden divider"></div>
<div class="ui hidden divider"></div>
<div class="ui hidden divider"></div>
<div class="containertTitle">
    <div class="ui horizontal divider">
        录播推荐
    </div>
    <div class="ui hidden divider"></div>
    <a href="#"><span class="moreButton"><i class="list icon"></i></span></a>
    <div class="ui hidden divider"></div>
</div>
<div class="containert">
    <div class="ui grid container">
        @for ($i = 0; $i < 8; $i++)
        <div class="four wide column">
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
<script src="/js/vue.min.js"></script>
<script src="/js/home.js"></script>
@stop
