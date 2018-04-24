signal = Signal('4916a40cf5bc4dcd9922b50f928a2cf0');
function code_on() {
    $("[data-tab='fourth']").click();
    var code_area = $(
        '<div id="editor"></div>'
    );
    $('#code').append(code_area);
    var editor = ace.edit("editor");
    // editor.setTheme("ace/theme/monokai");
    editor.session.setMode("ace/mode/java");
    editor.setReadOnly(true);
    var myDate = new Date();
    var user_controller = new Object();
    // var session = signal.login($('#user_id').val(), '_no_need_token');
    var code_session = signal.login('123sdad332', '_no_need_token');
    code_session.onLoginSuccess = function(uid){
        //加入频道，设置加入频道成功和失败回调
        console.log(uid);
        var code_channel = code_session.channelJoin('123123testCode');
        code_channel.onChannelJoined = function(){
            code_channel.onMessageChannelReceive = function(account, uid, msg) {
                // console.log(msg);
                if(msg['func'] == 'change'){
                    editor.setValue(msg['value']);
                    editor.gotoLine(msg['cursor']['row']);
                    editor.moveCursorTo(msg['cursor']['row'], msg['cursor']['column'])
                }else if(msg['func'] == 'cursor') {
                    editor.moveCursorTo(msg['cursor']['row'], msg['cursor']['column'])
                    editor.gotoLine(msg['cursor']['row']);
                }else if(msg['func'] == 'select') {
                    editor.moveCursorTo(msg['cursor_start']['row'], msg['cursor_start']['column'])
                    editor.selection.selectTo(msg['cursor_end']['row'], msg['cursor_end']['column']);
                }else if(msg['func'] == 'scroll') {
                    editor.getSession().setScrollTop(msg['top'])
                }else if(msg['func'] == 'fold') {
                    if(msg['data']['action'] == 'add'){
                        editor.getSession().foldAll(msg['data']['start']['row'], msg['data']['end']['row']);
                    }else if(msg['data']['action'] == 'remove'){
                        console.log(msg['data']['start']['row']);
                        editor.getSession().unfold(msg['data']['start']['row'] + 1, true);
                    }
                }
            }
        };
    };

}
function code_off() {
    $('#editor').remove();
}
