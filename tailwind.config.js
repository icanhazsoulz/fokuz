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
        extend: {
            fontFamily: {
                sans: ["Roboto, sans-serif"],
                serif: ["IBM Plex Mono, monospace"],
            },
            colors: {
                "primary": "#782aac",
                "primary-hover": "#6B2699",
                "primary-pressed": "#62228D",
                // "": "",
                // "": "",
                // "": "",
                "primary-focused": "#300E47",
                "green": "#71d154",
                "red": "#e1392c",
                "yellow": "#fdde42",
                "neutral": "#C4C0C7",
            },
        },
    },

    plugins: [forms],
};
