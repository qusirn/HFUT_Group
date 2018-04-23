//teacher code function

signal = Signal('4916a40cf5bc4dcd9922b50f928a2cf0');
console.log($('#user_id').val());

function code_on() {
    $("[data-tab='fourth']").click();
    console.log(123123);
    var code_area = $(
        '<div id="editor"></div>'
    );
    $('#code').append(code_area);


    var editor = ace.edit("editor");
    // editor.setTheme("ace/theme/monokai");
    editor.session.setMode("ace/mode/java");
    var student = [];
    var myDate = new Date();
    var user_controller = new Object();
    var code_session = signal.login('1232323123', '_no_need_token');
    code_session.onLoginSuccess = function(uid){
        console.log(uid);
        var code_channel = code_session.channelJoin('123123testCode');
        code_channel.onChannelJoined = function(){
            editor.getSession().on('change', function(e) {
                code_channel.messageChannelSend({
                    'func': 'change',
                    'value': editor.getValue(),
                    'cursor': editor.selection.getCursor()
                });
            });
            editor.getSession().selection.on('changeSelection', function(e) {
                code_channel.messageChannelSend({
                    'func': 'select',
                    'cursor_start': editor.selection.getSelectionLead(),
                    'cursor_end': editor.selection.getSelectionAnchor(),
                    'value': editor.getValue(),
                });
            });
            editor.getSession().selection.on('changeCursor', function(e) {
                code_channel.messageChannelSend({
                    'func': 'cursor',
                    'cursor': editor.selection.getCursor(),
                    'value': editor.getValue(),
                });
            });
            editor.getSession().on('changeScrollTop', function(scroll) {
                code_channel.messageChannelSend({
                    'func': 'scroll',
                    'top': editor.getSession().getScrollTop(),
                    'value': editor.getValue(),
                });
            });
            editor.getSession().on('changeFold', function(fold) {
                console.log(fold);
                code_channel.messageChannelSend({
                    'func': 'fold',
                    'data': {
                        'action': fold['action'],
                        'start': fold['data']['start'],
                        'end': fold['data']['end']
                    }
                });
            });
        };
    };
}

function code_off() {
    // code_session.leave();
    $('#editor').remove();
}
