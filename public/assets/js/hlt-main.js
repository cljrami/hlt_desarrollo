/*--------------------------------------------------------------
## PRELOADER
----------------------------------------------------------------*/

$(window).on('load', function (event) {
		$('#preloader').delay(500).fadeOut(500);
	});

    const filter = document.querySelector("#turbulence");
    let frames = 1;
    let rad = Math.PI / 180;
    let bfx, bfy;

    function freqAnimation() {
        frames += .2

        bfx = 0.03;
        bfy = 0.03;

        bfx += 0.005 * Math.cos(frames * rad);
        bfy += 0.005 * Math.sin(frames * rad);

        bf = bfx.toString() + " " + bfy.toString();
        filter.setAttributeNS(null, "baseFrequency", bf);

        window.requestAnimationFrame(freqAnimation);
    }

    window.requestAnimationFrame(freqAnimation);

/*--------------------------------------------------------------
## MENU
----------------------------------------------------------------*/
const body = document.body;

const scrollUp = "scroll-up";
const scrollDown = "scroll-down";
let lastScroll = 0;


window.addEventListener("scroll", () => {
  const currentScroll = window.pageYOffset;
  if (currentScroll <= 0) {
    body.classList.remove(scrollUp);
    return;
  }

  if (currentScroll > lastScroll && !body.classList.contains(scrollDown)) {
    // down
    body.classList.remove(scrollUp);
    body.classList.add(scrollDown);
  } else if (
    currentScroll < lastScroll &&
    body.classList.contains(scrollDown)
  ) {
    // up
    body.classList.remove(scrollDown);
    body.classList.add(scrollUp);
  }
  lastScroll = currentScroll;
});

    /*--------------------------------------------------------------
    2. ANIMACION CURSOR
  --------------------------------------------------------------*/
  jQuery(document).ready(function ($) {
    function Cursor(cursor, pointer) {
      cursor.css({
        opacity: 1
      });
      pointer.css({
        opacity: 1
      });
      $(document).bind('mousemove', function (e) {
        if ($(e.target).hasClass('link') || $(e.target).closest('.link').length > 0) {
          $(cursor).addClass('zoom');
        } else {
          $(cursor).removeClass('zoom');
        }
        cursor.css({
          left: e.pageX,
          top: e.pageY
        });
        pointer.css({
          left: e.pageX,
          top: e.pageY
        });
      });
    }
    function destroyCursor(cursor, pointer) {
      cursor.css('opacity', '0');
      pointer.css('opacity', '0');
      //$(document).unbind('mousemove');
    }
    $(document).mouseleave(function () {
      destroyCursor($('#cursor'), $('#pointer'));
    });
    $(document).mouseenter(function () {
      Cursor($('#cursor'), $('#pointer'));
    });
    $(document).on('click', function (e) {
      $('#cursor').css('animation', 'cursorClick 700ms');
      setTimeout(()=>{$('#cursor').css('animation', '')},700);
    });
  });


  /*--------------------------------------------------------------
    4. SWIPER HISTORIAS PORTADA
  --------------------------------------------------------------*/
  var swiper = new Swiper(".nuevas-historias", {

    pagination: {
        el: ".swiper-pagination"
      },
       keyboard: {
          enabled: true,
        },
        breakpoints: {
          340: {
            slidesPerView: 1,
            spaceBetween: 20,
          },
          768: {
            slidesPerView: 2,
            spaceBetween: 40,
          },
          1024: {
            slidesPerView: 2,
            spaceBetween: 50,
          },
        },
  })





  /*--------------------------------------------------------------
    4. SWIPER TESTIMONIOS
  --------------------------------------------------------------*/
  var swiper = new Swiper(".testimonios", {


    pagination: {
        el: ".swiper-pagination"
      },

      keyboard: {
          enabled: true,
        },
        breakpoints: {
          340: {
            slidesPerView: 1,
            spaceBetween: 20,
          },
          768: {
            slidesPerView: 1,
            spaceBetween: 40,
          },
          1024: {
            slidesPerView: 1,
            spaceBetween: 50,
          },
        },

  });
  /*--------------------------------------------------------------
    4. SWIPER DESTACADAS
  --------------------------------------------------------------*/
  var swiper = new Swiper(".destacadas", {
    slidesPerView: 1,
    centeredSlides: false,
    spaceBetween: 10,
    grabCursor: false,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
        340: {
          slidesPerView: 1,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 40,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 20,
        },
      },

  });


 /*--------------------------------------------------------------
    4. SWIPER TEAM HOME
  --------------------------------------------------------------*/
  var swiper = new Swiper(".team", {
    slidesPerView: 4,
    spaceBetween: 30,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
        340: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 40,
        },
        1024: {
          slidesPerView: 4,
          spaceBetween: 20,
        },
      },

  });

 /*--------------------------------------------------------------
    4. SWIPER SALUD MENTAL
  --------------------------------------------------------------*/
  var swiper = new Swiper(".saludmental", {
    slidesPerView: 4,
    spaceBetween: 30,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
        340: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 40,
        },
        1024: {
          slidesPerView: 4,
          spaceBetween: 20,
        },
      },

  });

/*--------------------------------------------------------------
    4. SWIPER MERCADO
  --------------------------------------------------------------*/
  var swiper = new Swiper(".mercado", {
    slidesPerView: 4,
    spaceBetween: 30,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
        340: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 40,
        },
        1024: {
          slidesPerView: 4,
          spaceBetween: 20,
        },
      },

  });

  /*--------------------------------------------------------------
    4. SWIPER AUSPICIADORES
  --------------------------------------------------------------*/
  var swiper = new Swiper(".auspicios", {
    slidesPerView: 1,
    spaceBetween: 30,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
        340: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 40,
        },
        1024: {
          slidesPerView: 6,
          spaceBetween: 20,
        },
      },

  });


/*--------------------------------------------------------------
    TinyMCE
  --------------------------------------------------------------*/

    //  document.addEventListener('livewire:load', function () {
    //     Livewire.on('initializeTinymce', function () {
    //         tinymce.init({
    //             selector: '#tinymce-editor',
    //             // Configuración personalizada de TinyMCE
    //         });
    //     });
    // });

 /*--------------------------------------------------------------
 COUNTER UP
  --------------------------------------------------------------*/

    $(document).ready(function() {
        $('.counter').counterUp({
            delay: 10, // Retardo en milisegundos
            time: 1000 // Duración en milisegundos
        });
    });

		//Scroll back to top

		var progressPath = document.querySelector('.progress-wrap path');
		var pathLength = progressPath.getTotalLength();
		progressPath.style.transition = progressPath.style.WebkitTransition = 'none';
		progressPath.style.strokeDasharray = pathLength + ' ' + pathLength;
		progressPath.style.strokeDashoffset = pathLength;
		progressPath.getBoundingClientRect();
		progressPath.style.transition = progressPath.style.WebkitTransition = 'stroke-dashoffset 10ms linear';
		var updateProgress = function () {
			var scroll = $(window).scrollTop();
			var height = $(document).height() - $(window).height();
			var progress = pathLength - (scroll * pathLength / height);
			progressPath.style.strokeDashoffset = progress;
		}
		updateProgress();
		$(window).scroll(updateProgress);
		var offset = 50;
		var duration = 550;
		jQuery(window).on('scroll', function() {
			if (jQuery(this).scrollTop() > offset) {
				jQuery('.progress-wrap').addClass('active-progress');
			} else {
				jQuery('.progress-wrap').removeClass('active-progress');
			}
		});
		jQuery('.progress-wrap').on('click', function(event) {
			event.preventDefault();
			jQuery('html, body').animate({scrollTop: 0}, duration);
			return false;
		})

/*--------------------------------------------------------------
## SIDEBAR
----------------------------------------------------------------*/
let arrow = document.querySelectorAll(".arrow");
  for (var i = 0; i < arrow.length; i++) {
    arrow[i].addEventListener("click", (e)=>{
   let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
   arrowParent.classList.toggle("showMenu");
    });
  }
  let sidebar = document.querySelector(".sidebar");
  let sidebarBtn = document.querySelector(".icon-menu");
  console.log(sidebarBtn);
  sidebarBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("close");
  });


  /*--------------------------------------------------------------
    4. SWIPER DESTACADAS
  --------------------------------------------------------------*/
  var swiper = new Swiper(".mis-historias", {
    slidesPerView: 1,
    centeredSlides: false,
    spaceBetween: 10,
    grabCursor: false,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
        340: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 3,
          spaceBetween: 40,
        },
        1024: {
          slidesPerView: 5,
          spaceBetween: 20,
        },
      },

  });

