
(function ($) {

    $(document).ready(function () {

        var carouselSettings = {

            //autoplay: true,
            pauseOnHover: false,
        }

        $('.carousel').slick(carouselSettings)

        $('.accordeon > .btn-accordeon').on('click', function(){

            if($(this).next('.accordeon-content').is(':hidden')) {

                $('.btn-accordeon').removeClass('active');
                $(this).addClass('active');
                $('.accordeon-content').slideUp();
                $(this).next('.accordeon-content').slideDown();
            } else {

                $('.btn-accordeon').removeClass('active');
                $('.accordeon-content').slideUp();
            }
        })
    })

})(jQuery);