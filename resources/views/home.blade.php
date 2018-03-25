@extends('layout.header_and_footer')

@section('main_content')
<link rel="stylesheet" href="/css/home.css">
<link rel="stylesheet" href="/css/animate.min.css">
<style type="text/css">
body{ }
    *{
        margin: 0;
        padding: 0;
    }
    li{
        list-style: none;
    }
    .carousel{
        width: 1202px;
        height: 400px;
        overflow: hidden;
        margin: 50px auto;
        position: relative;
        border-radius: 20px;
        box-shadow: 3px 3px 5px #aaaaaa;
    }
    .carousel ul{
        width: 100%;
        height: 100%;
    }
    .carousel ul li{
        position: absolute;
    }
    .carousel ul li a img{
        width: 1202px;
        height: 400px;
        border-radius: 20px;
        box-shadow: 3px 3px 3px #aaaaaa;
    }
    .bullet{
        position: absolute;
        font-size: 0;
        bottom: 20px;
        left: 50%;
        margin-left: -42px;
    }
    .bullet span{
display: inline-block;
width: 10px;
height: 10px;
background-color: #ffffff;
margin-left: 15px;
border-radius: 10px;
    }
    .bullet span:first-child{
        margin-left: 0;
    }
    .switch{

    }
    .switch span{
position: absolute;
width: 50px;
height: 50px;
line-height: 50px;
text-align: center;
background-color: rgba(0,0,0,.1);
font-size: 20px;
color: #ffffff;
top: 50%;
margin-top: -25px;
cursor: pointer;
font-family: "宋体";
    }
.switch span:hover{

background-color: rgba(0,0,0,.5);

    }
    .prev{
        left: 0;
    }
    .next{
        right: 0;
    }
    .active{
        background-color: red !important;
    }
    /*.image-enter-active{
        transform:translateX(0);
        transition:all 1s ease;
    }
    .image-leave-active{
        transform:translateX(-100%);
        transition:all 1s ease
    }
    .image-enter{
        transform:translateX(100%);
    }
    .image-leave{
        transform:translateX(0);
    }*/
</style>

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
        <span v-for="(item,index) in img.length" :class="{'active':index === mark}"
         @click="change(index)" :key="index"></span>
    </div>
    <div class="switch">
        <span class="prev" @click="prev">&lt;</span>
        <span class="next" @click="next">&gt;</span>
    </div>
</div>

<div class="containert">
  <div class="ui horizontal divider">
      直播推荐
    </div>
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
<div class="ui hidden divider"></div>
<div class="ui hidden divider"></div>
   <div class="ui horizontal divider">
       录播推荐
     </div>
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



<script src="/js/vue.min.js"></script>
<script type="text/javascript">

$('.special.cards .image').dimmer({
on: 'hover'
});
</script>

<script>
var vm = new Vue({
    el:'.carousel',
    data:{
        mark:0,
        img:[
                '/img/a1.jpg',
                '/img/a2.jpg',
                '/img/a3.jpg',
                '/img/a4.jpg'
        ],
        time:null
    },
    methods:{   //添加方法
        change(i){
            this.mark = i;
        },
        prev(){
            this.mark--;
            if(this.mark === -1){
                this.mark = 3;
                return
            }
        },
        next(){
            this.mark++;
            if(this.mark === 4){
                this.mark = 0;
                return
            }
        },
        autoPlay(){
            this.mark++;
            if(this.mark === 4){
                this.mark = 0;
                return
            }
        },
        play(){
            this.time = setInterval(this.autoPlay,3000);
        },
        enter(){
            console.log('enter')
            clearInterval(this.time);
        },
        leave(){
            console.log('leave')
            this.play();
        }
    },
    created(){
        this.play()
    }
})

</script>
@stop
