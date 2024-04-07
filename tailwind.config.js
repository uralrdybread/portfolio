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
            colors: {
                customBlue: "#c3dafe",
                customGray: "#6C63FF",
            },
        },
    },
    plugins: [],
};
