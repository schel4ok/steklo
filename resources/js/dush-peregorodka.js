
// душевая перегородка calculator
$(document).ready(function () {


  $('input[name^="size"]').change(function () {
    $('.result').children('.razmer').html($('input[name="size_b"]').val() +'x'+ $('input[name="size_h"]').val());
    calculation();
  });

  $('select.glass').change(function () {
    $('.result').children('.glass').html($(this).val());
    calculation();
  });

  $('select.furnitura').change(function () {
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


  $('select.dostavka').change(function () {
    $('.result').children('.dostavka').html($(this).val());
    calculation();
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
    glass = 0;
    furnitura = 0;
    montazh = 0;
    dostavka = 0;
    zamkad = 0;
    b = $('input[name="size_b"]').val();
    h = $('input[name="size_h"]').val();

    var Size  = (b*h)/1000000;

    var GlassPrice  = $('select.glass option:selected').data('price') * Size;
    var FurnituraPrice  =  $('select.furnitura option:selected').data('price') * 1;
 //   var VerhTrubaPrice  = $("input[name='verh_truba']").is(":checked") ? $("input[name='verh_truba']:checked").data('price') * 1 : 0; 
 //   var UplotniteliPrice  = $("input[name='uplotniteli']").is(":checked") ? $("input[name='uplotniteli']:checked").data('price') * 1 : 0; 
 //   var MontazhPrice  = $("input[name='montazh']").is(":checked") ? $("input[name='montazh']:checked").data('price') * 1 : 0; 
 //   var DostavkaPrice  =  $('select.dostavka option:selected').data('price') * 1;
 //   var ZamkadPrice  =  $('input[name="zamkad"]').val() * 30; // 30 руб/км за МКАД

    var total = GlassPrice + FurnituraPrice;


    $('.result').children('.GlassPrice').html( GlassPrice );
    $('.result').children('.FurnituraPrice').html( FurnituraPrice );
  //  $('.result').children('.VerhTrubaPrice').html( VerhTrubaPrice );
  //  $('.result').children('.UplotniteliPrice').html( UplotniteliPrice );
  //  $('.result').children('.MontazhPrice').html( MontazhPrice );
  //  $('.result').children('.DostavkaPrice').html( DostavkaPrice );
  //  $('.result').children('.ZamkadPrice').html( ZamkadPrice );

    $('.result').children('.price').html( total );
    return false;
    };

});