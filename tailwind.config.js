import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        container: {
            screens: {
                xl: '1160px',
            },
        },
        extend: {
            fontFamily: {
                sans: ["Roboto, sans-serif"],
                serif: ["IBM Plex Mono, monospace"],
            },
            colors: {
                "primary": "#782AAC",
                "primary-hover": "#6B2699",
                "primary-pressed": "#62228D",
                // "": "",
                // "": "",
                // "": "",
                "primary-focused": "#300E47",
                "green": "#71D154",
                "red": "#E1392C",
                "yellow": "#FDDE42",
                "gray-light": "#C4C0C7",
                "gray-dark": "#645C6A",
            },
            backgroundImage: {
                "white-points-square": "url('../../public/assets/images/backgrounds/white-points-square.png')",
                "green-points": "url(../../public/assets/images/backgrounds/green-points.png)",
                "green-points-square": "url(../../public/assets/images/backgrounds/green-points-square.png)",
                "yellow-points-square": "url(../../public/assets/images/backgrounds/yellow-points-square.png)",
                memory: "linear-gradient(#71d154 460px, #fff 460px);",
                "about-parthner": "linear-gradient(#e1392c 460px, #fff 460px);",
                "white-points": "url(../../public/assets/images/backgrounds/white-points.png)",
                "red-points": "url(../../public/assets/images/backgrounds/red-points.png)",
                thetreBg: "url(../../public/assets/images/theatre-page/theatre-hero-bg.jpg)",
            },
        },
    },

    plugins: [forms],
};
