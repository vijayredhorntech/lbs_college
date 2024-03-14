/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {},
        colors: {
            darkTheme: '#0f468d',
            darkText: '#0f468d',


            lightTheme: '#b8d7fd',
            lightText: '#b8d7fd',

            danger: '#e01212',
            white: '#ffffff',

        },
    },
    plugins: [],
}
