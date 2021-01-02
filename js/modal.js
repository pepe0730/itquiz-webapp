$(function() {
  $('#modal-btn-1').click(function() {
    $('#modal-wrapper-1').fadeIn();
  });
  $(document).on('click', '#modal-close-one', function(){
    $('#modal-wrapper-1').fadeOut();
  });
  /*起動しなかった。
  $('#modal-close-one').click(function() {
    $('#modal-wrapper-1').fadeOut();
  });*/
});

