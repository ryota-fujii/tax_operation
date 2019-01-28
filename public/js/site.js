$(function(){

  function rate_tax(tax, date){
    var last_registed = 0;
    $('.registed').each(function(i){
      var date_registed = $(this).children('.date_registed').html().replace(/-/g, '');
      var rate_registed = $(this).children('.rate_registed').html().replace(/%/g, '');

        if ((date_registed < date) && last_registed < date_registed){
          last_registed = date_registed;
          tax = rate_registed;
        }
    })
    return tax;
  }

  var tax = 0;

  $('.start_count').on('click', function(e){
    e.preventDefault();
    var date = $('.count_date').val().replace(/-/g, '');
    var tax_excluded = $('.count').val();
    tax = rate_tax(tax, date);
    tax_excluded= (tax_excluded * (100+tax)/100);
    $('.counted').val(tax_excluded);
  });

})
