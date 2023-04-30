function Messages() {
    function box(messagetype, time= 5000) {
        if ($(".notification").length === 0) {
            $('body').append("<div class='notification'></div>");
        }

        $(".notification").append("<div class='notification-container " + messagetype + "'></div>");
        $(".notification-container").html("<div class='notification-block'></div>");
        $(".notification-block").html("<div class='notification-icon'></div><div class='notification-message'></div>");

        setTimeout(function () {
            $(".notification-container").attr("style", "opacity:0.95")
        }, 100)

        $(".notification-container").each(function (index) {
            index = index + 1;
            $(this).addClass("box_" + index);

            setTimeout(function () {
                $(".box_" + index).css('opacity', '0');
                setTimeout(function () {
                    $(".box_" + index).css('display', 'none');
                    $(".box_" + index).remove()
                    if ($(".notification-container").length === 0) {
                        $(".notification").remove();
                    }
                }, 500)
            }, time)
        })
    }

    function success(text, time) {
        box("success-notif-box", time);
        $(".notification-message").html(text);
    }

    function info(text, time) {
        box("info-notif-box", time);
        $(".notification-message").html(text);
    }

    function warning(text, time) {
        box("warning-notif-box", time);
        $(".notification-message").html(text);
    }

    function error(text, time) {
        box("error-notif-box", time);
        $(".notification-message").html(text);
    }

    return {
        'success': success,
        'info': info,
        'warning': warning,
        'error': error,
    }
}

var message = new Messages();

// EXAMPLE
// message.success("test");
