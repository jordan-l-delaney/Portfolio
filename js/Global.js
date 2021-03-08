$( document ).ready(function() {

  window.addEventListener("scroll", function () {
      console.log(window.pageYOffset);
      if (window.pageYOffset > 500) {
        //do the magic
      } else {
        //go back to original state
      }
  }, false);
      
});
