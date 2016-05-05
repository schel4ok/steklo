
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

