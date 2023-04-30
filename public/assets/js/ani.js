function openModal() {
    anime({
        targets: "#nav-modal",
        height: '100%',
        duration: 450,
        easing: 'easeInOutSine',
        begin: function () {
            $("#header").removeClass("header-bg");
            $("body").addClass("overflow-hidden");
        },
        complete: function () {
            anime({
                targets: '.nav-modal-link, .nav-model-link-title',
                opacity: 1,
                duration: 400,
                translateY: [-20, 0],
                delay: anime.stagger(100, {from: 'first'}),
                easing: 'easeInOutSine',
            })

            anime({
                targets: '.modal-phone, .modal-email, .modal-social',
                opacity: 1,
                duration: 400,
                translateY: [-20, 0],
                delay: anime.stagger(100, {from: 'first'}),
                easing: 'easeInOutSine',
            })
        }
    })

    anime({
        targets: '.navbar-link',
        opacity: 0,
        duration: 400,
        delay: anime.stagger(100, {from: 'first'}),
        easing: 'easeInOutSine',
        complete: function () {
            $('.navbar-link').css("visibility", "hidden");
        }
    })
}

function hideModel() {
    anime({
        targets: '.modal-phone, .modal-email, .modal-social',
        opacity: 0,
        duration: 400,
        translateY: [0, -0],
        delay: anime.stagger(100, {from: 'last'}),
        easing: 'easeInOutSine',
    })

    anime({
        targets: '.nav-modal-link, .nav-model-link-title',
        opacity: 0,
        duration: 400,
        translateY: [0, -20],
        delay: anime.stagger(100, {from: 'last'}),
        easing: 'easeInOutSine',
        complete: function () {
            anime({
                targets: '.navbar-link',
                opacity: 1,
                duration: 400,
                delay: anime.stagger(100, {from: 'last'}),
                easing: 'easeInOutSine',
                begin: function () {
                    $('.navbar-link').removeAttr("style");
                },
                complete: function () {
                    $('.navbar-link').removeAttr("style");
                }
            })

            anime({
                targets: "#nav-modal",
                height: '0%',
                duration: 450,
                easing: 'easeInOutSine',
                complete: function () {
                    $("body").removeClass("overflow-hidden");
                }
            })

            setTimeout(function () {
                if ((window.pageYOffset) >= 1) {
                    $("#header").addClass('header-bg');
                }
            }, 200)
        }
    })
}

$("#mobile").click(function (e) {
    e.stopPropagation();
    $("#hamburger-menu").toggleClass("open");
    $("#nav-modal").toggleClass("active");
    var activeState = $("#nav-modal").hasClass("active");

    if (activeState) {
        openModal();
    } else {
        hideModel();
    }
})