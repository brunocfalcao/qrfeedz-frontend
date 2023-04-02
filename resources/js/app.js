/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';
import { createApp } from 'vue';

/**
 * Next, we will create a fresh Vue application instance. You may then begin
 * registering components with the application instance so they are ready
 * to use in your application's views. An example is included for you.
 */

const app = createApp({});

import ExampleComponent from './components/ExampleComponent.vue';
app.component('example-component', ExampleComponent);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

Object.entries(import.meta.glob('./**/*.vue', { eager: true })).forEach(([path, definition]) => {
   app.component(path.split('/').pop().replace(/\.\w+$/, ''), definition.default);
});

/**
 * Finally, we will attach the application instance to a HTML element with
 * an "id" attribute of "app". This element is included with the "auth"
 * scaffolding. Otherwise, you will need to add an element yourself.
 */

app.mount('#app');

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
    const isIOS = /(iPad|iPhone|iPod)/g.test(navigator.userAgent);

    // Check if the app is running in standalone mode on an iOS device
    const isStandalone = 'standalone' in window.navigator && window.navigator.standalone;

    // Get the value of the env(safe-area-inset-bottom) CSS value
    const safeAreaInsetBottom = 'env(safe-area-inset-bottom)';

    // If the device is an iOS device running in standalone mode, or if it is not an iOS device, set the --safe-area-inset-bottom CSS variable on the root html element to the value of env(safe-area-inset-bottom)
    if (isIOS && isStandalone || !isIOS) {
        document.documentElement.style.setProperty('--safe-area-inset-bottom', safeAreaInsetBottom);
    }
});
