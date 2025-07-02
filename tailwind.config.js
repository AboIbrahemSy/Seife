import defaultTheme from 'tailwindcss/defaultTheme';
import forms from "@tailwindcss/forms";
import typography from "@tailwindcss/typography";
import colors from 'tailwindcss/colors'

/** @type {import('tailwindcss').Config} */
export default {
    presets: [
        require('./vendor/wireui/wireui/tailwind.config.js')
    ],
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        './vendor/wireui/wireui/resources/**/*.blade.php',
        './vendor/wireui/wireui/ts/**/*.ts',
        './vendor/wireui/wireui/src/View/**/*.php',
        './node_modules/david-ai/**/*.{js,jsx,ts,tsx}'
    ],
    darkMode: "class",
    theme: {
        colors: {
            ...colors,
            transparent: 'transparent',
            current: 'currentColor',
            brand: {
                50:   "#E8F5E9",
                100:  "#C8E6C9",
                200:  "#A5D6A7",
                300:  "#81C784",
                400:  "#66BB6A",
                500:  "#4CAF50",
                600:  "#43A047",
                700:  "#388E3C",
                800:  "#2E7D32",
                900:  "#1B5E20",
                A100: "#B9F6CA",
                A200: "#69F0AE",
                A400: "#00E676",
                A700: "#00C853",
            },
        },
        extend: {
            fontFamily: {
                sans: ['Tajawal', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    plugins: [
        forms,
        typography,
    ],
};
