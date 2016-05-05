
// фартук для кухни
$(document).ready(function () {


  // Add/Remove Input Fields Dynamically
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var x = 1; //Initial field counter is 1
    

    $(addButton).click(function(e){ //Once add button is clicked
        e.preventDefault();
        if(x < maxField){ //Check maximum number of input fields
            var y = x + 1;
            var fieldHTML = '<div class="row"><div class="form-group col-xs-6 col-sm-4"><h4>' + y + '-е стекло</h4></div><div class="form-group col-xs-3 col-sm-4"><input name="size_b' + y + '" type="text" class="form-control"><label for="size_b">Ширина, мм</label></div><div class="form-group col-xs-3 col-sm-4"><input name="size_h' + y + '" type="text" class="form-control"><label for="size_h">Высота, мм</label></div><a href="javascript:void(0);" class="remove_button" title="Remove field">удалить стекло</a></div>'; //New input field html 
            $(wrapper).append(fieldHTML); // Add field html
            x++; //Increment field counter

        }
    });
    $(wrapper).on('click', '.remove_button', function(e){ //Once remove button is clicked
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
        y--;
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
    $('.result').children('.dostavka').html($(this).val());
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


    $('.result').children('.price').html( TotalSkinali );
    return false;
    };

});