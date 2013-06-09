(function($){
  var woozle_keys = [73, 68, 68, 81, 68];
  var woozle_index = 0;

  $(document).keydown(function(e){
      if(e.keyCode === woozle_keys[woozle_index++]){
         if(woozle_index === woozle_keys.length){
            $(document).unbind('keydown', arguments.callee);
            document.getElementById('meow').play();
            $('#woozle').animate({"bottom" : "0","left" : "0", 'display':'block' }, 300, function(){
              $(this).delay(2000).animate({"bottom" : "-571px", "left" : "-410px", 'display' : 'none'}, 300);
            });
         }
      }else{
          woozle_index = 0;
      }
  });
})(jQuery);
