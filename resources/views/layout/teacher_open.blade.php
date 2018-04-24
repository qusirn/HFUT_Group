<div id="open" class="ui tiny open modal">
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
            <div class="field">
                <label>课程描述</label>
                <input type="text" name="live-description" placeholder="课程描述">
            </div>
            <div class="field">
            <label>标签</label>
                <select class="ui fluid search dropdown" multiple="">
                    <option value="">标签</option>
                    <option value="C/C++">C/C++</option>
                    <option value="Java">Java</option>
                    <option value="Python">Python</option>
                    <option value="PHP">PHP</option>
                    <option value="HTML">HTML</option>
                    <option value="JaveScript">JaveScript</option>
                    <option value="CSS">CSS</option>
                </select>
            </div>
            <div class="ui centered vertically  padded grid">
                <div class="two column row">
                    <div class="column">
                        <select class="ui fluid upward dropdown">
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
                                <input name="public" type="checkbox">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="two column row">
                    <div class="column">
                        <button class="fluid ui blue button">上传PPT
                            <input type="file" accept="image/*" name="header_img" onchange="preview(this)">
                        </button>
                    </div>
                    <div class="column">
                        <button class="fluid ui blue button">上传封面
                            <input type="file" accept="image/*" name="header_img" onchange="preview(this)">
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
