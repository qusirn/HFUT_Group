if(!AgoraRTC.checkSystemRequirements()) {
    alert("browser is no support webRTC");
}
var client = AgoraRTC.createClient();
var appId = 'b78a882b8e1c49aea1e7013947165e60'
client.init(appId, function() {
    console.log("client initialized");
    //join channel
    channel = '1024';
    channelKey = null;
    client.join(channelKey, channel, null, function(uid) {
        console.log("client" + uid + "joined channel");
        //create local stream
        localStream = AgoraRTC.createStream({
            streamID: uid,
            audio: true,
            video: false,
            screen: true,
            mediaSource: 'screen',
        });
        localStream.on("accessAllowed", function(){
            console.log("accessAllowed");
        });
        localStream.on("accessDenied", function(){
            console.log("accessDenied");
        });
        localStream.setVideoProfile("360p_4");
        localStream.init(function() {
            console.log("local stream initialized");

            // publish the stream
            client.publish(localStream, function(err) {
                console.log("stream published");

                //登录
                var session = signal.login('00000000', '_no_need_token');
                session.onLoginSuccess = function(uid){
                    console.log("Login Successfully !\t" + uid);
                    //加入频道，设置加入频道成功和失败回调
                    var channel = session.channelJoin(channelname);
                    channel.onChannelJoined = function(){
                        text = {
                            'channel':channel,
                            'cmd':'start'
                        }
                        //发送频道消息
                        channel.messageChannelSend(text);
                        //登出
                        session.logout();
                     };
                };
                session.onLogout = function(ecode){
                //登出回调设置
                }
            })
        }, function(err) {
            console.error("local stream init failed ", err);
            //error handling
        });
    }, function(err) {
        console.error("client join failed ", err);
        //error handling
    });
}, function(err) {
    console.log("client init failed ", err);
    //error handling
});
