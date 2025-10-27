window.addEventListener("load", () => {
  let main_header = document.querySelector(".main-header");
 
  var swiper = new Swiper(".mySwiper", {
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
   var swiper = new Swiper(".shegeftSwiper", {
      slidesPerView: 1,
      spaceBetween: 2,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
      breakpoints: {
        640: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 3,
          spaceBetween: 5,
        },
        1024: {
          slidesPerView: 4,
          spaceBetween: 10,
        },
      },
    });
   var swiper = new Swiper(".poorSwiper", {
      slidesPerView: 1,
      spaceBetween: 2,
      autoHeight: true,
      autoplay: {
        delay: 500,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
      breakpoints: {
        640: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 3,
          spaceBetween: 5,
        },
        1024: {
          slidesPerView: 4,
          spaceBetween: 10,
        },
      },
    });
  let menu = document.querySelector(".menu");
  menu.addEventListener("click", () => {
    menu.classList.toggle("open");
    main_header.classList.toggle("active");

  });
  window.addEventListener("scroll",()=>{

    
    if(window.scrollY > 200){
        console.log(window.scrollY );
        main_header.classList.add("scroll");
    }else{
      main_header.classList.remove("scroll");
    }
  })


















})