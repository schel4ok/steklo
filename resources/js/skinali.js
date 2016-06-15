
// фартук для кухни
$(document).ready(function () {

    // добавление нескольких стекол - это пока не доделано, т.к. не работает калькуляция общей квадратуры стекла
    $('.add_button').click(function() {
        var intId = $('.fieldwrapper > div').length + 1;
        var fieldWrapper = $('<div class="row moreglass" />');
        var steklo = $( '<div class="form-group col-xs-6 col-sm-4"><h4>' + intId + '-е стекло</h4> </div> <div class="form-group col-xs-3 col-sm-4">    <input name="size_b' + intId + '" type="text" class="form-control"> <label for="size_b">Ширина, мм</label>  </div>  <div class="form-group col-xs-3 col-sm-4">    <input name="size_h' + intId + '" type="text" class="form-control">    <label for="size_h">Высота, мм</label>  </div>');

        var removeButton = $('<a class="remove btn btn-default" href="javascript:void(0);">удалить</a>');
        removeButton.click(function() {
            $(this).parent().remove();
        });

        fieldWrapper.append(steklo);
        fieldWrapper.append(removeButton);
        $('.fieldwrapper').append(fieldWrapper);
    });



  // обработка ввода пользователя

  $('input[name^="size_b"]').change(function () {
    $('.result').children('.razmer').html($(this).val() +'x'+ $('input[name^="size_h"]').val());
    calculation();
  });

  $('input[name^="size_h"]').change(function () {
    $('.result').children('.razmer').html($('input[name^="size_b"]').val() +'x'+ $(this).val());
    calculation();
  });
  
  $('select.glass').change(function () {
    $('.result').children('.glass').html($(this).val());
    calculation();
  });

  $('select.led').change(function () {
    $('.result').children('.led').html($(this).val());
    calculation();
  });

  $('input[name="rozetki"]').change(function () {
    $('.result').children('.rozetki').html($(this).val());
    calculation();
  });

  $('input[name="otverstija"]').change(function () {
    $('.result').children('.otverstija').html($(this).val());
    calculation();
  });

  $('input[name="krepej"]').change(function () {
    $('.result').children('.krepej').html($(this).val());
    calculation();
  });

  $('select.dekor').change(function () {
    $('.result').children('.dekor').html($(this).val());
    calculation();
  });

  $('select.dostavka').change(function () {
    if ($(this).val() == 'zamkad') { $('.zamkad').show(); }
    else { $('.zamkad').hide(); }
    $('.result').children('.dostavka').html($('select.dostavka option:selected').text());
    calculation();  
  });

  $('select.montazh').change(function () {
    $('.result').children('.montazh').html($(this).val());
    calculation();
  });

  $('input[name="zamkad"]').change(function () {
    $('.result').children('.zamkad').html($(this).val());
    calculation();
  });



  function calculation() {
    glass = 0;
    dekor = 0;
    montazh = 0;
    led = 0;
    rozetki = 0;
    otverstija = 0;
    krepej = 0;
    dostavka = 0;
    zamkad = 0;
    b1 = $('input[name="size_b1"]').val();
    h1 = $('input[name="size_h1"]').val();

    var Size  =  ( b1*h1 ) / 1000000;

    var GlassPrice  = $('select.glass option:selected').data('price') * Size + glass;

    // на изделия длиной более 2500 мм - наценка  30%
    if (b1 > 2500) {
      GlassPrice = GlassPrice * 1.3
    }

    var DekorPrice  =  $('select.dekor option:selected').data('price') * Size + dekor;
    var MontazhPrice  =  $('select.montazh option:selected').data('price') * Size + montazh;
    var LedPrice = $('select.led option:selected').data('price') * b1 / 1000 + led;

    var RozetkiPrice  =  $('input[name="rozetki"]').val() * 1000 + rozetki; // каждый вырез в стекле под розетку по 1000 руб
    var OtverstijaPrice  =  $('input[name="otverstija"]').val() * 150 + otverstija;  // каждая дырка в стекле по 150 руб
    var KrepejPrice  =  $('input[name="krepej"]').val() * 100 + krepej;  // каждый саморез по 100 руб
    var DostavkaPrice  =  $('select.dostavka option:selected').data('price') * 1 + dostavka;
    var ZamkadPrice  =  $('input[name="zamkad"]').val() * 30 + zamkad; // 30 руб/км за МКАД


    var TotalSkinali = GlassPrice + DekorPrice + MontazhPrice + LedPrice + RozetkiPrice + OtverstijaPrice + KrepejPrice + DostavkaPrice + ZamkadPrice;


    $('.result').children('.GlassPrice').html( GlassPrice );
    $('.result').children('.LedPrice').html( LedPrice );
    $('.result').children('.RozetkiPrice').html( RozetkiPrice );
    $('.result').children('.OtverstijaPrice').html( OtverstijaPrice );
    $('.result').children('.KrepejPrice').html( KrepejPrice );
    $('.result').children('.DekorPrice').html( DekorPrice );
    $('.result').children('.DostavkaPrice').html( DostavkaPrice );
    $('.result').children('.ZamkadPrice').html( ZamkadPrice );
    $('.result').children('.MontazhPrice').html( MontazhPrice );

    $('.result').children('.total').html( TotalSkinali );
    //return false;

    };

});