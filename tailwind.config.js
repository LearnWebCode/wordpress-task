const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  content: ["./**/*.php", "./src/**/*.js"],
  plugins: [require("@tailwindcss/typography")],
  theme: {
    extend: {
      fontFamily: {
        "sans": ["Inter", ...defaultTheme.fontFamily.sans]
      }
    }
  }
}
