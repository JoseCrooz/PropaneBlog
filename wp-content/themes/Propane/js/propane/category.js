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