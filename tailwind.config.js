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
        },
    },

    plugins: [forms],
};
