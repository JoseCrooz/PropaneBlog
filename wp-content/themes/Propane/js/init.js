//-----------------------------------------------------------------------------------------
// Plugin / Controller Initialization

$(document).ready(function() {
  $('[data-controller]').each(function() {
    P[$(this).data('controller')].init($(this));
  });
  
  P.global.init();
  
});