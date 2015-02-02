/**
* Category controller: 
*   - Toggles the search
**/

P.search = {
  config:{
    buttonSelector: ".mag-glass",
    closeButton: ".search-close-btn"
  },
    
  init: function($el){
    this.el = $el;
    var isVisible = false;
    var currentText;
    
    this.el.find(this.config.buttonSelector).click(function(event){
    //$(".mag-glass").click(function(event){
      $(".pre-search").toggle();
      $(".searching").toggle();
      currentText = $(".search-field").val();
      $(".search-field").focus();
      $(".search-field").val('');
      
      $(".search-field").focus(function() {
        currentText = $(".search-field").val();
        $(".search-field").val(''); 
      });
      $(".search-field").blur(function() {
        if($(".search-field").val()=='')$(".search-field").val(currentText); 
      });
      event.preventDefault();
    });
    
    this.el.find(this.config.closeButton).click(function(event){
      $(".pre-search").toggle();
      $(".searching").toggle();
      
      event.preventDefault();
    });
  }
}