/**
 * Created by Администратор on 24.01.2015.
 */


$('#fotogallery').lightGallery();  // call lightgallery from fotogallery page
$('#thumbnail').lightGallery();  // thumbnails of furnitura images
$('.furnitura-links').lightGallery(); // text links for furnitura dwg and virez
$('.thumbgallery').lightGallery(); // call lightgallery from tag with thumbgallery class

// call lightgallery from tag with thumb class
// это одна картинка без галереи
$('.thumb').lightGallery({
  selector: 'this'
  }); 


// main lightSlider
$('#mainSlider').lightSlider({
    item: 1, // кол-во слайдов на ширину блока
    slideMargin: 0,  // расстояние между слайдами. Полезно для слайлера клиентов, когда несколько слайдов на странице одновременно
    loop: true, // крутить слайды по кругу
    speed: 2000, // скорость движения слайда при нажатии на кнопку
    keyPress: true, // слайды можно переключать клавиатурой
    controls: true, // показывать стрелки справа и слева
    pager: false, // наличие шариков или миниатюр внизу для быстрой навигации по слайдам
    gallery: false, // вместо шариков будут миниатюры для навигации
    auto: true, // автостарт слайдшоу
});

// main lightSlider
$('#lastworksSlider').lightSlider({
    item: 1, // кол-во слайдов на ширину блока
    slideMargin: 0,  // расстояние между слайдами. Полезно для слайлера клиентов, когда несколько слайдов на странице одновременно
    loop: true, // крутить слайды по кругу
    speed: 1000, // скорость движения слайда при нажатии на кнопку
    keyPress: true, // слайды можно переключать клавиатурой
    controls: true, // показывать стрелки справа и слева
    pager: false, // наличие шариков или миниатюр внизу для быстрой навигации по слайдам
    gallery: false, // вместо шариков будут миниатюры для навигации
});


// file input button
$(document).on('change', '.btn-file :file', function() {
  var input = $(this),
      numFiles = input.get(0).files ? input.get(0).files.length : 1,
      label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
  input.trigger('fileselect', [numFiles, label]);
});

$(document).ready( function() {
    $('.btn-file :file').on('fileselect', function(event, numFiles, label) {
        
        var input = $(this).parents('.input-group').find(':text'),
            log = numFiles > 1 ? numFiles + ' files selected' : label;
        
        if( input.length ) {
            input.val(log);
        } else {
            if( log ) alert(log);
        }
        
    });
});


// back to top button
$(function(){
 
  $(document).on( 'scroll', function(){
 
    if ($(window).scrollTop() > 100) {
      $('.scroll-top-wrapper').addClass('show');
    } else {
      $('.scroll-top-wrapper').removeClass('show');
    }
  });
 
  $('.scroll-top-wrapper').on('click', scrollToTop);
});
 
function scrollToTop() {
  verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
  element = $('body');
  offset = element.offset();
  offsetTop = offset.top;
  $('html, body').animate({scrollTop: offsetTop}, 500, 'linear');
}


// tooltip
$('[data-toggle="tooltip"]').tooltip();

  $('').hover(function(){
    $(this).append($button);
    $button.show();
  }, function(){
    $button.hide();
  });


// пр загрузке страницы окно смещается вниз к элементу id=content
/*
  $(document).ready(function(){$('html, body').animate({
        scrollTop: $("#content").offset().top
    }, 500);
})

$( "#content" ).scroll(function() {
  $('.categorymenu').addClass('show');

});

*/

// category menu button
$(function(){
 
  $(document).on( 'scroll', function(){
 
    if ($(window).scrollTop() > 400) {
      $('.categorymenu').addClass('show');
    } else {
      $('.categorymenu').removeClass('show');
    }
  });

});


