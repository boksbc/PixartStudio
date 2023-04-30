var header = $("#header")

if ((window.pageYOffset) >= 1) {
    header.addClass('header-bg');
}

window.onscroll = function () {
    var activeState = $("#nav-modal").hasClass("active");

    if ((window.pageYOffset) >= 1 && activeState === false) {
        header.addClass('header-bg');
    } else {
        header.removeClass('header-bg');
    }
}

// $("#mobile").click(function (e) {
//     $("#hamburger-menu").toggleClass("open");
// })

$(document).on('click', '.faq-section', function (e) {
    var maxheight = $(this).find('.faq-content').css('max-height', 'auto')[0]['scrollHeight'];

    if ($(this).find('.accordion-open').length == 1) {
        if (e.target.name === undefined) {
            $(this).find('.faq-content').removeAttr('style')

            $(this).find('.faq-content').addClass('accordion-open');
            $(this).find('.faq-content-btn').addClass('active-faq-content-btn');
            $(this).find('.faq-content').removeClass('accordion-open')
            $(this).find('.faq-content-btn').removeClass('active-faq-content-btn');
        }
    } else {
        $('.faq-content').removeAttr('style')
        $('.faq-content').removeClass('accordion-open')
        $('.faq-content-btn').removeClass('active-faq-content-btn');

        $(this).find('.faq-content').addClass('accordion-open');
        $(this).find('.faq-content-btn').addClass('active-faq-content-btn');
        $(this).find('.faq-content').css('max-height', maxheight)

    }
})

function autoHeight() {
    var h_header = $("#header").height();
    var h_footer = $("#footer").height();
    var height = "calc(100vh - " + (h_header + h_footer) + "px)";
    $(".auto-h-full").parents("#content").css("height", height);
}

autoHeight();

$(document).ready(function () {
    $(window).resize(function () {
        autoHeight();
    });
})

$("[data-href='email']").click(function (e) {
    let $this = $(this)
    let email = $this.text().replace("[at]", "@");
    let subject = $this.data('subject');

    if( subject === undefined  || subject.length === 0) {
        subject = "Allgemein";
    }
    $this.attr("href", "mailto:" + $.trim(email) + "?subject=" + subject)
    setTimeout(function () {
        $this.removeAttr("href")
    }, 2000)
})


function LoadingDots() {
    let submit = $("[data-type='submit']")
    if ($(".dots").length === 0) {
        submit.attr("disabled", "disabled");
        submit.children("span").css("opacity", "0");
        submit.append("<div class='dots'>");
        for ($i = 0; $i < 3; $i++) {
            $(".dots").append("<div class=\"dot dot_" + ($i + 1) + " \">");
        }
    } else {
        submit.removeAttr("disabled");
        submit.children("span").removeAttr("style");
        $(".dots").remove();
    }
}

function addErrorMessage(response, id) {
    if (response[id] !== undefined) {
        if ($(".error-" + id).length === 0) {
            $("#" + id).parent().append("<span class='error-message error-" + id + "'>" + response[id] + "</span>");
        }
    }
}

function CheckboxErrorMessage(response, id) {
    if (response[id] === "false") {
        $("#" + id).parent().next("label").css("color", "#e33838");
    }
}

function RemoveCheckboxErrorMessage() {
    $("input[type='checkbox']").parent().next("label").removeAttr("style");
}

function removeErrorMessage() {
    $(".error-message").remove()
}

function notifyBox(message) {
    if($('#notification-alert').length === 0) {
        $('body').append(
            "<div id=\"notification-alert\"\n" +
            "                 class=\"fixed translate-x-full z-[999] right-0 transition-transform duration-500 top-16 flex items-center w-full sm:max-w-sm p-5\">\n" +
            "                <div id=\"content-div\" class=\"inline-flex items-center justify-center bg-gray-800 p-3 rounded-lg text-gray-500 font-mono hidden\">\n" +
            "                    <div class=\"inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-red-200 bg-red-800 rounded-lg\">\n" +
            "                        <svg aria-hidden=\"true\" class=\"w-5 h-5\" fill=\"currentColor\" viewBox=\"0 0 20 20\"\n" +
            "                             xmlns=\"http://www.w3.org/2000/svg\">\n" +
            "                            <path fill-rule=\"evenodd\"\n" +
            "                                  d=\"M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z\"\n" +
            "                                  clip-rule=\"evenodd\"></path>\n" +
            "                        </svg>\n" +
            "                    </div>\n" +
            "                    <div class=\"ml-5 text-xs text-gray-200\">" + message + "</div>\n" +
            "                </div>\n" +
            "            </div>"
        )

        let alert = $("#notification-alert");
        let content = $("#content-div");

        setTimeout(function () {
            alert.removeClass("translate-x-full");
            alert.addClass("translate-x-0");
        }, 1000);
        content.removeClass("hidden");
    }
}

function submitsuccess() {
    let submit = $("button[data-type='submit']");
    let svg = "<div id='send_message' class=\"success-send-message flex items-center\">\n" +
        "                <svg id=\"checkmark\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.0\"\n" +
        "                     stroke=\"currentColor\" class=\"w-8 h-8 text-white mx-2\">\n" +
        "                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\"\n" +
        "                          d=\"M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z\"/>\n" +
        "                </svg>\n" +
        "                <span id='info-message' class=\"transition-all duration-1000 ease-in-out text-200 font-mono max-w-[0] hover:w-fit text-xs font-semibold overflow-hidden whitespace-nowrap" +
        " text-gray-300\">Ihre Anfrage wurde abgeschickt</span>\n" +
        "            </div>"

    submit.attr("disabled", "disbaled");
    submit.children("span").css("visibility", "hidden");
    submit.append(svg)
    let sendDiv = $(".success-send-message")
    let infomess = $('#info-message')

    setTimeout(function () {
        infomess.addClass("!max-w-[250px]");
        setTimeout(function () {
            sendDiv.remove();
            submit.children("span").removeAttr("style");
            submit.removeAttr("disabled");
        },5000)
    },1000)

}