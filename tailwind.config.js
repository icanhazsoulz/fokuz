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
                hero: "url('../assets/images/home-page/start-screen-bg.png')",

                call: "url(../assets/icons/call-me.svg)",
                shootingList: "url(../assets/images/home-page/about/shooting-bg1.png)",
                success: "url(../assets/images/home-page/success/success-cell-bg.png)",
                help: "url(../assets/images/home-page/help/help-bg.png)",
                memory: "linear-gradient(#71d154 460px, #fff 460px);",
                "about-parthner": "linear-gradient(#e1392c 460px, #fff 460px);",
                memoryList: "url(../assets/images/home-page/memory/memory-bg.png)",
                aboutBg: "url(../assets/images/about-page/about-bg.png)",
                successBg: "url(../assets/images/success-page/success-hero-bg.jpg)",
                thetreBg: "url(../assets/images/theatre-page/theatre-hero-bg.jpg)",
            },
        },
    },

    plugins: [forms],
};
