const colors = require("tailwindcss/colors");

module.exports = {
    purge: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        fontFamily: {
            sans: ["Helvetica", "sans-serif"],
        },
        colors: {
            transparent: "transparent",
            current: "currentColor",
            "blue-gray": colors.blueGray,
            "cool-gray": colors.coolGray,
            gray: colors.gray,
            "true-gray": colors.trueGray,
            "warm-gray": colors.warmGray,
            red: colors.red,
            orange: colors.orange,
            amber: colors.amber,
            yellow: colors.yellow,
            lime: colors.lime,
            green: colors.green,
            emerald: colors.emerald,
            teal: colors.teal,
            cyan: colors.cyan,
            "light-blue": colors.sky,
            blue: colors.blue,
            indigo: colors.indigo,
            violet: colors.violet,
            purple: colors.purple,
            fuchsia: colors.fuchsia,
            pink: colors.pink,
            rose: colors.rose,
            white: colors.white,
        },
        extend: {},
    },
    variants: {
        extend: {},
    },
    plugins: [],
};
