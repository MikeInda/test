$(document).ready(function() {
    if ($(window).width() <= 600) {
        $('#table tr').filter(function () {
            var id = $(this).attr('id');
            id = id.split('_');
            id = id[1];
            $($('#divclass_' + id).detach()).appendTo('#tdnum_' + id);
            $($('#divname_' + id).detach()).appendTo('#tdnum_' + id);
            $($('#divdate_' + id).detach()).appendTo('#tdnum_' + id);
            $($('#divdtn_' + id).detach()).appendTo('#tdnum_' + id);
        });
    }

    $(window).resize(function () {
        if ($(window).width() <= 600) {
            $('#table tr').filter(function () {
                var id = $(this).attr('id');
                id = id.split('_');
                id = id[1];
                $($('#divclass_' + id).detach()).appendTo('#tdnum_' + id);
                $($('#divname_' + id).detach()).appendTo('#tdnum_' + id);
                $($('#divdate_' + id).detach()).appendTo('#tdnum_' + id);
                $($('#divdtn_' + id).detach()).appendTo('#tdnum_' + id);
            });
        } else {
            $('#table tr').filter(function () {
                var id = $(this).attr('id');
                id = id.split('_');
                id = id[1];
                $($('#divclass_' + id).detach()).appendTo('#tdclass_' + id);
                $($('#divname_' + id).detach()).appendTo('#tdname_' + id);
                $($('#divdtn_' + id).detach()).appendTo('#tddtn_' + id);
                $($('#divdate_' + id).detach()).appendTo('#tddate_' + id);
            });
        }
    });
});