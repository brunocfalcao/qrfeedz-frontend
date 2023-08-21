/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';

import.meta.glob([
    '../images/**'
]);

// https://animxyz.com/docs
import '@animxyz/core'

// https://swiperjs.com/get-started
import Swiper from 'swiper/bundle'
import 'swiper/css/bundle'

var swiperContainer = document.querySelector('.main-swiper');

var swiper = new Swiper(".main-swiper", {
    direction: "vertical",
    mousewheel: false,
    allowTouchMove: false,  // Disable swiping by touch
    simulateTouch: false,   // Disable simulated touch interactions
    allowSlidePrev: true,   // Enable sliding to the previous slide
    allowSlideNext: true,   // Enable sliding to the next slide
    keyboard: {
        enabled: false      // Disable keyboard navigation
    },
        pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    speed: 750, // Set the transition duration in milliseconds
    effect: 'slide', // Set the transition effect
    cubeEffect: {
        slideShadows: false,
    },
    coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
    },
    flipEffect: {
        slideShadows: false,
        limitRotation: true,
    }
});

swiper.on('slideChange', function () {
    var totalSlides = swiper.slides.length;
    var activeSlideIndex = swiper.activeIndex;
    var progressPercentage = (activeSlideIndex / (totalSlides - 1)) * 100;
    var progressBar = document.querySelector('.progress-bar');
    progressBar.style.width = progressPercentage + '%';
});

swiper.on('init', function () {
    var totalSlides = swiper.slides.length;
    var activeSlideIndex = swiper.activeIndex;
    var progressPercentage = (activeSlideIndex / (totalSlides - 1)) * 100;
    var progressBar = document.querySelector('.progress-bar');
    progressBar.style.width = progressPercentage + '%';
});

swiper.init();

// Access the swiper instance on the HTML container element
var swiperInstance = swiperContainer.swiper;

// Wait for the DOM to be ready before executing the rest of the code
document.addEventListener('DOMContentLoaded', function() {
    // Initialize the body height and set up an event listener for the resize event
    setBodyHeight();
    window.addEventListener('resize', setBodyHeight);

    // Function to set the height of the body element
    function setBodyHeight() {
        // Get the visible height of the viewport
        const visibleHeight = window.innerHeight;

        // Get the safe area insets of the device
        const safeAreaInsets = getSafeAreaInsets();

        // Set the height of the body element to the sum of the visible height and the bottom safe area inset
        document.body.style.height = (visibleHeight + safeAreaInsets.bottom) + 'px';
    }

    // Function to get the safe area insets of the device
    function getSafeAreaInsets() {
        // Get the values of the --safe-area-inset-top and --safe-area-inset-bottom CSS variables on the root html element
        return {
            top: parseFloat(getComputedStyle(document.documentElement).getPropertyValue('--safe-area-inset-top')) || 0,
            bottom: parseFloat(getComputedStyle(document.documentElement).getPropertyValue('--safe-area-inset-bottom')) || 0
        };
    }

    // Set safe area insets for mobile devices
    // Check if the device is an iOS device
    const isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);

    // Check if the app is running in standalone mode on an iOS device
    const isStandalone = 'standalone' in window.navigator && window.navigator.standalone;

    // Get the value of the env(safe-area-inset-bottom) CSS value
    const safeAreaInsetBottom = 'env(safe-area-inset-bottom)';

    // If the device is an iOS device running in standalone mode, or if it is not an iOS device, set the --safe-area-inset-bottom CSS variable on the root html element to the value of env(safe-area-inset-bottom)
    if (isMobile && isStandalone || !isMobile) {
        document.documentElement.style.setProperty('--safe-area-inset-bottom', safeAreaInsetBottom);
    }

    if (window.location.protocol === 'https:' && isMobile) {
        lockPortraitMode();
    }

    // Swiper buttons.
    var nextButton = document.querySelector('button[name="slide-next"]');
    var previousButton = document.querySelector('button[name="slide-previous"]');

    if (nextButton) {
        nextButton.addEventListener('click', function() {
            swiperInstance.slideNext();
        });
    }

    if (previousButton) {
        previousButton.addEventListener('click', function() {
            swiperInstance.slidePrev();
        });
    }

});

function lockPortraitMode() {
    // Check if screen orientation API is supported
    if (screen.orientation) {
        // Lock the screen to portrait mode
        screen.orientation.lock("portrait").then(function() {
            console.log("Screen orientation locked to portrait");
        }).catch(function(error) {
            console.error("Failed to lock screen orientation: " + error);
        });
    }
}
