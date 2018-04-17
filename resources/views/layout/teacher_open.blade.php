<div id="open" class="ui small open modal">
    <i class="close icon"></i>
    <div class="header">
        备课
    </div>
    <div class="content">
        <form class="ui form">
            <div class="field">
                <label>课程名称</label>
                <input type="text" name="live-name" placeholder="课程名称">
            </div>
            <div class="field">
                <label>教师名</label>
                <input type="text" name="teacher-name" placeholder="教师名">
            </div>
            <div class="ui centered vertically  padded grid">
                <div class="two column row">
                    <div class="column">
                        <button class="fluid ui teal button">上传PPT</button>
                    </div>
                    <div class="column">
                        <button class="fluid ui teal button">上传封面</button>
                    </div>
                </div>
                <div class="two column row">
                    <div class="column">
                        <div class="ui floating dropdown labeled search icon right floated button">
                            <i class="list icon"></i>
                            <span class="text">课程分类</span>
                            <div class="menu">
                                <div class="item">C/C++</div>
                                <div class="item">Java</div>
                                <div class="item">Python</div>
                                <div class="item">PHP</div>
                                <div class="item">HTML</div>
                                <div class="item">JaveScript</div>
                                <div class="item">CSS</div>
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="checkbox_container">
                            <div class="ui toggle checkbox">
                                <label>是否录播</label>
                                <input name="public" type="checkbox">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="one column Center aligned row">
                    <div class="three wide tablet four wide computer column">
                        <button class="fluid ui button" type="submit">提交</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="actions">
        <div class="ui grey deny button">
            取消
        </div>
    </div>
</div>
