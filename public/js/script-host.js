$(document).ready(function() {
    var key              = "4916a40cf5bc4dcd9922b50f928a2cf0",
        resolution       = "480p",
        maxFrameRate     = 15,
        maxBitRate       = 750,
        channel          = '10997',
        client           = AgoraRTC.createClient(),
        remoteStreamList = [],
        localStream;

    $('#board_live_button').click(function() {
        if(!$("[name='check-2']").is(":checked")) {
            $("[data-tab='second']").click();
            con.turn_on_board();
            var $h1 = $('<div id="wbHost"></div>');
            var $h2 = $('<div id="videoContainer"></div>');
            $(".board").append($h1);
            $(".board").append($h2);
            var hostParams = {
                key: '4916a40cf5bc4dcd9922b50f928a2cf0',
                cname: 'PES-2017',
                role : 'host',
                width: 610,
                height: 500,
                container: "wbHost"
            };
            Agora.Whiteboard.join(hostParams);
        }else {
            con.turn_off_board();
            Agora.Whiteboard.leave();
            $("#videoContainer").remove();
            $("#wbHost").remove();
        }
    });
});
