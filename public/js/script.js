$(document).ready(function(){

// dropdowns
$('.dropdown-icon').click(function(){
    $(this).siblings('.dropdown-content-expand').fadeToggle(150);
})
// dropdowns end

//top-menu 
$('.top-menu__btn').click(function(){
    $(this).fadeOut(150);
    $('.top-menu__btn_close').delay(150).fadeIn(150);
    $('.top-menu__links').fadeIn(150);
    $('body').css('overflow', 'hidden');
});
$('.top-menu__btn_close').click(function(){
    $(this).fadeOut(150);
    $('.top-menu__btn').delay(150).fadeIn(150);
    $('.top-menu__links').fadeOut(150);
    $('body').css('overflow', 'auto');
});
//top-menu end

// input mask
function applyMask() {
    jQuery(function($){
         $(".input-phone").mask("+7 (999) 999-99-99");
         $(".input-pin").mask("999 999 999 999");
         $(".input-card").mask("9999 9999 9999 9999");
         $(".input-card-period").mask("99/99");
         $(".input-card-cvv").mask("999");
         $(".input-date1").mask("99.99.9999");
    });
}
applyMask();
// input mask end

// lamguage switcher
$('.switch-language__current').click(function(){
    $('.switch-language__dropdown').fadeToggle(150);
})
$('.switch-language-choose').click(function(){
    $('.switch-language__dropdown').fadeOut(150);
})
// language switcher end

// form switcher
$('.formSwitcher').click(function(){

    var switchform = '.' + $(this).attr('switchform');
    var formDocument = $(this).attr('formDocument');

    $('.load-form').hide().empty();
    $(switchform).load(formDocument);
    $(switchform).delay(400).fadeIn(400);

    $('.formSwitcher').removeClass('formSwitcher_current');
    $(this).addClass('formSwitcher_current')


    applyMask();

});
// form switcher end

// form switcher
$('.formSwitcherNoAjax').click(function(){

    var switchtab = '.' + $(this).attr('switchtab');

    $('.tabs__content').fadeOut(300);
    $(switchtab).delay(800).fadeIn(400);

    $('.tabs__tab').removeClass('tabs__tab_current');
    $(this).addClass('tabs__tab_current')

});
// form switcher end


// HOMEPAGE

// banner slider
function homeBannerSlider() {
    setInterval(function(){
       $(".home-banner__insurance").fadeToggle(400);
    }, 6000);
}
setTimeout(homeBannerSlider, 1000);
// banner slider end

// home - card-to-card transfer
$('.home__transfer__form__row1 input').focus(function(){
    $('.home__transfer__form__row2, .home__transfer__form__row3').fadeIn(300);
})
// home - card-to-card transfer end

// HOMEPAGE END

	var passvisible = false;
	$('.pass-eye').click(function () {
		if(passvisible === false) {
            $(this).css('opacity', '1');
            $('#input-password').attr('type', 'text');
            passvisible = true;
        } else {
        	$(this).css('opacity', '.5');
            $('#input-password').attr('type', 'password');
            passvisible = false;
        };
     })




    $(document).scroll(function() {
      var y = $(this).scrollTop();
      if (y > 1300) {
        $('.support-btn, .go-up').fadeIn();
      } else {
        $('.support-btn, .go-up').fadeOut();
      }
    });

    $(".support-btn").click(function(){
        $(this).fadeOut(300);
        $(".support-icon_close").fadeIn(300);
        $(".support__wrap").fadeIn(300);
        $('body').css({"overflow": "hidden"});
    })
    $(".support-icon_close").click(function(){
        $(this).fadeOut(300);
        $(".support-btn").fadeIn(300);
        $(".support__wrap").fadeOut(300);
        $('body').css({"overflow": "auto"});
    })

    $(".support__action__call, .support__action__webcam").click(function(){
        $(".support__call").fadeIn(300);
    })
    $(".support__call__close").click(function(){
        $(".support__call").fadeOut(300);
    })

    $(".calc-icon").click(function(){
        $(this).fadeOut(300);
        $(".calc-icon_close").fadeIn(300);
        $(".loan-calc__wrap").fadeIn(300);
        $('body').css({"overflow": "hidden"});
    })

    $(".calc-icon_close").click(function(){
        $(this).fadeOut(300);
        $(".calc-icon").fadeIn(300);
        $(".loan-calc__wrap").fadeOut(300);
        $('body').css({"overflow": "auto"});
    })



    var duration = 300;
    jQuery('.go-up').click(function(event) {
        event.preventDefault();
        jQuery('html, body').animate({scrollTop: 0}, duration);
        return false;
    })


    // handle links with @href started with '#' only
    $(document).on('click', 'a[href^="#"]', function(e) {
        // target element id
        var id = $(this).attr('href');

        // target element
        var $id = $(id);
        if ($id.length === 0) {
            return;
        }

        // prevent standard hash navigation (avoid blinking in IE)
        e.preventDefault();

        // top position relative to the document
        var pos = $(id).offset().top;

        // animated top scrolling
        $('body, html').animate({scrollTop: pos});
    });




    $('.loan-order__title .btn').click(function(){
        var currentLoan = $(this).text();
        $(this).addClass('service-title__cat_current');
        $(this).siblings().removeClass('service-title__cat_current');
        $('.service-title__current-cat').text("Оставить заявку на: " + currentLoan);
        $('.service-title__current-cat').animate({bottom: "+=5px"}, 100);
        $('.service-title__current-cat').animate({bottom: "-=10px"}, 100);
        $('.service-title__current-cat').animate({bottom: "+=7px"}, 80);
        $('.service-title__current-cat').animate({bottom: "-=5px"}, 80);
        $('.service-title__current-cat').animate({bottom: "+=3px"}, 80);
    })

    $('.loan-compare__title .btn').click(function(){
        var currentLoan = $(this).text();
        $(this).addClass('service-title__cat_current');
        $(this).siblings().removeClass('service-title__cat_current');
        $('.service-title__current-cat').text("Все предложения от банков по услуге: " + currentLoan);
        $('.service-title__current-cat').animate({bottom: "+=5px"}, 100);
        $('.service-title__current-cat').animate({bottom: "-=10px"}, 100);
        $('.service-title__current-cat').animate({bottom: "+=7px"}, 80);
        $('.service-title__current-cat').animate({bottom: "-=5px"}, 80);
        $('.service-title__current-cat').animate({bottom: "+=3px"}, 80);
    })


    $('.check-status__submit').click(function(){
        $('.check-status__result').delay(100).slideDown(300);
        $('.check-status__brief').delay(100).fadeOut(300);
    });



    $(".insurance__brand").change(function() {
         if($('.insurance__brand option:selected')) {
            
            var boi = $('.insurance__brand option:selected');
            var boiNum = boi.attr('brand-num');
            var modelClass = '.insurance__brand' + boiNum + '__models';

            $('.insurance__brand__models').hide();
            $(modelClass).show();

        }
    }); 














// LOAN

// steps
$('.loan-landing__howtoget__step1__btn').click(function(){
    $(this).addClass('loan-landing__howtoget__step__btn_active');
    $('.loan-landing__howtoget__step2__btn, .loan-landing__howtoget__step3__btn').removeClass('loan-landing__howtoget__step__btn_active');
    $('.loan-landing__howtoget__step2, .loan-landing__howtoget__step3').fadeOut(200);
    $('.loan-landing__howtoget__step1').delay(200).fadeIn(200);
})
$('.loan-landing__howtoget__step2__btn').click(function(){
    $(this).addClass('loan-landing__howtoget__step__btn_active');
    $('.loan-landing__howtoget__step1__btn, .loan-landing__howtoget__step3__btn').removeClass('loan-landing__howtoget__step__btn_active');
    $('.loan-landing__howtoget__step1, .loan-landing__howtoget__step3').fadeOut(200);
    $('.loan-landing__howtoget__step2').delay(200).fadeIn(200);
})
$('.loan-landing__howtoget__step3__btn').click(function(){
    $(this).addClass('loan-landing__howtoget__step__btn_active');
    $('.loan-landing__howtoget__step1__btn, .loan-landing__howtoget__step2__btn').removeClass('loan-landing__howtoget__step__btn_active');
    $('.loan-landing__howtoget__step1, .loan-landing__howtoget__step2').fadeOut(200);
    $('.loan-landing__howtoget__step3').delay(200).fadeIn(200);
})
// steps end

// LOAN END

// INSURANCE

// steps
$('.insurance-landing__howtoget__step1__btn').click(function(){
    $(this).addClass('insurance-landing__howtoget__step__btn_active');
    $('.insurance-landing__howtoget__step2__btn').removeClass('insurance-landing__howtoget__step__btn_active');
    $('.insurance-landing__howtoget__step2').fadeOut(200);
    $('.insurance-landing__howtoget__step1').delay(200).fadeIn(200);
})
$('.insurance-landing__howtoget__step2__btn').click(function(){
    $(this).addClass('insurance-landing__howtoget__step__btn_active');
    $('.insurance-landing__howtoget__step1__btn').removeClass('insurance-landing__howtoget__step__btn_active');
    $('.insurance-landing__howtoget__step1').fadeOut(200);
    $('.insurance-landing__howtoget__step2').delay(200).fadeIn(200);
})
// steps end

// INSURANCE END


// section menu
$('.section-menu__menu > ul > li').click(function(){
    $(this).children('.section-menu__sub-menu').slideToggle(100);
});

function menuHover() {
    if (window.matchMedia('(min-width: 768px)').matches) {
       $('.section-menu__menu > ul > li').hover(function(){
            $(this).children('.section-menu__sub-menu').delay(100).slideToggle(150);
        });
    }
}
menuHover();
// section menu end


// store
var storePrice = $('.loanSum').val();
var storeLoanPeriod = $('.loanPeriod').val();
var loanPrice = storePrice / storeLoanPeriod;
$('.loanPrice').text(Math.ceil(loanPrice));

$('.loanPeriod').change(function(){
    var storePrice = $('.loanSum').val();
    var storeLoanPeriod = $('.loanPeriod').val();
    var loanPrice = storePrice / storeLoanPeriod;
    $('.loanPrice').text(Math.ceil(loanPrice));
});
// store end

});