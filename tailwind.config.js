const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: 'class',
  theme: {
    extend: {
      fontFamily: {
        'nunito': ['Nunito', 'sans-serif'],
      },
      backgroundImage: {
        'gradient-custom': 'linear-gradient(135deg, #1e3c72 0%, #2a5298 50%, #7dd3c0 100%)',
      },
      backdropBlur: {
        'lg': '10px',
      },
      colors: {
        'blue': {
          100: '#e0e9f7',
          200: '#c5d9f2',
          700: '#2a5298',
          900: '#1e3c72',
        },
        'teal': {
          400: '#7dd3c0',
        },
        'yellow': {
          400: '#ffd700',
        },
        'indigo': {
          500: '#667eea',
        },
        'purple': {
          600: '#764ba2',
        },
      },
    },
  },
  variants: {
    extend: {
      transform: ['hover', 'group-hover'],
      translate: ['hover', 'group-hover'],
      scale: ['hover', 'group-hover'],
      backgroundColor: ['hover'],
      backgroundOpacity: ['hover'],
    },
  },
  plugins: [],
}