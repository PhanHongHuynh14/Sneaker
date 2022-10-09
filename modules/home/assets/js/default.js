function load_product(t, a) {
    $.ajax({
        type: "POST",
        url: "/index.php?module=home&view=home&task=fetch_pages&raw=1",
        data: { cat_id: t, manf_id: a },
        cache: !1,
        success: function (e) {
            $("#box_product_" + t).html(e), $(".item_tabs").removeClass("active"), $("#item_tab_" + t + a).addClass("active");
        },
    });
}
function start(e, i) {
    var l = new Date(e).getTime(),
        n = setInterval(function () {
            var e = new Date().getTime(),
                t = l - e,
                a = Math.floor(t / 864e5),
                s = Math.floor((t % 864e5) / 36e5),
                o = Math.floor((t % 36e5) / 6e4),
                e = Math.floor((t % 6e4) / 1e3);
            // if (a > 0) {
                $("#demnguoc_" + i).html("<span><b>"+a +"</b>d</span><span><b>"+s +"</b>h</span><span><b>"+o +"</b>m</span><span><b>"+e +"</b>s</span>"), t < 0 && (clearInterval(n), $("#demnguoc_" + i).html("Hết giờ khuyến mại"));
            // } else {
            //     $("#demnguoc_" + i).html(s + "h " + o + "ph: " + e + " giây"), t < 0 && (clearInterval(n), $("#demnguoc_" + i).html("Hết giờ khuyến mại"));
            // }
        }, 1e3);
}
$(document).ready(function () {
    $(".sale-carousel").owlCarousel({
        margin: 0,
        nav: !0,
        dots: !1,
        lazyLoad: !0,
        responsiveClass: !0,
        autoplayTimeout: 2e3,
        responsive: { 0: { items: 1.5, nav: !1, smartSpeed: 2e3, autoplay: !1 }, 768: { items: 3 }, 992: { items: 5 }, 1600: { items: 5 } },
    }),
        $(".sale-carousel .owl-prev").html(""),
        $(".sale-carousel .owl-next").html(""),
        $(".slide_s").owlCarousel({ margin: 10, loop: !0, nav: !1, dots: !1, responsiveClass: !0, autoplay: !0, autoplayTimeout: 1e3, responsive: { 0: { items: 1 }, 768: { items: 1 }, 1e3: { items: 1 }, 1600: { items: 1 } } }),
        $(".list_newhot").owlCarousel({ margin: 0, loop: !0, nav: !0, dots: !1, autoplay: !0, smartSpeed: 4e3, responsive: { 0: { items: 1 }, 768: { items: 1 }, 1e3: { items: 1 }, 1600: { items: 1 } } }),
        $(".list_newhot .owl-prev").html('<i class="fa fa-chevron-left"></i>'),
        $(".list_newhot .owl-next").html('<i class="fa fa-chevron-right"></i>'),
        $(".list_slideshow").owlCarousel({ margin: 0, loop: !0, nav: !1, dots: !0, lazyLoad: !0, autoplay: !0, responsive: { 0: { items: 1 }, 768: { items: 1 }, 1e3: { items: 1 }, 1600: { items: 1 } } }),
        $(".time_coundown").each(function (e) {
            start($(this).attr("data-end"), $(this).attr("data-id"));
        });
});
