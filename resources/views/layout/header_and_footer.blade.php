<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Room</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="/js/jquery.min.js"></script>
        <script type="text/javascript" src="/js/jquery.cookie.js"></script>
        <link rel="shortcut icon" href="/img/logo.png" >
        <script src="/semantic/dist/components/transition.js"></script>
        <script src="/semantic/dist/components/dropdown.js"></script>
        <script src="/semantic/dist/components/visibility.js"></script>
        @include('layout.import')
        <script src="/js/base.js"></script>
        <link rel="stylesheet" type="text/css" href="/css/base.css">
    </head>
    <body>
        <div class="ui main text container">
            <h1 class="ui header">5A Education</h1>
            <p>
            Watch your thoughts; they become your destiny.
            </p>
        </div>
        <div class="ui borderless main menu">
            <div class="ui text container">
                <div href="#" class="header item">
                    <img class="logo" src="/img/logo.png">
                        5A Education
                </div>
                @if ( Session::has('messages') && Session::get('messages')['user'] != -1)
                <div class="ui pointing dropdown item">
                    <img class="ui avatar image" src="/img/head tiny/joe.jpg">
                    <span>{{Session::get('messages')['user']['user_name']}}</span>
                    <i class="dropdown icon"></i>
                    <div class="menu">
                        <a class="item" href="/logout" id="logout"><i class="red sign out icon"></i><span style="color:red;"> Logout</span></a>
                        <a class="item" href="#link2"><i class="users icon"></i> Browse</a>
                        <a class="item" href="#link3"><i class="search icon"></i> Search</a>
                    </div>
                </div>
                @else
                <a href="/joinus" class="item">
                    <i class="user icon"></i>
                    Login
                </a>
                @endif
                <a href="#" class="item">Articles</a>
                <div class="ui small search right item">
                    <div class="ui icon input">
                        <input class="prompt" type="text" placeholder="嘿~">
                        <i class="search icon"></i>
                    </div>
                    <div class="results"></div>
                </div>
            </div>
        </div>
        @yield('main_content')
        <div class="foot ui text container">
            <div class="ui list">
                <div class="item">
                    <i class="users icon"></i>
                    <div class="content">
                        5A Education
                    </div>
                </div>
                <div class="item">
                    <i class="marker icon"></i>
                    <div class="content">
                        Beijing, CN
                    </div>
                </div>
                <div class="item">
                    <i class="mail icon"></i>
                    <div class="content">
                        <a href="codeirontommy@gmail.com">codeirontommy@gmail.com</a>
                    </div>
                </div>
                <div class="item">
                    <i class="linkify icon"></i>
                    <div class="content">
                        <a href="http://5A.com">5AEducation.com</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="ui center aligned container foot2">
        <div class="ui inverted section divider"></div>
        <img src="/img/logo.png" class="ui centered mini image">
            <div class="ui horizontal small divided link list">
                <a class="item" href="#">Site Map</a>
                <a class="item" href="#">Contact Us</a>
                <a class="item" href="#">Terms and Conditions</a>
                <a class="item" href="#">Privacy Policy</a>
            </div>
        </div>
        @if( Session::get('messages')['statue']['value'] == 'error' )
        <div class="ui container fixed bottom sticky five column grid">
            <div class="ui tiny error message four wide column" style="margin: 0 0 25px 10px;">
                <i class="close icon"></i>
                <div class="header">操作错误警告</div>
                <p>{{Session::get('messages')['statue']['message']}}</p>
            </div>
        </div>
        @elseif( Session::get('messages')['statue']['value'] == 'success' )
        <div class="ui container fixed bottom sticky five column grid">
            <div class="ui tiny success message four wide column" style="margin: 0 0 25px 10px;">
                <i class="close icon"></i>
                <div class="header">欢迎：D</div>
                <p>{{Session::get('messages')['statue']['message']}} </p>
            </div>
        </div>
        @endif
    </body>
</html>
