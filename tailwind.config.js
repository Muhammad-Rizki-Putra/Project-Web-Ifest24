/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js",
  ],
  theme: {
    fontSize: {
      xs3: '0.575rem',
      xs2: '0.675rem',
      xs: '0.75rem',
      sm: '0.875rem',
      base: '1rem',
      md: '1rem',
      lg: '1.125rem',
      xl: '1.25rem',
      '2xl': '1.563rem',
      '3xl': '1.953rem',
      '4xl': '2.441rem',
      '5xl': '3.052rem',
      '6xl': '3.75rem',
      '7xl': '4.5rem',
      '8xl': '6rem',
      '9xl': '8rem',
    },
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
        'sans': ['Plus Jakarta Sans', 'sans-serif'], // Use 'sans-serif' as the fallback
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
    require('flowbite/plugin'),
  ],
}