/*
|-------------------------------------------------------------------------------
| Tailwind – The Utility-First CSS Framework
|-------------------------------------------------------------------------------
|
| Documentation at https://tailwindcss.com
|
*/

/**
 * Global Styles Plugin
 *
 * This plugin modifies Tailwind’s base styles using values from the theme.
 * https://tailwindcss.com/docs/adding-base-styles#using-a-plugin
 */
const globalStyles = ({ addBase, config }) => {
  addBase({
    a: {
      color: config('theme.textColor.primary'),
      textDecoration: 'none',
      borderBottom: '1px solid transparent',
      transition: '0.2s ease',
    },
    'a:hover': {
      color: config('theme.borderColor.accent'),
    },
    p: {
      marginBottom: config('theme.margin.3'),
      lineHeight: config('theme.lineHeight.normal'),
      textAlign: 'justify',
    },
    'h1, h2, h3, h4, h5': {
      fontFamily: config('theme.fontFamily.title'),
      marginBottom: config('theme.margin.2'),
      lineHeight: config('theme.lineHeight.tight'),
    },
    h1: {
      fontSize: config('theme.fontSize.5xl')
    },
    h2: {
      fontSize: config('theme.fontSize.4xl')
    },
    h3: {
      fontSize: config('theme.fontSize.3xl')
    },
    h4: { fontSize: config('theme.fontSize.2xl') },
    h5: { fontSize: config('theme.fontSize.xl') },
    'ol, ul': { paddingLeft: config('theme.padding.4') },
    ol: { listStyleType: 'decimal' },
    ul: { listStyleType: 'disc' },
  });
}

/**
 * Configuration
 */
module.exports = {
  theme: {
    colors: {
      accent: '#E2A50D',
      primary: '#000000',
      white: '#fff',
      video: '#E55428',
      book: '#2E6EB2',
      link: '#F3B58D',
      film: '#F5D8D5',
      site: '#6c9b8b',

      gray: {
        0:   '#d1d1d1',
        100: '#f7fafc',
        200: '#edf2f7',
        300: '#e2e8f0',
        400: '#cbd5e0',
        500: '#a0aec0',
        600: '#718096',
        700: '#4a5568',
        800: '#2d3748',
        900: '#1a202c',
      },
      transparent: 'transparent',
    },
    shadows: {
      outline: '0 0 0 3px rgba(82,93,220,0.3)',
    },
    container: {
      center: true,
      padding: '1rem',
    },
    extend: {
      screens: {
        'xs': '420px',
      },
      fontFamily: {
        'bigtitle': ['Dosis', 'sans-serif'],
        'title': ['Open Sans', 'sans-serif'],
        'sans': ['Open Sans', 'sans-serif'],
        'display': ['Open Sans', 'sans-serif'],
        'body': ['Open Sans', 'sans-serif'],
      },
      inset: {
        '2/3': '66%',
      },
      opacity: {
        90: '0.90',
      },
      borderWidth: {
        '10': '10px',
        '14': '14px',
      },
      spacing: {
        '72': '18rem',
        '84': '21rem',
        '96': '24rem',
      }
    }
  },
  variants: {
    // Define variants
  },
  plugins: [
    globalStyles,
  ],
}
