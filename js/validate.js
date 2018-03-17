$.ajaxPrefilter(function( options, originalOptions, jqXHR ) { options.async = true; });

function ajax() { //Ajax отправка формы
    var msg = $("#form").serialize();
    $.ajax({
        type: "POST",
        url: "./main/send",
        data: msg,
        success: function(data) {
            location.reload();
        },
        error:  function(xhr, str){
            alert("Возникла ошибка!");
        }
    });
}