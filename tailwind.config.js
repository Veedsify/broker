/** @type {import('tailwindcss').Config} */
export default {
    content: ["./resources/views/**/*.blade.php", "./resources/js/**/*.vue"],
    theme: {
        extend: {
            colors: {
                "bgprimary": "#2c3b1e",
                "bgsecondary": "#435821",
                "bgborder": "#627e19"
            },
        },
    },
    plugins: [],
};
