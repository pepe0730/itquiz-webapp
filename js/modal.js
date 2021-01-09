$(function() {
  $('#modal-btn-1').click(function() {
    $('#modal-wrapper-1').fadeIn();
  });
  $(document).on('click', '#modal-close-one', function(){
    $('#modal-wrapper-1').fadeOut();
  });
  $('#modal-btn-2').click(function() {
    $('#modal-wrapper-2').fadeIn();
  });
  $(document).on('click', '#modal-close-one', function(){
    $('#modal-wrapper-2').fadeOut();
  });
  $('#modal-btn-3').click(function() {
    $('#modal-wrapper-3').fadeIn();
  });
  $(document).on('click', '#modal-close-one', function(){
    $('#modal-wrapper-3').fadeOut();
  });
});

 