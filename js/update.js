$(document).ready(function() {
    $('input').on('blur', function () {
        if ($(this).val() == '') {
            $(this).focus();
        } else {
            var id = $(this).attr('id');
            id = id.split('_');
            id = id[1];
            var msg = {};
            msg['id'] = id;
            msg['class'] = $('#class_' + id).val();
            msg['name'] = $('#name_' + id).val();
            msg['dtn'] = $('#dtn_' + id).val();
            msg['date'] = $('#date_' + id).val();
            $.ajax({
                type: "POST",
                url: "./main/update",
                data: msg,
                success: function(data) {
                    console.log(msg['id']);
                },
                error:  function(xhr, str){
                    alert("Возникла ошибка!");
                }
            });
        }
    });

    $('.table_input').on('input', function () {
        if ($(this).val() == '') {
            $(this).addClass("b-border");
        } else {
            $(this).removeClass("b-border");
        }
    });
});