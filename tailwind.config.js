/** @type {import('tailwindcss').Config} */

const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {

    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.{vue,js,ts,jsx,tsx}",
        "../qrfeedz-widgets/resources/**/*.blade.php",
        "./node_modules/flowbite/**/*.js"
    ],

    theme: {
        extend: {
            screens: {
                'h-xs': {'raw': '(max-height: 568px)'},
                'h-sm': {'raw': '(min-height: 569px) and (max-height: 767px)'},
                'h-md': {'raw': '(min-height: 768px) and (max-height: 1023px)'},
                'h-lg': {'raw': '(min-height: 1024px)'},
            },
        }
    },

    plugins: [
    ],
}
