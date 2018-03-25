@extends('layout.header_and_footer')
@section('main_content')
<div class="pusher">
  <div class="full height">
    <div class="article">
      <div class="main ui container">
        @for ($n = 0; $n < 2; $n++)
        <div class="ui raised tiny container segment">
          <h2 class="ui header">这里是视频分类</h2>
          <div class="ui four column very padded doubling stackable grid container">
            @for ($i = 0; $i < 8; $i++)
            <div class="column">
              <script type="text/javascript">
                $('.special.cards .image').dimmer({
                  on: 'hover'
                });
              </script>
              <div class="ui special cards">
                <div class="card">
                  <div class="blurring dimmable image">
                    <div class="ui dimmer">
                      <div class="content">
                        <div class="center">
                          <div class="ui inverted button">点击观看</div>
                        </div>
                      </div>
                    </div>
                    <img src="/img/test/test.jpeg">
                  </div>
                  <div class="content">
                    <a class="header">这里是课程名</a>
                    <div class="meta">
                      <span class="date">这里是课程介绍</span>
                    </div>
                  </div>
                  <div class="extra content">
                    <a><i class="users icon"></i>课程标签</a>
                  </div>
                </div>
              </div>
            </div>
            @endfor
          </div>
        </div>
        @endfor
    </div>
  </div>
</div>
@stop
