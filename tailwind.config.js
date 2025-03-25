/** @type {import('tailwindcss').Config} */
import daisyui from "daisyui";

export default {
  content: ["./index.html", "./src/**/*.{vue,js,ts,jsx,tsx}"],
  theme: {
    extend: {
      colors: {
        primary: "#e89e1d", // orange
        secondary: "#2b3d4f", // bluewood
        accent: "#2980b9", // lightblue
        success: "#1abc9c", // lightgreen
        warning: "#efd81d", // gold
        info: "#e0ffff", // light cyan
        neutral: "#2b3d4f", // bluewood
      },
      borderRadius: {
        btn: "0.375rem",
      },
      fontWeight: {
        btn: "600",
      },
    },
  },
  plugins: [daisyui],
  daisyui: {
    themes: [
      {
        mytheme: {
          primary: "#e89e1d",
          secondary: "#2b3d4f",
          accent: "#2980b9",
          success: "#1abc9c",
          warning: "#efd81d",
          info: "#e0ffff",
          neutral: "#2b3d4f",
        },
      },
    ],
  },
};
