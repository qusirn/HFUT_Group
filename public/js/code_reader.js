var editor = ace.edit("editor");
// editor.setTheme("ace/theme/monokai");
editor.session.setMode("ace/mode/java");

editor.setReadOnly(true);
var student = [];
var myDate = new Date();
var user_controller = new Object();
signal = Signal('4916a40cf5bc4dcd9922b50f928a2cf0');
var session = signal.login($('#user_id').val(), '_no_need_token');
var session = signal.login('123332', '_no_need_token');
session.onLoginSuccess = function(uid){
    //加入频道，设置加入频道成功和失败回调
    console.log(uid);
    var channel = session.channelJoin('123123testCode');
    channel.onChannelJoined = function(){
        channel.onMessageChannelReceive = function(account, uid, msg) {
            console.log('123123');
            if(msg['func'] == 'change'){
                console.log('12312ssss3');
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
                    editor.getSession().unfold(msg['data']['start']['row'] + 1, true);
                }
            }
        }
    };
};