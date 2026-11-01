/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./app/View/**/*.php",
  ],
  theme: {
    extend: {
      colors: {
        brand: {
          50: '#F0F7FF',
          100: '#E0EFFF',
          200: '#BAE0FD',
          300: '#7CC5FB',
          400: '#38A5F6',
          500: '#2563EB', // Primary Brand Blue
          600: '#1D4ED8', // Royal Accent
          700: '#1E40AF',
          800: '#1E3A8A', // Deep Trust Navy Blue
          900: '#0F172A', // Authoritative Slate/Navy
          950: '#0A0F1D',
        },
        navy: {
          950: '#0F172A', // Text / Dark Contrast
          900: '#1E293B',
          850: '#334155',
          800: '#475569',
          100: '#F1F5F9',
          50: '#F8FAFC',
        },
        gold: {
          50: '#FFFBEB',
          100: '#FEF3C7',
          200: '#FDE68A',
          300: '#FCD34D',
          400: '#F59E0B',
          500: '#D97706', // Brand Amber/Gold
          600: '#B45309',
          700: '#92400E',
          800: '#78350F',
          900: '#451A03',
        },
      },
      fontFamily: {
        serif: ['"Playfair Display"', 'Georgia', 'serif'],
        sans: ['Inter', 'system-ui', '-apple-system', 'BlinkMacSystemFont', 'Segoe UI', 'Roboto', 'sans-serif'],
      },
      boxShadow: {
        'card': '0 4px 20px -2px rgba(15, 23, 42, 0.06), 0 2px 6px -1px rgba(15, 23, 42, 0.04)',
        'card-hover': '0 16px 36px -6px rgba(29, 78, 216, 0.12), 0 4px 12px -2px rgba(15, 23, 42, 0.05)',
        'soft': '0 2px 15px -3px rgba(0, 0, 0, 0.07), 0 10px 20px -2px rgba(0, 0, 0, 0.04)',
        'blue-glow': '0 0 25px -5px rgba(37, 99, 235, 0.25)',
      },
      borderWidth: {
        'hairline': '0.5px',
      }
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('@tailwindcss/typography'),
  ],
}
