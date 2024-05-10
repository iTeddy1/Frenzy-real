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
        primary: {
          lighter: "#C8FBCD",
          light: "#5BE584",
          DEFAULT: "#00AC55",
          dark: "#007B55",
          darker: "#005249",
        },
        secondary: {
          lighter: "#D7E2FE",
          light: "#84A9FF",
          DEFAULT: "#3366FF",
          dark: "#1839B7",
          darker: "#091A7A",
        },
        info: {
          lighter: "#CAFEF6",
          light: "#61F3F4",
          DEFAULT: "#00B9DA",
          dark: "#006C9C",
          darker: "#003768",
        },
        error: {
          lighter: "#FFE9D5",
          light: "#FFAC82",
          DEFAULT: "#FF5630",
          dark: "#FF542E",
          darker: "#B71D18",
        },
        warning: {
          lighter: "#FFF6CC",
          light: "#FFD666",
          DEFAULT: "#FFAB00",
          dark: "#B76E00",
          darker: "#7A4100",
        },
        text: {
          light: "#919EAB",
          normal: "#637381",
          dark: "#212B36",
        },
        background: {
          default: {
            light: "#FFFFFF",
            dark: "#E8EBEE",
          },
          paper: {
            light: "#FFFFFF",
            dark: "#212B36",
          },
          neutral: {
            light: "#F4F6F7",
            dark: "#151C24",
          },
        },
        active: {
          DEFAULT: "#637381",
          light: "#F1F3F5",
          lighter: "#E8EBEE",
          dark: "#A6B0BB",
          darker: "#E0E4E8",
        },
        divider: "#E0E4E8",
      },
    },
  },
  plugins: [],
};
