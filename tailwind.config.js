/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    colors:{
        'warna-01': '#0080A7',
        'warna-02': '#17D7BD',
        'warna-03': '#09CA74',
    },
    extend: {},
  },
  plugins: [],
}

