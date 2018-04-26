<div id="open" class="ui tiny open modal">
    <i class="close icon"></i>
    <div class="header">
        备课
    </div>
    <div class="content">
        <form class="ui form"  enctype="multipart/form-data" method="POST" action="/Postlive">
            {!! csrf_field() !!}
            <div class="field">
                <label>课程名称</label>
                <input type="text" name="l_headling" placeholder="课程名称">
            </div>
            <div class="field">
                <label>教师名</label>
                <input type="text" name="t_id" placeholder="教师名">
            </div>
            <div class="field">
                <label>课程描述</label>
                <input type="text" name="l_description" placeholder="课程描述">
            </div>


            <div class="field">
                <label>标签</label>
                <div class="ui multiple selection dropdown">                    
                    <input name="l_tag" type="hidden">
                    <i class="dropdown icon"></i>
                    <div class="default text">States</div>
                    <div class="menu">
                        <div class="item" data-value="C/C++">C/C++</div>
                        <div class="item" data-value="Java">Java</div>
                        <div class="item" data-value="Python">Python</div>
                        <div class="item" data-value="PHP">PHP</div>
                        <div class="item" data-value="HTML">HTML</div>
                        <div class="item" data-value="JaveScript">JaveScript</div>
                    </div>
                </div>
            </div>


            <div class="ui centered vertically  padded grid">
                <div class="two column row">
                    <div class="column">
                        <select class="ui fluid upward dropdown" name="l_classify">
                            <option value="">课程分类</option>
                            <option value="C/C++">C/C++</option>
                            <option value="Java">Java</option>
                            <option value="Python">Python</option>
                            <option value="PHP">PHP</option>
                            <option value="HTML">HTML</option>
                            <option value="JaveScript">JaveScript</option>
                            <option value="CSS">CSS</option>
                        </select>
                    </div>
                    <div class="column">
                        <div class="checkbox_container">
                            <div class="ui Center toggle checkbox">
                                <label>是否录播</label>
                                <input name="l_is_broadcast" type="checkbox">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="two column row">
                    <div class="column">
                        <button class="fluid ui blue button">上传PPT
                            <input type="file" accept="image/*" name="f_ppt">
                        </button>
                    </div>
                    <div class="column">
                        <button class="fluid ui blue button">上传封面
                            <input type="file" accept="image/*" name="cover_img">
                        </button>
                    </div>
                </div>
                <div class="one column Center aligned row">
                    <div class="three wide tablet six wide computer column">
                        <button class="fluid ui blue button" type="submit">提交</button>
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
