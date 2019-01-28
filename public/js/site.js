$(function(){

  function rate_tax(){
    var date = $('.count_date').val().replace(/-/g, '');
    console.log(date);
  }

  var tax = 5;
  var date = 5;

  $('.start_count').on('click', function(e){
    e.preventDefault();
    var date = $('.count_date').val().replace(/-/g, '');
    console.log(date);

    var tax_excluded = $('.count').val();
    tax_excluded= (tax_excluded * (100+tax)/100);
    $('.counted').val(tax_excluded);
  });

})
