module.exports = {
  important: true,
  content: [
      './resources/**/*.blade.php',
      './resources/**/*.js',
      './resources/**/*.vue',
  ],
  theme: {
    extend: {
        colors:
            {
                'primary':'var(--theme-primary)',
                'secondary':'var(--theme-secondary)',
                'support':'var(--theme-support)',
                'background':'var(--theme-background)'
            }
    },
  },
  plugins: [],
}
