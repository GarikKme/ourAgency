$(function () {

  // Fixed navigation
  // $(window).scroll(function() {
  // 	if ($(this).scrollTop() > 1300){
  // 		$('.target').addClass("target-position");
  // 	}
  // 	else{
  // 		$('.target').removeClass("target-position");
  // 	}
	// });
	
	var media = $("video")[0];
    if(media.paused){
        $(this).html('PAUSE');
      media.play();
    }else{
        $(this).html('PLAY');
      media.pause();
    }
		

  function modalAfter() {
    $('#exampleModal2').arcticmodal();
  };
  //добавление класса
  $('.form__btn').click(function () {
    var value = $.trim($(".arrow").val());
    if (value.length <= 0) {

      alert('Заполните поля для ввода.');
    } else {

      setTimeout(modalAfter, 2000);
      $('.footer__wrap_two').toggleClass('footer__wrap_two-transform');
      // $('.green').addClass('open');
      // alert('Спасибо, Ваша заявка отправлена.');
    }
  });

  $('.modal__btn').click(function () {
    let valInput = $.trim($(".form__input").val());
    if (valInput.length <= 0) {
      alert('Заполните поля ввода');
    } else {
      setTimeout(modalAfter, 2000);
      $('.footer__wrap_two').toggleClass('footer__wrap_two-transform');
      //alert('Спасибо. Ваша заявка отправлена');
    }
  });

  // Menu opener hamburger
  $('.menu-open, .menu a').click(function () {
    $('.menu-collapse').toggleClass('d-none').css('order', '0');
    $('.menu').toggleClass('menu-opened');
  });

  $('.menu-open').on('click', function (e) {
    e.preventDefault;
    $(this).toggleClass('menu-open_active');
    $('.menu__list').toggleClass('menu__list_active');
  });

  // плавное перемещение страницы к нужному блоку
  $(".menu__list li a").click(function (e) {
    e.preventDefault();
    elementClick = $(this).attr("href");
    destination = $(elementClick).offset().top;
    $("body,html").animate({scrollTop: destination}, 800);
  });
  // Модальные окна
  $('.navigation__btn, .big-btn').click(function (e) {
    e.preventDefault();
    $('#exampleModal').arcticmodal();
  });

  //Закрытие ютуба
  $('.closeVideo').on('click', function () {
    $('.full-pageVideo iframe').detach();
    $(this).detach();
  })


});