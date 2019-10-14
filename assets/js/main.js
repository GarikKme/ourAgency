$ (function () {
	// добавление класса
    $('.form__btn').click (function () {
        $('.footer__wrap_two').toggleClass('footer__wrap_two-transform');
        // $('.green').addClass('open');
    })

    // Menu opener hamburger
    $('.menu-open, .menu a').click(function () {
        $('.menu-collapse').toggleClass('d-none').css('order', '0');
        $('.menu').toggleClass('menu-opened');
    });

    $('.menu-open').on('click', function(e) {
        e.preventDefault;
        $(this).toggleClass('menu-open_active');
        $('.menu__list').toggleClass('menu__list_active');    
    });

    // плавное перемещение страницы к нужному блоку
    $("a.go").click(function (e) {
        e.preventDefault();
        elementClick = $(this).attr("href");
        destination = $(elementClick).offset().top;
        $("body,html").animate({scrollTop: destination }, 800);
    });
    // Модальные окна
    $('.navigation__btn, .big-btn').click(function (e) {
        e.preventDefault();
        $('#exampleModal').arcticmodal();
    });



});