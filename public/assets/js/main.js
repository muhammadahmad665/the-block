$(window).scroll(function(){

            if($(window).scrollTop())
            {
                $(".for-stick").addClass("black");
                $(".top-header").addClass("black2");
            }
            else
            {
                $(".for-stick").removeClass("black");
                $(".top-header").removeClass("black2");
            }   
            
        });

          AOS.init({
            duration: 2200,
          });
          // --------------Hero main-------------------
          var swiper = new Swiper(".mySwiper-heromain", {
      

      
            pagination: {
              el: ".swiper-pagination-hero-slider",
              clickable: true,
            },
            autoplay: {
          delay: 5000,
        },
            
             
          });
      
// ---------------hero brands slider------------------------------------
var swiper = new Swiper(".mySwiper2", {
      

      
      // pagination: {
      //   el: ".swiper-pagination",
      //   clickable: true,
      // },
      autoplay: {
    delay: 2000,
  },
      breakpoints: {
        360: {
          slidesPerView: 1,
           centeredSlides: true
        },
        576: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 4,
          spaceBetween: 40,
        },
        1024: {
          slidesPerView: 5,
          spaceBetween: 50,
        },
      },
       
    });


// --------------Hero video slider------------------------------------
  


var swiper = new Swiper(".mySwiper", {
      spaceBetween: 80,
      pagination: {
        el: ".swiper-pagination",
         clickable: true
      },


    });

// -----------------------------------
 var swipercat = new Swiper(".mySwipercata", {
      
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
  //     autoplay: {
  //   delay: 2000,
  // },
      breakpoints: {
        360: {
          slidesPerView: 1,
           centeredSlides: true
        },
        576: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 3,
          spaceBetween: 40,
        },
        1200: {
          slidesPerView: 4,
          spaceBetween: 20,
        },
        1360: {
          slidesPerView: 5,
          spaceBetween: 20,
        },
      },
    });

 // -----------------------------------
 var swiperreview = new Swiper(".mySwiperreview", {
      
      navigation: {
        nextEl: "#button-next-bussiness",
        prevEl: "#button-prev-bussiness",
      },
  //     autoplay: {
  //   delay: 2000,
  // },
      breakpoints: {
        360: {
          slidesPerView: 1,
           centeredSlides: true
        },
        576: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 3,
          spaceBetween: 40,
        },
        1200: {
          slidesPerView: 4,
          spaceBetween: 20,
        },
        1360: {
          slidesPerView: 5,
          spaceBetween: 20,
        },
      },
    });

  // -----------------------------------
 var swiperreview = new Swiper(".mySwipertrending", {
      
      navigation: {
        nextEl: "#button-next-trending",
        prevEl: "#button-prev-trending",
      },
  //     autoplay: {
  //   delay: 2000,
  // },
      breakpoints: {
        360: {
          slidesPerView: 1,
           centeredSlides: true
        },
        576: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 3,
          spaceBetween: 40,
        },
        1200: {
          slidesPerView: 4,
          spaceBetween: 20,
        },
        1360: {
          slidesPerView: 5,
          spaceBetween: 20,
        },
      },
    });
 // ------Back to Top------
         const toTop = document.querySelector(".to-top");

    window.addEventListener("scroll", () => {
    if (window.pageYOffset > 100) {
    toTop.classList.add("active");
  } else {
    toTop.classList.remove("active");
  }
})

// --------SinglesliderMenu-------------------
  var swiperfullslider = new Swiper(".mySwiperfullslider", {
      pagination: {
        el: ".swiper-pagination",
        clickable: true
        
      },
    });

  // Select increment and decrement buttons
const incrementCount = document.getElementById("increment-count");
const decrementCount = document.getElementById("decrement-count");

// Select total count
const totalCount = document.getElementById("total-count");

// Variable to track count
var count = 0;

// Display initial count value
totalCount.innerHTML = count;

// Function to increment count
const handleIncrement = () => {
  count++;
  totalCount.innerHTML = count;
};

// Function to decrement count
const handleDecrement = () => {
  count--;
  totalCount.innerHTML = count;
};

// Add click event to buttons
incrementCount.addEventListener("click", handleIncrement);
decrementCount.addEventListener("click", handleDecrement);
// ---------picture input-----------
$("input[type='image']").click(function() {
    $("input[id='img-show-click']").click();
});
// -------Password eye------------
const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#id_password');

  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});
  const togglePassword2 = document.querySelector('#togglePassword2');
  const password2 = document.querySelector('#id_password2');

  togglePassword2.addEventListener('click', function (e) {
    // toggle the type attribute
    const types = password2.getAttribute('type') === 'password' ? 'text' : 'password';
    password2.setAttribute('type', types);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});