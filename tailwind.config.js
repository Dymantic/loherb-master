const plugin = require('tailwindcss/plugin');

module.exports = {
    purge: [
        "./resources/**/*.html",
        "./resources/**/*.vue",
        "./resources/**/*.blade.php",
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            colors: {
                black: "#1b1c1b",
                "black-opq": "rgba(0,0,0,.8)",
                'charcoal': '#514A49',
                'charcoal-light': '#A69491',

                'purple': '#5d2b46',
                'purple-soft': '#902343',
                'hover-purple': '#902343',
                'navy': '#22323f',
                'off-white': '#f7f4f2',
                'pinky-grey': '#eceaed',
                'cream-light': '#fef4f2',
                'brown-dark': '#917661',
                'brown-light': '#eac49f',
                'gold': '#e49e2a',
                'opaque': 'rgba(255,255,255,.8)',
                'green-main': '#084137',
                'hover-green': '#346c62',
                'green-soft': '#daede7',
                'green-softest': '#f4f9f7',
                'green-mid': '#abd5c7',
                'ivory': '#FDFDFA',
                'cream-dark': '#d7c7ba',
                'chocolate': '#554539',
                'warning': '#cc1f1a',
            },
            spacing: {
                '5/6': '83.33%',
            },

            minHeight: {
                '50w': '50vw',
                '120w': '120vw',
            },
            fontSize: {
                '4xl': '2.125rem',
            },
            fontFamily: {
                display: [
                    'atrament-web',
                    'system-ui',
                    'source-han-sans-traditional',
                    'BlinkMacSystemFont',
                    '-apple-system',
                    'Segoe UI',
                    'Roboto',
                    'Oxygen',
                    'Ubuntu',
                    'Cantarell',
                    'Fira Sans',
                    'Droid Sans',
                    'Helvetica Neue',
                    'sans-serif',
                ],
                'sans': [
                    'transat-bold',
                    'system-ui',
                    'source-han-sans-traditional',
                    'BlinkMacSystemFont',
                    '-apple-system',
                    'Segoe UI',
                    'Roboto',
                    'Oxygen',
                    'Ubuntu',
                    'Cantarell',
                    'Fira Sans',
                    'Droid Sans',
                    'Helvetica Neue',
                    'sans-serif',
                ],
                serif: [
                    'adobe-caslon-pro',
                    'Constantia',
                    'Lucida',
                    'source-han-serif-tc',
                    'Lucida Bright',
                    'Lucidabright',
                    'Lucida Serif',
                    'DejaVu Serif',
                    'Bitstream Vera Serif',
                    'Liberation Serif',
                    'Georgia',
                    'serif',
                ],
            },
            inset: {
                '20': '5rem',
                '50': '50%',
            }
        },
    },
    variants: {
        extend: {
            fontSize: ['zh'],
            transform: ['hover', 'group-hover'],
            translate: ['group-hover'],
        },
    },
    plugins: [
        plugin(function ({addVariant, e}) {
            addVariant('zh', ({modifySelectors, separator}) => {
                modifySelectors(({className}) => {
                    return `html:lang(zh) .${e(`zh${separator}${className}`)}`
                })
            })
        })
    ],
}
