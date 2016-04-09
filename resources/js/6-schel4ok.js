/**
 * Created by Администратор on 24.01.2015.
 */

// sauna calculator
$(document).ready(function () {

  $('input[name="door_size_radio"]').change(function () {
    if ($(this).val() == 'standard') {
        $('.standard_sizes').show();
        $('.special_sizes').hide();
        $('.standard_sizes').attr("required", true);
        $('.special_sizes').attr("required", false);
        $('.result > .razmer').html($('.door_size_standard option:selected').html());
        calculation();
    }
    else {
        $('.special_sizes').show();
        $('.standard_sizes').hide();
        $('.standard_sizes').attr("required", false);
        $('.special_sizes').attr("required", true);
        $('.result > .razmer').html($('input[name="door_size_b"]').val() +'x'+ $('input[name="door_size_h"]').val());
        calculation();
    }
  });


  $('select').change(function () {
    $('.result').children('.razmer').html($('.door_size_standard option:selected').html());
    calculation();
  });

  $('input[name="door_size_b"]').change(function () {
    $('.result').children('.razmer').html($(this).val() +'x'+ $('input[name="door_size_h"]').val());
    calculation();
  });

  $('input[name="door_size_h"]').change(function () {
    $('.result').children('.razmer').html($('input[name="door_size_b"]').val() +'x'+ $(this).val());
    calculation();
  });

  $('input[name="glass"]').change(function () {
    $('.result').children('.glass').html($(this).val());
    calculation();
  });

  $('input[name="korobka"]').change(function () {
    $('.result').children('.korobka').html($(this).val());
    calculation();
  });

  $('input[name="petli"]').change(function () {
    $('.result').children('.petli').html($(this).val());
    calculation();
  });

  $('input[name="dekor"]').change(function () {
    $('.result').children('.dekor').html($(this).val());
    calculation();
  });

  $('input[name="dostavka"]').change(function () {
    if ( $(this).is(":checked") ) {
      $('.result').children('.dostavka').html($(this).val());
      calculation();    
    }
    else {
      $('.result').children('.dostavka').html('нет');
      calculation();
    }
 
  });

  $('input[name="montazh"]').change(function () {
    if ( $(this).is(":checked") ) {
      $('.result').children('.montazh').html($(this).val());
      calculation();    
    }
    else {
      $('.result').children('.montazh').html('нет');
      calculation();
    }
 
  });

  

  function calculation() {
  
  if ($('input[name="door_size_radio"]:checked').val() == 'standard') 
    {var BasePrice  =  $("select option:selected").data('price') * 1;}
  else 
    {var BasePrice  =  $('input[name="door_size_b"]').val() * $('input[name="door_size_h"]').val() * 6500 / 1000000;}

    var GlassPrice  = $("input[name='glass']:checked").data('price') * 1; 
    var DerevoPrice = $("input[name='korobka']:checked").data('price') * 1; 
    var PetliPrice  = $("input[name='petli']:checked").data('price') * 1; 
    var DekorPrice  = $("input[name='dekor']:checked").data('price') * 1; 
    var DostavkaPrice  = $("input[name='dostavka']").is(":checked") ? $("input[name='dostavka']:checked").data('price') * 1 : 0; 
    var MontazhPrice  = $("input[name='montazh']").is(":checked") ? $("input[name='montazh']:checked").data('price') * 1 : 0; 

    var total = BasePrice + GlassPrice + DerevoPrice + PetliPrice + DekorPrice + DostavkaPrice + MontazhPrice;
    $('.result').children('.price').html( total );
    return false;
    };
}); 



// душевая перегородка calculator
$(document).ready(function () {

  $('input[name="size_b"]').change(function () {
    $('.result').children('.razmer').html($(this).val() +'x'+ $('input[name="size_h"]').val());
    calculation();
  });

  $('input[name="size_h"]').change(function () {
    $('.result').children('.razmer').html($('input[name="size_b"]').val() +'x'+ $(this).val());
    calculation();
  });

  $('input[name="glass"]').change(function () {
    $('.result').children('.glass').html($(this).val());
    calculation();
  });

  $('input[name="furnitura"]').change(function () {
    $('.result').children('.furnitura').html($(this).val());
    calculation();
  });

  $('input[name="verh_truba"]').change(function () {
    if ( $(this).is(":checked") ) {
      $('.result').children('.verh_truba').html($(this).val());
      calculation();    
    }
    else {
      $('.result').children('.verh_truba').html('нет');
      calculation();
    }
 
  });

  $('input[name="uplotniteli"]').change(function () {
    if ( $(this).is(":checked") ) {
      $('.result').children('.uplotniteli').html($(this).val());
      calculation();    
    }
    else {
      $('.result').children('.uplotniteli').html('нет');
      calculation();
    }
 
  });


  $('input[name="dostavka"]').change(function () {
    if ( $(this).is(":checked") ) {
      $('.result').children('.dostavka').html($(this).val());
      calculation();    
    }
    else {
      $('.result').children('.dostavka').html('нет');
      calculation();
    }
 
  });

  $('input[name="montazh"]').change(function () {
    if ( $(this).is(":checked") ) {
      $('.result').children('.montazh').html($(this).val());
      calculation();    
    }
    else {
      $('.result').children('.montazh').html('нет');
      calculation();
    }
 
  });

  function calculation() {

    var Size  =  $('input[name="size_b"]').val() * $('input[name="size_h"]').val() / 1000000;
    var GlassPrice  = $("input[name='glass']:checked").data('price') * Size;
    var FurnituraPrice = $("input[name='furnitura']:checked").data('price') * 1;
    var VerhTrubaPrice  = $("input[name='verh_truba']").is(":checked") ? $("input[name='verh_truba']:checked").data('price') * 1 : 0; 
    var UplotniteliPrice  = $("input[name='uplotniteli']").is(":checked") ? $("input[name='uplotniteli']:checked").data('price') * 1 : 0; 
    var DostavkaPrice  = $("input[name='dostavka']").is(":checked") ? $("input[name='dostavka']:checked").data('price') * 1 : 0; 
    var MontazhPrice  = $("input[name='montazh']").is(":checked") ? $("input[name='montazh']:checked").data('price') * 1 : 0; 

    var total = GlassPrice + FurnituraPrice + VerhTrubaPrice + UplotniteliPrice + DostavkaPrice + MontazhPrice;


    $('.result').children('.price').html( total );
    return false;
    };

});



// проверка, что размер файла не превышает 10мб
$('#file').change(function() {
  var filesize = (this.files[0].size/1048576).toPrecision(3); //this.files[0].size gets the size of your file in bytes.
  if (filesize > 10)    {$('.filesize').html('Размер файла превышает 10мб. Замените файл ссылкой на файлообменник.');}
  else {$('.filesize').html('Размер файла ' + filesize + ' Мб');}
});




$('#fotogallery').lightGallery();  // call lightgallery from fotogallery page
$('#thumbnail').lightGallery();  // thumbnails of furnitura images
$('.furnitura-links').lightGallery(); // text links for furnitura dwg and virez
$('.thumbgallery').lightGallery(); // call lightgallery from tag with thumbgallery class

// call lightgallery from tag with thumb class
// это картинки в тексте статьи
$('.fulltext').lightGallery({
  selector: '.thumb'
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


