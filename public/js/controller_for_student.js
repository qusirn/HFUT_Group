var user_controller = new Object();
signal = Signal('4916a40cf5bc4dcd9922b50f928a2cf0');
var session = signal.login('student', '_no_need_token');
session.onLoginSuccess = function(uid){
    //加入频道，设置加入频道成功和失败回调
    console.log(uid);
    var channel = session.channelJoin('room123');
    channel.onChannelJoined = function(){
        channel.onMessageChannelReceive = function(account, uid, msg) {
            console.log('recieced msg');
            console.log(msg);
            if(msg == 'turn_on_board'){
                board_on();
            }else if(msg == 'turn_off_board'){
                board_off();
            }else if(msg == 'click1'){
                click1();
            }else if(msg == 'click2'){
                click2();
            }else if(msg == 'click3'){
                click3();
            }else if(msg == 'click4'){
                click4();
            }else if(msg == 'turn_on_code'){
                code_on();
            }else if(msg == 'turn_off_code'){
                code_off();
            }else if(msg == 'tab1'){
                $("[data-tab='first']").click();
            }else if(msg == 'tab2'){
                $("[data-tab='second']").click();
            }else if(msg == 'tab3'){
                $("[data-tab='third']").click();
            }else if(msg == 'tab4'){
                $("[data-tab='fourth']").click();
            }
        }
    };
};
