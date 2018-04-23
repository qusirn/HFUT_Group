function init() {
    client = AgoraRTC.createClient();
    client.init(String('4916a40cf5bc4dcd9922b50f928a2cf0'), function () {
        client.join(null, '1000', null, function(uid) {
            client.on('stream-added', function (evt) {
                var stream = evt.stream;
                console.log("New stream added: " + stream.getId());
                console.log("Subscribe ", stream);
                client.subscribe(stream, function(err) {
                    console.log("Subscribe stream failed", err);
                });
                client.on('stream-subscribed', function (evt) {
                    var stream = evt.stream;
                    console.log("Subscribe remote stream successfully: " + stream.getId());
                    stream.play('agora_local');
                });
                client.on('stream-removed', function (evt) {
                    evt.stream.stop();
                    evt.stream.close();
                    console.log('123123123');
                    $('#agora_local').remove();
                    $('#video').append($('<div id="agora_local"></div>'));
                    client.leave();
                    init();
                });
            });
        });
    })
}
init();
