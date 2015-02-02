/**
*   Plugin / Class Namespace
**/
var P = {};
/**
* Category controller: 
*   - Toggles the category nav
**/

P.category = {
  config:{
    buttonSelector: ".category-btn",
    divSelector:".category",
    navSelector:".category-nav-link" 
  },
  
  menuVisible: false,
  myTimer:'',
    
  init: function($el){
    this.el = $el;
    var that = this;
    var menu1 = false;
    var menu2 = false;
    var _touch;
    var windowSize;
    
    if(Modernizr.touch){
      _touch = true;
    }
    else{
      _touch = false;
    }
    
    // handle resize
    $(window).resize(function() {
      if(!_touch){
        if(menu1){
          $('.category-nav-dropdown').slideToggle(200);
          menu1 = false;
        }
        if(menu2){
          $('.category-nav-sm').slideToggle(200);
          menu2 = false;
        }
      }
      windowSize = $(window).width();
    });
    $(window).resize();
    
    // handle orientation change
    $(window).bind( 'orientationchange', function(e){
      if(menu1){
        $('.category-nav-dropdown').toggle();
        menu1 = false;
        that.toggleClasses('add');
      }
      if(menu2){
        $('.category-nav-sm').toggle();
        menu2 = false;
        that.toggleClasses('remove');
      }
    });
    
    // handle hover
    $('.category-nav li').hover(
       function () {
        if(windowSize>950 && !_touch){
          $('ul', this).stop().slideDown(200);
          that.toggleClasses('add');
        }
        event.preventDefault()
       }, 
         function () {
            if(windowSize>950 && !_touch){
              $('ul', this).stop().slideUp(200);
              that.toggleClasses('remove');
            }
          event.preventDefault()
        }
     );
    
    // handle click - large device
    $('.category-nav-link').click(function(){
      if(windowSize>950 && _touch){
        $('.category-nav-dropdown').slideToggle(200,function(){
          if(!menu1){
            menu1 = true;
            that.toggleClasses('add');
          }
          else{
            menu1 = false;
            that.toggleClasses('remove');
          }
        });
      }
      event.preventDefault();
    });
    
    // handle click - small device
    $('.category-nav-link').click(function(){
      if(windowSize<950){
        $(".category-nav-sm").slideToggle(200,function(){
          if(!menu2){
            menu2 = true;
            that.toggleClasses('add');
          }
          else{
            menu2 = false;
            that.toggleClasses('remove');
          }
        });
      }
      event.preventDefault();
    });
    
  },
  
  toggleClasses: function(addRemove){
    if(addRemove==='add'){
      $('.category-nav-link').addClass('category-nav-hover');
      $('.cat-chevron-icon').addClass('cat-chevron-icon-hover');
      $('.cat-chevron-icon').addClass('cat-chevron-icon-hover');
    }
    else{
      $('.category-nav-link').removeClass('category-nav-hover');
      $('.cat-chevron-icon').removeClass('cat-chevron-icon-hover');
      $('.cat-chevron-icon').removeClass('cat-chevron-icon-hover');
    }
  }
}
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
P.global = {
  
  config: {},
  
  init: function() {
    
    this.setupExternalWindows();
    
  },
  
  setupExternalWindows: function() {
    
    //External Windows
    $(".external a").live("click", function() {
      window.open(this.href);
      return false;
    });
    
  }
  
  
};
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
//-----------------------------------------------------------------------------------------
// Plugin / Controller Initialization

$(document).ready(function() {
  $('[data-controller]').each(function() {
    P[$(this).data('controller')].init($(this));
  });
  
  P.global.init();
  
});