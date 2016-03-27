/**
 * Created by Администратор on 24.01.2015.
 */

 /* $(document).ready(function(){
      $('#searchbox').selectize();
  });

*/

// sauna calculator
$(document).ready(function () {


  $('input[name="door_size_radio"]').change(function () {
    if ($(this).val() == 'standard') {
        $('.standard_sizes').show();
        $('.special_sizes').hide();
        $('.result > .razmer').html($('.door_size_standard option:selected').html());
        calculation();
    }
    else {
        $('.special_sizes').show();
        $('.standard_sizes').hide();
        $('.result > .razmer').html($('input[name="door_size_b"]').val() +'x'+ $('input[name="door_size_h"]').val());
        calculation();
    }
  });


  $('select').change(function () {
    $('.result > .razmer').html($('.door_size_standard option:selected').html());
    calculation();
  });

  $('input[name="door_size_b"]').change(function () {
    $('.result > .razmer').html($(this).val() +'x'+ $('input[name="door_size_h"]').val());
    calculation();
  });

  $('input[name="door_size_h"]').change(function () {
    $('.result > .razmer').html($('input[name="door_size_b"]').val() +'x'+ $(this).val());
    calculation();
  });

  $('input[name="glass"]').change(function () {
    $('.result > .glass').html($(this).attr('text'));
    calculation();
  });

  $('input[name="korobka"]').change(function () {
    $('.result > .korobka').html($(this).attr('text'));
    calculation();
  });

  $('input[name="petli"]').change(function () {
    $('.result > .petli').html($(this).attr('text'));
    calculation();
  });

  $('input[name="dekor"]').change(function () {
    $('.result > .dekor').html($(this).attr('text'));
    calculation();
  });

//  $('form').submit(calculation());
  
  function calculation() {
  
  if ($('input[name="door_size_radio"]:checked').val() == 'standard') 
    {var BasePrice  =  $("select option:selected").data('price') * 1;}
  else 
    {var BasePrice  =  $('input[name="door_size_b"]').val() * $('input[name="door_size_h"]').val() * 6500 / 1000000;}

    var GlassPrice  = $("input[name='glass']:checked").data('price') * 1; 
    var DerevoPrice = $("input[name='korobka']:checked").data('price') * 1; 
    var PetliPrice  = $("input[name='petli']:checked").data('price') * 1; 
    var DekorPrice  = $("input[name='dekor']:checked").data('price') * 1; 

    var total = BasePrice + GlassPrice + DerevoPrice + PetliPrice + DekorPrice;
    $('.result > .price').html( total );
    return false;
    };

  //отслеживаем изменение данных
  //$('.calculator').on('click keyup', calculation);
}); 


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


