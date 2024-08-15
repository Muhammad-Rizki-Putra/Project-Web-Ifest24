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
        'countdown-bg' : "url('/public/image/bg-countdown.png')",
      }
    },
  },
  plugins: [],
}