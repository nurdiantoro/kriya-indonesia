/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
        colors:{
            'warna-01': '#0080A7',
            'warna-02': '#17D7BD',
            'warna-03': '#09CA74',
            'warna-04': '#EEFAFF',
            'warna-05': '#ffd147',
        },
        backgroundImage: theme => ({
            'gradient-to-45':
                'linear-gradient(45deg, #fdf497, #fd5949, #d6249f)',
          }),
    },
  },
  plugins: [],
}

