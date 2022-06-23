jQuery(function($) {

    $(document).ready(function () {
        $('.show-mobile__menu-icon').click(function () {
            $('.show-mobile__menu').toggle();
            $('.mobile-menu__background').toggle();
        })
    });

});