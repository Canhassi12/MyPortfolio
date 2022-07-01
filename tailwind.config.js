/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        sans:['Montserrat', 'sans-serif']
      },
      
      colors: {
        'main': '#111111'
        },
    },


  },
  darkMode: 'class',

  plugins: [],
}
