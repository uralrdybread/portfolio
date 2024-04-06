/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            breakpoints: {
                sm: "640px",
                md: "768px",
                lg: "1024px",
            },
        },
    },
    plugins: [],
};
