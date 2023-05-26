/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
      extend: {
        keyframes: {
            wiggle: {
               "from": {
                opacity: '0%'
              },
               "to": {
                 opacity: '100%'
                }
            }
          }
      },
    },
    plugins: [],
  }