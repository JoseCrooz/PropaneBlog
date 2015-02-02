/**
* Gallery controller: 
*   - Handles gallery interaction
**/

P.gallery = {
  config:{
    buttonSelector: ".ngg-gallery-thumbnail"
  },
    
  init: function($el){
    this.el = $el;
    
    this.el.find(this.config.buttonSelector).mouseenter(function(event){
      $('.gallery-hover-img',this).show();
    });
    this.el.find(this.config.buttonSelector).mouseleave(function(event){
      $('.gallery-hover-img',this).hide();
    });
    this.el.find(this.config.buttonSelector).click(function(event){
      console.log(event);
    });
  }
}