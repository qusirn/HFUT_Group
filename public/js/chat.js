//teacher chat function

var student = [];
var myDate = new Date();
var user_controller = new Object();
signal = Signal('4916a40cf5bc4dcd9922b50f928a2cf0');
// $('#test').on('click', function() {
console.log($('#user_id').val());
var session = signal.login($('#user_id').val(), '_no_need_token');
session.onLoginSuccess = function(uid){
    //加入频道，设置加入频道成功和失败回调
    console.log(uid);
    var channel = session.channelJoin('123123test');
    channel.onChannelJoined = function(){
        channel.onMessageChannelReceive = function(account, uid, msg) {
            //接收频道消息回调设置
            console.log(account + ' ' + uid + ' ' + msg['msg']);
            var message =
            '<div class="comment">' +
                '<a class="avatar">' +
                    '<img src="/img/head tiny/matt.jpg">' +
                '</a>' +
                '<div class="content">' +
                    '<a class="author">' + msg['user_name'] + '</a>' +
                    '<div class="metadata">' +
                        '<span class="date">' + myDate.toLocaleTimeString() + '</span>' +
                    '</div>' +
                    '<div class="text">' +
                        msg['msg'] +
                    '</div>' +
                '</div>' +
            '</div>'
             $('#comments').append(message)
             $(".reply_content").scrollTop($(".reply_content")[0].scrollHeight);
        }
        user_controller.get_users = function() {
            session.invoke(
                'io.agora.signal.channel_query_userlist',
                {'name':'123123test'},
                function(err, val) {
                    console.log(val);
                })
        }
        $('.dropdown').dropdown({
            action: function(text, value) {
              // nothing built in occurs
            }
        })
        $('#get_users').on('click', user_controller.get_users);
        $('#send').on('click', function() {
            if($('#msg').val() == ''){
                alert('无内容')
                return
            }
            //发送频道消息
            channel.messageChannelSend(
                {
                    'user_name': $('#user_name').val(),
                    'msg': $('#msg').val()
                }
            );
            $('#msg').val('');
        })
    };
};
$('.emoji_item').on('click', function() {
    console.log(this.firstChild.id);
    $('#msg').val($('#msg').val() + $('#'+this.firstChild.id).html());
    $('#emoji_button').popup('hide')
})
$('#emoji_button')
  .popup({
    on: 'click'
  });
// })
