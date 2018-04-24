if(!AgoraRTC.checkSystemRequirements()) {
    alert("browser is no support webRTC");
}
/* select Log type */
// AgoraRTC.Logger.setLogLevel(AgoraRTC.Logger.NONE);
// AgoraRTC.Logger.setLogLevel(AgoraRTC.Logger.ERROR);
// AgoraRTC.Logger.setLogLevel(AgoraRTC.Logger.WARNING);
// AgoraRTC.Logger.setLogLevel(AgoraRTC.Logger.INFO);
// AgoraRTC.Logger.setLogLevel(AgoraRTC.Logger.DEBUG);
/* simulated data to proof setLogLevel() */
// AgoraRTC.Logger.error('this is error');
// AgoraRTC.Logger.warning('this is warning');
// AgoraRTC.Logger.info('this is info');
// AgoraRTC.Logger.debug('this is debug');

var client, localStream, camera, microphone;

var audioSelect = null;
var videoSelect = null;

function join() {
    var channel_key = null;
    client = AgoraRTC.createClient();
    console.log(channel_key);
    client.init(String('4916a40cf5bc4dcd9922b50f928a2cf0'), function () {
        console.log("AgoraRTC client initialized");
        client.join(null, '1000', null, function(uid) {
            console.log("client" + uid + "joined channel");
            //create local stream
            camera = audioSelect;
            microphone = videoSelect;
            localStream = AgoraRTC.createStream({streamID: uid, audio: true, cameraId: camera, microphoneId: microphone, video:true, screen: false});
            localStream.setVideoProfile('360p_3');

            // The user has granted access to the camera and mic.
            localStream.on("accessAllowed", function() {
                console.log("accessAllowed");
            });

            // The user has denied access to the camera and mic.
            localStream.on("accessDenied", function() {
                console.log("accessDenied");
            });

            localStream.init(function() {
                console.log("getUserMedia successfully");
                client.publish(localStream, function (err) {
                    console.log("Publish local stream error: " + err);
                });
                client.on('stream-published', function (evt) {
                    console.log("Publish local sasdasdasdasdfadtyjasdfruaystdjtajsgtdjagstdgtream successfully");
                });
                localStream.play('agora_local');
            }, function (err) {
                console.log("getUserMedia failed", err);
            });
            //……
        }, function(err) {
            console.error("client join failed ", err);
            //error handling
        });
    }, function (err) {
        console.log("AgoraRTC client init failed", err);
    });
}

function leave() {
    client.leave(function () {
        console.log("Leavel channel successfully");
    }, function (err) {
        console.log("Leave channel failed");
    });
}

function publish() {

}

function unpublish() {
    // document.getElementById("publish").disabled = false;
    // document.getElementById("unpublish").disabled = true;
    client.unpublish(localStream, function (err) {
        console.log("Unpublish local stream failed" + err);
    });
}

function getDevices() {
    console.log('get Devices');
    AgoraRTC.getDevices(function (devices) {
        for (var i = 0; i !== devices.length; ++i) {
            var device = devices[i];
            if (device.kind === 'audioinput') {
                audioSelect = device[i];
            } else if (device.kind === 'videoinput') {
                videoSelect = device[i];
            } else {
                console.log('Some other kind of source/device: ', device);
            }
        }
    });
}

//audioSelect.onchange = getDevices;
//videoSelect.onchange = getDevices;
getDevices();

$(document).ready(function(e) {
	$('input').lc_switch();
	// triggered each time a field changes status
	$('body').delegate('.lcs_check', 'lcs-statuschange', function() {
		var status = ($(this).is(':checked')) ? 'checked' : 'unchecked';
		console.log('field changed status: '+ status );
	});

	// triggered each time a field is checked
	$('body').delegate('.lcs_check', 'lcs-on', function() {
        // document.getElementById("ready_screen1").style.display="none";
        // document.getElementById("ready_screen2").style.display="none";
        // document.getElementById("ready_screen3").style.display="none";
        // document.getElementById("ready_screen4").style.display="none";
        console.log('field is checked');
	});


	// triggered each time a is unchecked
	$('body').delegate('.lcs_check', 'lcs-off', function() {
        // document.getElementById("ready_screen1").style.display="";
        // document.getElementById("ready_screen2").style.display="";
        // document.getElementById("ready_screen3").style.display="";
        // document.getElementById("ready_screen4").style.display="";
		console.log('field is unchecked');
	});

    // $('.ui.dropdown').dropdown();

    $('#head_live_button').click(function() {
        if(!$("[name='check-1']").is(":checked")) {
            $("[data-tab='first']").click();
            document.getElementById("ready_screen1").style.display="none";
            join();
        }else {
            document.getElementById("ready_screen1").style.display="";
            unpublish();
            localStream.close();
            localStream.stop();
            leave();
        }
    });

    $('#board_live_button').click(function(){
        if(!$("[name='check-2']").is(":checked")) {
            $("[data-tab='second']").click();
            document.getElementById("ready_screen2").style.display="none";
        }else {
            document.getElementById("ready_screen2").style.display="";
        }
    });

    $('#ppt_live_button').click(function(){
        if(!$("[name='check-3']").is(":checked")) {
            $("[data-tab='third']").click();
            document.getElementById("ready_screen3").style.display="none";
        }else {
            document.getElementById("ready_screen3").style.display="";
        }
    });


    $('#code_live_button').click(function() {
        if(!$("[name='check-4']").is(":checked")) {
            document.getElementById("ready_screen4").style.display="none";
            code_on();
            con.turn_on_code();
        }else {
            document.getElementById("ready_screen4").style.display="";
            code_off();
            con.turn_off_code();
        }
    });
});
