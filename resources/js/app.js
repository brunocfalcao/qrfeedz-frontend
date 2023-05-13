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
