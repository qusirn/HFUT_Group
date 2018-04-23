function board_on() {
    var $h1 = $('<div id="wbHost"></div>');
    var $h2 = $('<div id="videoContainer"></div>');
    $(".board").append($h1);
    $(".board").append($h2);
    var hostParams = {
        key: '4916a40cf5bc4dcd9922b50f928a2cf0',
        cname: 'PES-2017',
        role : 'guest',
        width: 610,
        height: 500,
        container: "wbHost"
    };
    Agora.Whiteboard.join(hostParams);
};

function board_off() {
    Agora.Whiteboard.leave();
    $("#videoContainer").remove();
    $("#wbHost").remove();
}

function click1() {
    $("[data-tab='first']").click();
}
function click2() {
    $("[data-tab='second']").click();
}
function click3() {
    $("[data-tab='third']").click();
}
function click4() {
    $("[data-tab='fourth']").click();
}
