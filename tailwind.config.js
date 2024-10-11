/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./public/*.{html,js,php}",
    "./public/assets/js/*.js",
    "./views/*.php",
    "./views/errors/*.php",
    "./views/partials/*.php",
    "./views/student/*.php",
    "./views/teacher/*.php",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}