// sauna calculator
$(document).ready(function () {

  $('input[name="door_size_radio"]').change(function () {
    if ($(this).val() == 'standard') {
        $('.standard_sizes').show();
        $('.special_sizes').hide();
        $('.standard_sizes').attr("required", true);
        $('.special_sizes').attr("required", false);
        $('.result > .razmer').html($('.standard_sizes option:selected').html());
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


  $('.standard_sizes').change(function () {
    $('.result').children('.razmer').html($('.standard_sizes option:selected').val());
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

  $('.glass').change(function () {
    $('.result').children('.glass').html($(this).val());
    calculation();
  });

  $('.korobka').change(function () {
    $('.result').children('.korobka').html($(this).val());
    calculation();
  });

  $('.petli').change(function () {
    $('.result').children('.petli').html($(this).val());
    calculation();
  });

  $('.dekor').change(function () {
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
    {var BasePrice  =  $(".standard_sizes option:selected").data('price') * 1;}
  else 
    {var BasePrice  =  $('input[name="door_size_b"]').val() * $('input[name="door_size_h"]').val() * 6500 / 1000000;}

    var GlassPrice  = $(".glass option:selected").data('price') * 1;
    var DerevoPrice = $(".korobka option:selected").data('price') * 1;
    var PetliPrice  = $(".petli option:selected").data('price') * 1;
    var DekorPrice  = $(".dekor option:selected").data('price') * 1;
    var DostavkaPrice  = $("input[name='dostavka']").is(":checked") ? $("input[name='dostavka']:checked").data('price') * 1 : 0; 
    var MontazhPrice  = $("input[name='montazh']").is(":checked") ? $("input[name='montazh']:checked").data('price') * 1 : 0; 

    var total = BasePrice + GlassPrice + DerevoPrice + PetliPrice + DekorPrice + DostavkaPrice + MontazhPrice;
    $('.result').children('.price').html( total );
    return false;
    };
});