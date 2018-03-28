extends('layout.header_and_footer')
@section('main_content')

<div class="ui raised tiny container segment">

    <div class="top">
        <h1 class="ui header">直播分类</h1>
        <div class="ui menu">
            <a class="blue item">直播分类</a>
            <a class="violet item">PHP</a>
            <a class="purple item">Java</a>
            <a class="grey item">大数据</a>
            <a class="pink item">HTML/CSS</a>
            <a class="brown item">Python</a>
            <a class="grey item">人工智能</a>
        </div>
    </div>
    <div class="ui main container">
        <div class="ui four column very padded doubling stackable grid container">
            @for ($n = 0; $n < 8; $n++)
            <div class="column">
                <div class="ui link cards">
                    <div class="card">
                        <div class="tiny image">
                            <img src="img/classify/kristy.png">
                        </div>
                        <div class="content">
                            <div class="header">Java语言程序设计基础篇</div>
                            <div class="meta">
                              <a>廖雪峰</a>
                            </div>
                            <div class="description">Matthew is an interior designer living in New York. </div>
                        </div>
                        <div class="extra content">
                            <span class="right floated">实战 </span>
                            <span><i class="user icon"></i> 廖雪峰 </span>
                        </div>
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </div>

</div>

@stop
