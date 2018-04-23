var user_controller = new Object();
signal = Signal('4916a40cf5bc4dcd9922b50f928a2cf0');
var con_session = signal.login('teacher', '_no_need_token');
var con = new Object();
con_session.onLoginSuccess = function(uid){
    //加入频道，设置加入频道成功和失败回调
    console.log(uid);
    var con_channel = con_session.channelJoin('room123');
    con_channel.onChannelJoined = function(){
        //发送频道消息
        con.turn_on_board = function() {
            con_channel.messageChannelSend('click2');
            con_channel.messageChannelSend('turn_on_board');
        };
        con.turn_off_board = function() {
            con_channel.messageChannelSend(
                'turn_off_board'
            );
        };
        con.turn_on_code = function() {
            con_channel.messageChannelSend(
                'turn_on_code'
            );
        };
        con.turn_off_code = function() {
            con_channel.messageChannelSend(
                'turn_off_code'
            );
        };
        con.tab1 = function() {
            con_channel.tab1(
                'tab1'
            );
        };
        con.tab2 = function() {
            con_channel.tab2(
                'tab2'
            );
        };
        con.tab3 = function() {
            con_channel.tab3(
                'tab3'
            );
        };
        con.tab4 = function() {
            con_channel.tab4(
                'tab4'
            );
        };
    };
};
