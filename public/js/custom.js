(function ($) {
    "use strict";

    $(document).ready(function () {
        // set background on nav bar when element clicked
        $('.tabs li').click(function (e) {
            $('.tabs li').removeClass('active');
            let $this = $(this);
            if (!$this.hasClass('active')) {
                $this.addClass('active');
            }
            e.preventDefault();
        })
    })

})(window.jQuery);
