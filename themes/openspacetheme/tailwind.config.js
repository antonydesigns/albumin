/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.{php, html, js}", // theme root folder
    "./components/*.{php, html, js}",
    // add more folders
    "../../plugins/imagi/**/*.{php, html, js}",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
};
