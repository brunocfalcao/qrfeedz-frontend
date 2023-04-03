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
                'h-sm': {'raw': '(max-height: 641px)'},
                'h-md': {'raw': '(min-height: 642px)'}
            },
        },
    },
    variants: {
        extend: {
            height: ['responsive', 'h-sm', 'h-md', 'h-lg'],
            minHeight: ['responsive', 'h-sm', 'h-md', 'h-lg'],
        },
    },

    plugins: [
    ],
}
