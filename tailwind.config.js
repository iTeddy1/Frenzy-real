/** @type {import('tailwindcss').Config} */
import defaultTheme from "tailwindcss/defaultTheme";

export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            borderRadius: {
                DEFAULT: "10px",
                full: "9999px",
                small: "5px",
            },
            fontFamily: {
                public: ["Public Sans", ...defaultTheme.fontFamily.sans],
                rubik: ["Rubik Moonrocks"],
            },
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
            transitionProperty: { width: "width", stroke: "stroke" },
            borderWidth: {
                6: "6px",
            },
            boxShadow: {
                default: "0px 8px 13px -3px rgba(0, 0, 0, 0.07)",
                card: "0px 1px 3px rgba(0, 0, 0, 0.12)",
                "card-2": "0px 1px 2px rgba(0, 0, 0, 0.05)",
                switcher:
                    "0px 2px 4px rgba(0, 0, 0, 0.2), inset 0px 2px 2px #FFFFFF, inset 0px -1px 1px rgba(0, 0, 0, 0.1)",
                "switch-1": "0px 0px 5px rgba(0, 0, 0, 0.15)",
                1: "0px 1px 3px rgba(0, 0, 0, 0.08)",
                2: "0px 1px 4px rgba(0, 0, 0, 0.12)",
                3: "0px 1px 5px rgba(0, 0, 0, 0.14)",
                4: "0px 4px 10px rgba(0, 0, 0, 0.12)",
                5: "0px 1px 1px rgba(0, 0, 0, 0.15)",
                6: "0px 3px 15px rgba(0, 0, 0, 0.1)",
                7: "-5px 0 0 #313D4A, 5px 0 0 #313D4A",
                8: "1px 0 0 #313D4A, -1px 0 0 #313D4A, 0 1px 0 #313D4A, 0 -1px 0 #313D4A, 0 3px 13px rgb(0 0 0 / 8%)",
            },
            dropShadow: {
                1: "0px 1px 0px #E2E8F0",
                2: "0px 1px 4px rgba(0, 0, 0, 0.12)",
            },
            keyframes: {
                linspin: {
                    "100%": { transform: "rotate(360deg)" },
                },
                easespin: {
                    "12.5%": { transform: "rotate(135deg)" },
                    "25%": { transform: "rotate(270deg)" },
                    "37.5%": { transform: "rotate(405deg)" },
                    "50%": { transform: "rotate(540deg)" },
                    "62.5%": { transform: "rotate(675deg)" },
                    "75%": { transform: "rotate(810deg)" },
                    "87.5%": { transform: "rotate(945deg)" },
                    "100%": { transform: "rotate(1080deg)" },
                },
                "left-spin": {
                    "0%": { transform: "rotate(130deg)" },
                    "50%": { transform: "rotate(-5deg)" },
                    "100%": { transform: "rotate(130deg)" },
                },
                "right-spin": {
                    "0%": { transform: "rotate(-130deg)" },
                    "50%": { transform: "rotate(5deg)" },
                    "100%": { transform: "rotate(-130deg)" },
                },
                rotating: {
                    "0%, 100%": { transform: "rotate(360deg)" },
                    "50%": { transform: "rotate(0deg)" },
                },
                topbottom: {
                    "0%, 100%": { transform: "translate3d(0, -100%, 0)" },
                    "50%": { transform: "translate3d(0, 0, 0)" },
                },
                bottomtop: {
                    "0%, 100%": { transform: "translate3d(0, 0, 0)" },
                    "50%": { transform: "translate3d(0, -100%, 0)" },
                },
            },
            animation: {
                linspin: "linspin 1568.2353ms linear infinite",
                easespin:
                    "easespin 5332ms cubic-bezier(0.4, 0, 0.2, 1) infinite both",
                "left-spin":
                    "left-spin 1333ms cubic-bezier(0.4, 0, 0.2, 1) infinite both",
                "right-spin":
                    "right-spin 1333ms cubic-bezier(0.4, 0, 0.2, 1) infinite both",
                "ping-once": "ping 5s cubic-bezier(0, 0, 0.2, 1)",
                rotating: "rotating 30s linear infinite",
                topbottom: "topbottom 60s infinite alternate linear",
                bottomtop: "bottomtop 60s infinite alternate linear",
                "spin-1.5": "spin 1.5s linear infinite",
                "spin-2": "spin 2s linear infinite",
                "spin-3": "spin 3s linear infinite",
            },
        },
    },
    plugins: [],
};
