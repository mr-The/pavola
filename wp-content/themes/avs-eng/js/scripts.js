$('.slider_init').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    dots: true,
    infinite: true,
    speed: 300,
    arrows: false,
});



/*проекты слайд*/
$('#project').slick({
    infinite: true,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 4,
    arrows:true,
prevArrow: $('.project-prev'),
 nextArrow: $('.project-next'),
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

  /*новости слайд*/
$('#news').slick({
  infinite: true,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 4,
  arrows:true,
prevArrow: $('.news-prev'),
nextArrow: $('.news-next'),
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});
 /*отзывы слайд*/
 $('#rew-slider').slick({
  infinite: true,
  speed: 300,
  slidesToShow: 2,
  slidesToScroll: 2,
  arrows:true,
prevArrow: $('.rew-prev'),
nextArrow: $('.rew-next'),
dots:true,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});
/*top mobi menu*/
$(function(){

    $('.toggle-mnu').on('click' , function (){
        $(this).toggleClass("on");
        $('.top_nav').slideToggle(300, function(){
            if ($(this).css('display') === 'none') {
                $(this).removeAttr('style');
            }
        });

    });

});



/*end menu*/
$(document).ready(function() {
	$('.popup-with-zoom-anim').magnificPopup({
		type: 'inline',

		fixedContentPos: false,
		fixedBgPos: true,

		overflowY: 'auto',

		closeBtnInside: true,
		preloader: false,
		
		midClick: true,
		removalDelay: 300,
		mainClass: 'my-mfp-zoom-in'
	});

});

$(".phone").mask("+7(999) 999-99-99");


$(document).ready(function (e){
$("#order_back_form").on("submit", function (e) {
	e.preventDefault()
	var th = $(this)
	$.ajax({
		url: "mail.php",
		type: "POST",
		data: new FormData(this),
		contentType: false,
		cache: false,
		processData: false,
		success: function (data) {
			$(".success").addClass("visible")
			setTimeout(function () {
				th.trigger("reset")
				$(".success").removeClass("visible")
				$.magnificPopup.close()
			}, 1000)
		},
		error: function () {
			alert("Не пройдена капча")
		},
	})
})

});

$(".form-send").click(function() {
    $( "input[name*='formInfo']" ).val($(this).attr( "title" ));
});


var accordionItems = document.querySelectorAll('.accordion-item');

for (var i = 0; i < accordionItems.length; i++) {
  accordionItems[i].addEventListener('click', function() {
    this.classList.toggle('active');
  });
}
