<div class="containert">
    <div class="ui special four cards">
    @foreach ($lives as $live)
        <div class="card">
            <div class="blurring dimmable image">
                <div class="ui dimmer">
                    <div class="content">
                        <div class="center">
                            <a href="/live/123"><div class="ui inverted button">Join</div></a>
                        </div>
                    </div>
                </div>
                <img src="{{$live->l_cover}}">
            </div>
            <div class="content">
                <a class="header1">{{ $live->l_headling }}</a>
                <div class="meta">
                    <span class="date">{{ $live->l_description }}</span>
                </div>
            </div>
            <div class="extra content">
                <a>
                    <i class="users icon"></i>
                    {{ $live->l_looker_num }}
                </a>
            </div>
        </div>
    @endforeach
    </div>
</div>
