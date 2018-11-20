(function($) {
    $(document).ready(function() {
        $('#cssmenu').prepend('<div id="menu-button"></div>');
        $('#cssmenu #menu-button').on('click', function() {
            var menu = $(this).next('ul', 1000);
            if (menu.hasClass('open', 1000)) {

                time: 1500,
                menu.removeClass('open', 1000);
            } else {
                time: 1500,
                menu.addClass('open', 1000);
            }
        });
    });
})(jQuery);