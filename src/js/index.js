import '../scss/style.scss';
import Swiper from '../../node_modules/swiper';

import $ from 'jquery';
window.jQuery = $;
window.$ = $;

$(document).ready(function(){

  var mySwiper = new Swiper ('.hero-cont', {
    // Optional parameters
    direction: 'vertical',
    loop: true,
    autoplay: {
      delay: 5500,
      disableOnInteraction: false,
    },
  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  
    // And if we need scrollbar
    scrollbar: {
      el: '.swiper-scrollbar',
    },
  });

  var mySwiper = new Swiper ('.news-cont', {
    // Optional parameters
    direction: 'horizontal',
    slidesPerView: 3,
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
  


});
