(function($){
  var woozle_keys = [73, 68, 68, 81, 68];
  var woozle_index = 0;

  $(document).keydown(function(e){
      if(e.keyCode === woozle_keys[woozle_index++]){
         if(woozle_index === woozle_keys.length){
            $(document).unbind('keydown', arguments.callee);
            var woozle_image = $('<img id="woozle" src="/img/ozy_tongue.png" style="position: fixed; bottom: -571px; left: -410px;" />');
            $('body').append(woozle_image);
            $('#woozle').animate({"bottom" : "0","left" : "0", }, 300, function(){
              $(this).delay(1000).animate({"bottom" : "-571px", "left" : "-410px"}, 300);
            });
            woozle_index = 0;
         }
      }else{
          woozle_index = 0;
      }
  });
})(jQuery);
