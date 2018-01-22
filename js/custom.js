(function($) {

  $(function(){
$("#addClass1").click(function () {
          $('#qnimate').addClass('popup-box-on');
            });
          
            $("#removeClass").click(function () {
          $('#qnimate').removeClass('popup-box-on');
            });
  })

  $(function(){
$("#addClass2").click(function () {
          $('#qnimate').addClass('popup-box-on');
            });
          
            $("#removeClass").click(function () {
          $('#qnimate').removeClass('popup-box-on');
            });
  })

$('.nav a').on('click', function(){
    $('.navbar-toggle').click() //bootstrap 3.x by Richard
});

//menu script//

function scrollTo(element) {
    if (element.length > 0) {
        var top = element.offset().top;
        var $menu = jQuery(".navig");
        var scrollTo = top - ($menu.css("position") === "fixed" ? $menu.height() : $menu.height() * 2);

        jQuery('html,body').animate({scrollTop: scrollTo}, 1000);
    }
}

// jQuery(document).on("click", ".navig a[href*=#]", function(e){     
//     if (this.pathname === location.pathname) {
//         e.preventDefault();
//         scrollTo(jQuery(this.hash + "_"));
//     }
// });

jQuery(function() {
    if (location.hash) {
        scroll(0,0);
        setTimeout(function() { scroll(0,0); }, 100) ;
        setTimeout(function() { scrollTo(jQuery(location.hash + "_")); }, 200);
    }
});


jQuery(function (jQuery) {
    var scrollingStartDistance = jQuery(".navig").offset().top;

    jQuery(document).scroll(function () {
        var scrollTop = jQuery(document).scrollTop();
        
        jQuery(".navig").toggleClass("scrolling", scrollTop > scrollingStartDistance);
    });
});

window.location.href.substr(0, window.location.href.indexOf('#'))


})( jQuery );
