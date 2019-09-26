import '../scss/style.scss';
import Swiper from '../../node_modules/swiper';

import $ from 'jquery';
window.jQuery = $;
window.$ = $;

$(document).ready(function(){

  var mySwiper = new Swiper ('.swiper-container', {
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
  })
  


});
