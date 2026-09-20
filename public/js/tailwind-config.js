// Tailwind CDN config (harus dimuat SETELAH script cdn.tailwindcss.com)
tailwind.config = {
  theme: {
    extend: {
      colors: {
        madjoe: {
          DEFAULT: "#C81E27",
          dark: "#991118",
          deeper: "#780D12",
          crimson: "#B91C1C",
          light: "#E0242E",
          surface: "#FFF5F5",
          black: "#111111",
          charcoal: "#1E1E1E"
        },
        primary: "#005ab4",
        "primary-container": "#0873df",
        background: "#f9f9ff",
        "on-secondary-fixed-variant": "#2e4770",
        "on-primary-fixed-variant": "#00458d",
        "on-secondary-fixed": "#001b3e",
        "secondary-fixed-dim": "#afc7f7",
        secondary: "#465f89",
        "on-primary-container": "#fefcff",
        "inverse-surface": "#2d3038",
        "error-container": "#ffdad6",
        "on-primary": "#ffffff",
        "on-secondary-container": "#405882",
        "surface-container-high": "#e6e8f1",
        "surface-bright": "#f9f9ff",
        "on-secondary": "#ffffff",
        "on-error-container": "#93000a",
        "on-surface-variant": "#414753",
        tertiary: "#964400",
        "on-tertiary-container": "#fffbff",
        "surface-container-low": "#f2f3fd",
        "surface-tint": "#005db8",
        "inverse-on-surface": "#eff0fa",
        "surface-dim": "#d8dae3",
        "inverse-primary": "#aac7ff",
        error: "#ba1a1a",
        outline: "#717785",
        "surface-container-highest": "#e0e2ec",
        "tertiary-container": "#bd5700",
        "surface-container": "#ecedf7",
        "on-surface": "#181c22",
        surface: "#f9f9ff",
        "on-tertiary": "#ffffff",
        "on-primary-fixed": "#001b3e",
        "on-background": "#181c22",
        "secondary-fixed": "#d6e3ff",
        "surface-container-lowest": "#ffffff",
        "outline-variant": "#c1c6d5",
        "on-tertiary-fixed-variant": "#763400",
        "primary-fixed": "#d6e3ff",
        "primary-fixed-dim": "#aac7ff",
        "tertiary-fixed-dim": "#ffb68c",
        "tertiary-fixed": "#ffdbc9",
        "on-error": "#ffffff",
        "on-tertiary-fixed": "#321200",
        "secondary-container": "#b7cfff",
        "surface-variant": "#e0e2ec"
      },
      fontFamily: {
        sans: ['"Plus Jakarta Sans"', "sans-serif"],
        headline: ["Inter"],
        display: ["Inter"],
        body: ["Inter"],
        label: ["Inter"]
      },
      fontSize: {},
      borderRadius: {
        DEFAULT: "0.25rem",
        lg: "0.5rem",
        xl: "0.75rem",
        full: "9999px"
      }
    }
  }
};