/** @type {import('tailwindcss').Config} */
export default {
  content: ["./src/**/*.{html,js}"],
  darkMode: 'class', // Use class strategy for dark mode
  theme: {
    extend: {
      colors: {
        primary: {
          50: '#f5f8ff',
          100: '#eaf1ff',
          200: '#d5e3ff',
          300: '#b0c8ff',
          400: '#7a9eff',
          500: '#5572dd',
          600: '#3351bb',
          700: '#223b95',
          800: '#172b70',
          900: '#112056',
        },
        secondary: {
          50: '#fff1f0',
          100: '#ffe4e1',
          200: '#ffc9c4',
          300: '#ff9d95',
          400: '#ff6b5e',
          500: '#ff4133',
          600: '#e82c1e',
          700: '#c21f14',
          800: '#9c1c14',
          900: '#7d1b15',
        },
      },
      fontFamily: {
        sans: ['Inter', 'system-ui', '-apple-system', 'sans-serif'],
      },
      borderRadius: {
        'sm': '0.125rem',
        DEFAULT: '0.25rem',
        'md': '0.375rem',
        'lg': '0.5rem',
        'xl': '0.75rem',
        '2xl': '1rem',
      },
      boxShadow: {
        sm: '0 1px 2px 0 rgba(0, 0, 0, 0.05)',
        DEFAULT: '0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06)',
        md: '0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06)',
        lg: '0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05)',
        xl: '0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04)',
        '2xl': '0 25px 50px -12px rgba(0, 0, 0, 0.25)',
        inner: 'inset 0 2px 4px 0 rgba(0, 0, 0, 0.06)',
        dark: '0 10px 15px -3px rgba(0, 0, 0, 0.3), 0 4px 6px -2px rgba(0, 0, 0, 0.15)',
        none: 'none',
      },
    },
  },
  plugins: [],
}