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
                'small': {'raw': '(max-height: 896px)'},
                'medium': {'raw': '(max-height: 1030px)'},
                'large': {'raw': '(max-height: 2796px)'},
            },
        },
    },

    plugins: [
    ],
}
