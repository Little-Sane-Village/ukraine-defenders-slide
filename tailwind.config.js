/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
      './dist/**/*.html',
  ],
  theme: {
    fontFamily: {
      'sans': ['neue-haas-grotesk-display', 'sans-serif'],
    },
    // fontSize: {
    //   'xs': '14px',
    //   'sm': '16px',
    //   'base': '18px',
    //   'lg': '20px',
    //   'xl': '22px',
    //   '2xl': '24px',
    //   '5xl': '30px',
    //   'big': '36px',
    //   'huge': '48px',
    // },
    extend: {
      colors: {
        brand: {
          accent: '#74D0A3',
          primary: '#1D2759',
          secondary: '#0042AC',
        },
        blue: {
          ua: '#0057B7',
        },
        yellow: {
          ua: '#FFD700',
        },
      }
    },
    aspectRatio: {
      auto: 'auto',
      square: '1 / 1',
      video: '16 / 9',
    },
  },
  plugins: [
    require('@tailwindcss/aspect-ratio'),
    require('@tailwindcss/forms'),
  ],
}
