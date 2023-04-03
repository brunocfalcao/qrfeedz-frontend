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
                'small': {'raw': '(min-height: 640px)'},
                'medium': {'raw': '(min-height: 768px)'},
                'large': {'raw': '(min-height: 1024px)'},
            },
        },
    },
    variants: {
        extend: {
            height: ['responsive', 'small', 'medium', 'large'],
            minHeight: ['responsive', 'small', 'medium', 'large'],
        },
    },

    plugins: [
    ],
}
