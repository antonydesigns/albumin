/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.{php, html, js}", // theme root folder
    "./components/*.{php, html, js}",

    // apply Tailwind to plugins
    "../../plugins/imagi/**/*.{php, html, js}",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
};
