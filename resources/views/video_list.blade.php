<div class="containert">
    <div class="ui special four cards">
    @foreach ($videos as $video)
        <div class="card">
            <div class="blurring dimmable image">
                <div class="ui dimmer">
                    <div class="content">
                        <div class="center">
                            <a href="/live/123"><div class="ui inverted button">Join</div></a>
                        </div>
                    </div>
                </div>
                <img src="{{ $video->v_cover}}">
            </div>
            <div class="content">
                <a class="header">{{ $video->v_headline }}</a>
                <div class="meta">
                    <span class="date">{{ $video->v_description }}</span>
                </div>
            </div>
            <div class="extra content">
                <a>
                    <i class="users icon"></i>
                    {{ $video->v_looker_num }}
                </a>
            </div>
        </div>
    @endforeach
    </div>
</div>
