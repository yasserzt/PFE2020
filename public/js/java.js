function checkWidth(init){
  /*If browser resized, check width again */
  if ($(window).width() < 1000) {
    $('.stacktable ').addClass('box');
    $('.stacktable .st-key').addClass('has-text-weight-bold');

  }
  else {
    if (!init) {
      $('.stacktable').removeClass('box');
      $('.stacktable .st-key').removeClass('has-text-weight-bold');

    }
  }
}
$(document).ready(function() {
  checkWidth(true);

  $(window).resize(function() {
    checkWidth(false);
  });

});
