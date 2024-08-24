/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'cream-bg': '#FBF2E9',
        'navy-bg' : '#1B4668',
      },
      backgroundImage: {
        'home-bg' : "url('/public/image/Homepage_bg.png')",
        'home2-bg' : "url('/public/image/home-background-2.png')",
        'itcomp-bg' : "url('/public/image/itcomp-background.png')",
        'countdown-bg' : "url('/public/image/bg-countdown.png')",
      },
      spacing: {
        '80': '20rem',
        '96': '24rem',
        '128': '32rem',
        '144': '36rem',
        '160': '40rem',
      }
    },
  },
  plugins: [],
}