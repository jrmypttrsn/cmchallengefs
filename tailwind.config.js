module.exports = {
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    screens: {
      sm: '320px',
      lg: '1024px',
      xl: '1440px',
    },
    extend: {},
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
