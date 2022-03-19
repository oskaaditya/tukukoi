const plugin = require("tailwindcss/plugin");

module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Nunito", "system-ui", "sans-serif"],
            },
            colors: {
                merah: "#A50F20",
            },
        },
    },
    plugins: [
        plugin(function ({ addUtilities }) {
            const utilities = {
                ".bg-slider1": {
                    "background-image": "url(/assets/img/slider1.png)",
                },
                ".bg-slider2": {
                    "background-image": "url(/assets/img/slider2.png)",
                },
                ".bg-slider3": {
                    "background-image": "url(/assets/img/slider3.png)",
                },
                ".shadow-skills": {
                    "box-shadow": "0px 15px 30px rgba(0, 0, 0, 0.1)",
                },
            };

            addUtilities(utilities);
        }),
    ],
};
