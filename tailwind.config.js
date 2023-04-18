/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/css/*.css",
        "./resources/js/**/*.{js, vue}",
        "./resources/sass/*.scss",
        "./resources/views/**/*.blade.php",
    ],
    theme: {
        extend: {},
    },
    plugins: [],
};
