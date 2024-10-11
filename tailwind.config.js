/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./public/*.{html,js,php}",
    "./public/assets/js/*.js",
    "./views/*.php",
    "./views/**/*.php",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}