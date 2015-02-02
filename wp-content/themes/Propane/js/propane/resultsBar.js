/**
* Search results bar controller: 
*   - Handles the close button in the search results bar
**/

P.resultsBar = {
  config:{
    buttonSelector: ".results-bar-btn"
  },
    
  init: function($el){
    this.el = $el;
    var isVisible = false;
    this.el.find(this.config.buttonSelector).click(function(event){
      $(".search-results-bar").slideToggle(400);
      
      event.preventDefault();
    });
  }
}