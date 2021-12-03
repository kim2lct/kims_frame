
const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    fontFamily:{
      'sans':['Lato',...defaultTheme.fontFamily.sans]
    },
    screens: {
      'sm': '640px',
      'md': '768px',
      'lg': '1024px',
      'xl': '1280px',
      '2xl': '1536px',
    },
    extend: {}
  },
  variants: {
    extend: {},
  },
  plugins: [
    
  ],
}
