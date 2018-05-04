if(!AgoraRTC.checkSystemRequirements()) {
    alert("browser is no support webRTC");
}
//创建 Client 对象
var client = AgoraRTC.createClient();
var appId = 'b78a882b8e1c49aea1e7013947165e60'
client.init(appId, function() {
    console.log("client initialized");
    //join channel
    channel = '1024'
    client.join(null, channel, null, function(uid) {
        console.log("client" + uid + "joined channel");
        //监听流事件
        client.on('stream-added', function(evt) {
            var stream = evt.stream;
            console.log("New stream added: " + stream.getId());
            console.log("Timestamp: " + Date.now());
            console.log("Subscribe ", stream);
            //在有新的流加入后订阅远端流
            client.subscribe(stream, function(err) {
                console.log("Subscribe stream failed", err);
            });
        });
        client.on('peer-leave', function(evt) {
            console.log("Peer has left: " + evt.uid);
            console.log("Timestamp: " + Date.now());
            console.log(evt);
        });
        client.on('stream-subscribed', function(evt) {
            var stream = evt.stream;
            var stream = evt.stream;
            stream.play('agora-remote');
            console.log("Subscribe remote stream successfully: " + stream.getId());
            if ($('#agora_remote'+stream.getId()).length === 0) {
                $('div#agora-remote').append('<div id="agora_remote'+stream.getId()+'" style="float:left; width:810px;height:607px;display:inline-block;"></div>');
            }
            console.log("Got stream-subscribed event");
            console.log("Timestamp: " + Date.now());
            console.log("Subscribe remote stream successfully: " + stream.getId());
            console.log(evt);
        });
        client.on("stream-removed", function(evt) {
            var stream = evt.stream;
            console.log("Stream removed: " + evt.stream.getId());
            console.log("Timestamp: " + Date.now());
            console.log(evt);
        });

    }, function(err) {
        console.error("client join failed ", err);
        //error handling
    });
}, function(err) {
    console.log("client init failed ", err);
    //error handling
});
