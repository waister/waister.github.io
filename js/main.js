'use strict'; 
$(window).load(function() { 
    

    //PRELOADER
 $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.

    // PORTFOLIO ISOTOPE
     var $container = $('.isotope_items');
     $container.isotope();

    $('.portfolio_filter ul li').on("click", function(){
        $(".portfolio_filter ul li").removeClass("select-cat");
        $(this).addClass("select-cat");              
        var selector = $(this).attr('data-filter');
        $(".isotope_items").isotope({
            filter: selector,
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false,
            }
    });
        return false;
    });  
    

    
}); // window load end 



$(document).ready(function() {  
    
    
    // WOW JS
    new WOW({ mobile: false }).init();
    
    //SMOOTH SCROLL
    $(document).on("scroll", onScroll);
    $('a[href^="#"]').on('click', function (e) {
        e.preventDefault();
        $(document).off("scroll");
        
        $('a').each(function () {
            $(this).removeClass('active');
             if ($(window).width() < 768) {
                 $('.nav-menu').slideUp();
             }
        });
            
        $(this).addClass('active');
      
        var target = this.hash,
        //menu = target;
        target = $(target);
        $('html, body').stop().animate({
            'scrollTop': target.offset().top-85
        }, 500, 'swing', function () {
            window.location.hash = target.selector;
            $(document).on("scroll", onScroll);
        });
    });
        
        
        function onScroll(event){
    var scrollPos = $(document).scrollTop();
    $('nav ul li a').each(function () {
        var currLink = $(this);
        var refElement = $(currLink.attr("href"));
        if (refElement.position().top-90 <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
            $('nav ul li a').removeClass("active");
            currLink.addClass("active");
        }
        else{
            currLink.removeClass("active");
        }
    });
}
        

    //NAVBAR SHOW - HIDE
    $(window).scroll(function() {               
    var scroll = $(window).scrollTop();
    var homeheight = $(".home").height() -86;           

    if (scroll > homeheight) {                                              
        $("nav").slideDown(100);
        } else {
        $("nav").slideUp(100);
        }
     }); 
    
        
    // RESPONSIVE MENU
$('.responsive').on('click', function (e) {
        $('.nav-menu').slideToggle();
    });
    
    
    // HOME PAGE HEIGHT
     function centerInit() {
        var hometext = $('.home');

        hometext.css({
            "height": $(window).height() + "px"
        });
    }
    centerInit();
    $(window).resize(centerInit);
    
    
    // HOME TYPED JS
     $(function(){
      $(".element").typed({
        strings: ["Waister Nunes", "Android Developer", "Web Developer"],
        typeSpeed: 10,
        loop:true,
        backDelay: 2000
      });
  });
    
    
    // MAGNIFIC POPUP FOR PORTFOLIO PAGE
    $('.link').magnificPopup({
        type:'image',
        gallery:{enabled:true},
        zoom:{enabled: true, duration: 300}
    });
    
    
    
}); // document ready end 



/* Contact Form JS*/
(function($){
   'use strict'; 
   
   $(".contact-form").on('submit', function(e){
        e.preventDefault();
        
        $("#con_submit").val('Enviando...');
        var con_name = $("#con_name").val();
        var con_email = $("#con_email").val();
        var con_message = $("#con_message").val();
        
        var required = 0;
        $(".requie", this).each(function() {
            if ($(this).val() == '')
            {
                $(this).addClass('reqError');
                required += 1;
            }
            else
            {
                if ($(this).hasClass('reqError'))
                {
                    $(this).removeClass('reqError');
                    if (required > 0)
                    {
                        required -= 1;
                    }
                }
            }
        });
        if (required === 0)
        {
            var uri = 'https://appfolio.me/waister/mail.php';
            // $.ajax({
            //     type: "POST",
            //     url: uri,
            //     data: {con_name: con_name, con_email: con_email, con_message: con_message},
            //     success: function(data)
            //     {
            //         $(".contact-form input, .contact-form textarea").val('');
            //         $("#con_submit").val('Mensagem enviada!');
            //         $("#con_submit").addClass("ok");
            //         console.log(data);
            //     }
            // });

            uri += "?con_name=" + con_name;
            uri += "&con_email=" + con_email;
            uri += "&con_message=" + con_message;

            $.getJSON(uri, function(data) {
                $(".contact-form input, .contact-form textarea").val('');
                $("#con_submit").val('Mensagem enviada!');
                $("#con_submit").addClass("ok");
                console.log(data);
            });
        }
        else
        {
            $("#con_submit").val('Preencha todos os campos!');
        }
   });
   $(".requie").keyup(function() {
        $(this).removeClass('reqError');
    });
   
})(jQuery);