import '../scss/style.scss';
import Swiper from '../../node_modules/swiper';
import lightbox from '../../node_modules/lightbox2';

import $ from 'jquery';
window.jQuery = $;
window.$ = $;

$(document).ready(function(){

  var mySwiper = new Swiper ('.hero-cont', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    autoplay: {
      delay: 5500,
      disableOnInteraction: false,
    },
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    }
  });

  var mySwiper = new Swiper ('.news-cont', {
    // Optional parameters
    direction: 'horizontal',
    slidesPerView: 1,
    spaceBetween: 20,
    
    // If we need pagination
    pagination: {
      el: '.news-pagination',
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.news-button__next',
      prevEl: '.news-button__prev',
    },

    breakpoints: {
      1000: {
        slidesPerView: 3,
      }
    }
  });

  var mySwiper = new Swiper ('.sponsors-cont', {
    // Optional parameters
    direction: 'horizontal',
    slidesPerView: 1,
    spaceBetween: 20,
    loop: true,
    autoplay: {
      delay: 5500,
      disableOnInteraction: false,
    },
  });

  lightbox.option({
    'albumLabel': ""
  })


  // sticky menu
  window.onscroll = function() {myFunction()};

  var header = document.getElementById("header");
  var sticky = header.offsetTop;

  function myFunction() {
    if (window.pageYOffset > 50) {
      header.classList.add("sticky");
    } else {
      header.classList.remove("sticky");
    }
  }

  // mobile menu 
  $('.burger').on('click', function(){
    $('html').addClass('open');
  });

  $('.close-btn').on('click', function(){
    $('html').removeClass('open');
  });


  $('.header-navigation__item--hasSub').on('click', function(){
    $(this).find('.header-navigation__subMenu').slideToggle('fast');
  });

});
