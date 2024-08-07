/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    colors: {
      'base-100': '#F8F8F8',
      'base-200': '#F3F2F2',
      'base-300': '#E1E1E1',
      'base-400': '#C9C9C9',
      'base-500': '#A8A8A8',
      'base-600': '#7A7980',
      'base-700': '#4E4D56',
      'base-800': '#3A3846',
      'base-900': '#1D1C25',
      'primary-dark-brown': '#553004',
      'primary-brown': '#975202',
      'primary-beige-light': '#D6BDA9',
      'primary-green': '#89937C',
      'primary-red': '#BA2D0B',
      'primary-dark-green': '#4E5B3E',
      'primary-blue-dark': '#1F2130',
    },
    fontFamily: {
       'Halant': 'Halant, serif',
       'Ruda': 'Ruda, serif',
    }
  },
  plugins: [],
}

