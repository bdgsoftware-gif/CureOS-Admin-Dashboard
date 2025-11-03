const colors = require("tailwindcss/colors");

module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "node_modules/@frostui/tailwindcss/dist/*.js",
    ],

    darkMode: ["class", '[data-mode="dark"]'],

    theme: {
        container: {
            center: true,
        },

        fontFamily: {
            sans: ["Figtree", "sans-serif"],
        },

        extend: {
            fontFamily: {
                sans: ["Poppins", "Inter", "sans-serif"],
            },
            colors: {
                primary: "#3e60d5",
                secondary: "#6c757d",
                success: "#47ad77",
                info: "#16a7e9",
                warning: "#ffc35a",
                danger: "#f15776",
                light: "#f2f2f7",
                dark: "#212529",
                "brand-yellow": "#FACC15", // Amber 400 equivalent
                "brand-blue": "#3B82F6", // Blue 500 equivalent
                "brand-space": "#0c4c6a",
                gray: {
                    ...colors.gray,
                    800: "#313a46",
                },
            },
            screens: {
                "8xl": "88rem",
                "9xl": "96rem",
                "10xl": "104rem",
            },
            minWidth: (theme) => ({
                ...theme("width"),
            }),

            maxWidth: (theme) => ({
                ...theme("width"),
            }),

            minHeight: (theme) => ({
                ...theme("height"),
            }),

            maxHeight: (theme) => ({
                ...theme("height"),
            }),
        },
    },

    plugins: [
        require("@frostui/tailwindcss/plugin"),
        require("@tailwindcss/forms"),
        require("@tailwindcss/typography"),
        require("@tailwindcss/aspect-ratio"),
    ],
};
