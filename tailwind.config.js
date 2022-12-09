/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [],
  theme: {
    extend: {
      animation: {
        'pulseFix': 'pulseFixed 2s cubic-bezier(0.4, 0, 0.6, 1)',
      },

      keyframes: {
        pulseFixed: {
          '75%, 100%': {
            transform: 'scale(2)',
            opacity: 1,
          },
        }
      }
    },
  },
  plugins: [],
}
