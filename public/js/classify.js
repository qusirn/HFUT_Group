var formal;
var classify;
$(document).ready(function() {
    $('.item').on('click',function(event) {
        if ($(this).html() == "录播" || $(this).html() == "直播") {
            formal = $(this).html();
        }
    })
    $('.live').on('click', function(event) {
        classify = $(this).html();
        $.ajax({
            headers: {
                'X-XSRF-TOKEN': $.cookie('XSRF-TOKEN')
            },
            success: function (result) {
                $('#live-all-1').empty();
                $('#live-all-1').append(result);
            },
            type: 'get',
            url: '/classify/search',
            contentType: 'application/json;charset=utf-8',
            data: {"classify": classify, "formal": formal}
        });
    });
})
$('.menu .item').tab();
$('.special.cards .image').dimmer({
    on: 'hover'
});
