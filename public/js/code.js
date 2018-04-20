var editor = ace.edit("editor");
// editor.setTheme("ace/theme/monokai");
editor.session.setMode("ace/mode/java");

//teacher code function

var student = [];
var myDate = new Date();
var user_controller = new Object();
signal = Signal('4916a40cf5bc4dcd9922b50f928a2cf0');
console.log($('#user_id').val());
var session = signal.login('123123', '_no_need_token');
session.onLoginSuccess = function(uid){
    console.log(uid);
    var channel = session.channelJoin('123123testCode');
    channel.onChannelJoined = function(){
        editor.getSession().on('change', function(e) {
            channel.messageChannelSend({
                'func': 'change',
                'value': editor.getValue(),
                'cursor': editor.selection.getCursor()
            });
        });
        editor.getSession().selection.on('changeSelection', function(e) {
            channel.messageChannelSend({
                'func': 'select',
                'cursor_start': editor.selection.getSelectionLead(),
                'cursor_end': editor.selection.getSelectionAnchor(),
                'value': editor.getValue(),
            });
        });
        editor.getSession().selection.on('changeCursor', function(e) {
            channel.messageChannelSend({
                'func': 'cursor',
                'cursor': editor.selection.getCursor(),
                'value': editor.getValue(),
            });
        });
    };
};
