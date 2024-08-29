/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './node_modules/flowbite/**/*.js',
    ],
    daisyui: {
        themes: ["light", "dark", "cupcake", "forest","acid"],
    },
    theme: {
        extend: {},
    },
    plugins: [
        require('daisyui'),
        require('tailwind-scrollbar'),
        require('flowbite/plugin'),
    ],
}
