/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.css",
  ],
  theme: {
    extend: {},
  },
  plugins: [require("daisyui")],
  daisyui: {
    themes: ["cupcake"],
    theme: {
      extend: {
        colors: {
          yel: "#FFD143",
          org: "#FF9153",
        },
      },
    },
  }
}

