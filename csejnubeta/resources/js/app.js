/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");

window.Vue = require("vue");

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component(
    "example-component",
    require("./components/ExampleComponent.vue")
);

const app = new Vue({
    el: "#app"
});

$(function() {
    var $window = $(window),
        win_height_padded = $window.height() * 1.1,
        isTouch = Modernizr.touch;

    if (isTouch) {
        $(".revealOnScroll").addClass("animated");
    }

    $window.on("scroll", revealOnScroll);

    function revealOnScroll() {
        var scrolled = $window.scrollTop(),
            win_height_padded = $window.height() * 1.1;

        // Showed...
        $(".revealOnScroll:not(.animated)").each(function() {
            var $this = $(this),
                offsetTop = $this.offset().top;

            if (scrolled + win_height_padded > offsetTop) {
                if ($this.data("timeout")) {
                    window.setTimeout(function() {
                        $this.addClass("animated " + $this.data("animation"));
                    }, parseInt($this.data("timeout"), 10));
                } else {
                    $this.addClass("animated " + $this.data("animation"));
                }
            }
        });
        // Hidden...
        $(".revealOnScroll.animated").each(function(index) {
            var $this = $(this),
                offsetTop = $this.offset().top;
            if (scrolled + win_height_padded < offsetTop) {
                $(this).removeClass(
                    "animated fadeInUp fadeInLeft fadeInLeft1 fadeInLeft2"
                );
            }
        });
    }

    revealOnScroll();
});
