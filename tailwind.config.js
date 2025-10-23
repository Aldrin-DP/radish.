/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        figtree: ['Figtree', 'sans-serif'],
        poppins: ['Poppins', 'sans-serif'],
        sheppards: ['Mrs Sheppards', 'cursive'],
      }
    },
  },
  plugins: [],
}