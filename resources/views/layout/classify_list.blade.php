<div class="containert">
    <div class="ui special four cards">
    @for ($i = 0; $i < 15; $i++)
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
