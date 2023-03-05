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

            colors: {
                'gold': {
                    DEFAULT: '#ffd700',
                    '50': '#fffdf2',
                    '100': '#fffbe6',
                    '200': '#fff5bf',
                    '300': '#ffef99',
                    '400': '#ffe34d',
                    '500': '#ffd700',
                    '600': '#e6c200',
                    '700': '#bfa100',
                    '800': '#998100',
                    '900': '#7d6900'
                },
                'monza': {
                    DEFAULT: '#db1020',
                    '50': '#fdf3f4',
                    '100': '#fbe7e9',
                    '200': '#f6c3c7',
                    '300': '#f19fa6',
                    '400': '#e65863',
                    '500': '#db1020',
                    '600': '#c50e1d',
                    '700': '#a40c18',
                    '800': '#830a13',
                    '900': '#6b0810'
                }
            },
            fontFamily: {
                'sans': ['"Roboto Slab"', ...defaultTheme.fontFamily.sans],
            },
            borderRadius: {
                '4xl': '36px',
            },
        }
    },

    plugins: [
    ],
}
