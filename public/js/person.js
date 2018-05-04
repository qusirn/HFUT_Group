$('.ui.basic.modal').modal('show');

function bind_tel()
{
    $("[data-tab='phone']").click();
}

function bind_email()
{
    console.log("hahaha");
    $("[data-tab='email']").click();
}

function preview(file) {
    console.log("123");
    if (file.files && file.files[0]) {
        var reader = new FileReader();
        reader.onload = function(evt) {
            $('#user-header').empty();
            $('#user-header').append('<img src="' + evt.target.result + '" />');
        }
        reader.readAsDataURL(file.files[0]);
    } else {
        $('#user-header').empty();
        $('#user-header').append('<div class="img" style="filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale,src=\'' + file.value + '\'"></div>');
    }
}
