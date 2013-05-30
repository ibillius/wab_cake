(function($){
  $(window).load(function(){
    wab_resize();
    $(window).resize(function(){
        wab_resize();
    });
  });
  
  function wab_resize(){
    header_height = $('#header_row').outerHeight(true);
    content_height = $('#content_row').outerHeight(true);
    $('#content-border').height(content_height);
    $('#header_image').height(header_height);
    $('#footer_image').height(header_height);
    $('.texture_image').height((header_height*2)+content_height);
  }
})(jQuery);

