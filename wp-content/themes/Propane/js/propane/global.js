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