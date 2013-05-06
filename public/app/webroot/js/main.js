(function($){
  $(window).load(function(){
    $('#content-border').height($('#content_row').outerHeight(true));
    $('#header_image').height($('#header_row').outerHeight(true));
    console.log($('#header_image').outerHeight(true));
    $(window).resize(function(){
        $('#content-border').height($('#content_row').outerHeight(true));
        $('#header_image').height($('#header_row').outerHeight(true));
    });
  });
})(jQuery);

