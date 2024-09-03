/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      animation: {
        fade: 'fadeOut 1s ease-in-out',
      },
      
      keyframes: theme => ({
        fadeOut: {
          '0%': { backgroundColor: theme('colors.white') },
          '100%': { backgroundColor: theme('colors.transparent') },
        },
      }),

      fontFamily: {
        'sans' : ['Onest','cursive']
      },
      

      colors: {
        'cream-bg': '#FBF2E9',
        'navy-bg' : '#1B4668',
      },
      backgroundImage: {
        'home-bg' : "url('/public/image/Homepage_bg.png')",
        'home2-bg' : "url('/public/image/home-background-2.png')",
        'itcomp-bg' : "url('/public/image/itcomp-background.png')",
        'countdown-bg' : "url('/public/image/bg-countdown.png')",
        'speaker' : "url('/public/image/box_tp.png')",
        'home-launch' : "url('/public/image/launch-home.png')",
        'home-launch-mob' : "url('/public/image/launch-home-mob.png')",
        'home-doc' : "url('/public/image/box_hm.png')",
        'carousel' : "url('/public/image/box.png')",
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
  plugins: [
    require('@khoohaoyit/tailwind-grid-center'),
  ],
}