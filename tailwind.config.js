/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {},
        colors: {
            'primary': '#D2372D',
            'dark': '#262626',
            'silver': '#525252',
            'darksilver': '#3F3F46',
            'secondary': '#27272A',
            'white': '#FFF',
            'red': "#880808",
            'lightred': "#ffc2c4",
            'green': "#0f6a08",
            "lightgreen": "#b7d5ac",
        },
    },
}
