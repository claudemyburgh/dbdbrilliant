import defaultTheme from 'tailwindcss/defaultTheme';
import preset from './vendor/filament/support/tailwind.config.preset'

import colors from "tailwindcss/colors"
import textShadow from "@designbycode/tailwindcss-text-shadow"
import attributes from "tailwindcss-attributes"
import maskImage from "@designbycode/tailwindcss-mask-image"
import typography from "@tailwindcss/typography"
import forms from "@tailwindcss/forms"


/** @type {import('tailwindcss').Config} */
export default {
    presets: [preset],
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.ts',

        './app/Filament/**/*.php',
        './resources/views/filament/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
    ],
    theme: {
        extend: {
            colors: {
                primary: {
                    DEFAULT: '#001B2C',
                    50: '#0088E4',
                    100: '#007CCF',
                    200: '#0064A6',
                    300: '#004C7E',
                    400: '#003455',
                    500: '#001B2C',
                    600: '#00121D',
                    700: '#00080D',
                    800: '#000000',
                    900: '#000000',
                    950: '#000000'
                },
                secondary: colors.blue,

                gray: colors.gray

            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    plugins: [
        colors,
        textShadow,
        attributes,
        maskImage,
        typography,
        forms
    ],
};
