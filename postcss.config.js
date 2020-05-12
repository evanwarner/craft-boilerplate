module.exports = ctx => ({
  map: ctx.options.map,
  plugins: [
    require('postcss-import')(),
    require('postcss-preset-env')({
      stage: 3,
      features: {
        'case-insensitive-attributes': true,
        'custom-media-queries': true,
        'custom-properties': {
          'preserve': false
        },
        'custom-selectors': true,
        'matches-pseudo-class': true,
        'nesting-rules': true,
        'not-pseudo-class': true
      }
    }),
    require('cssnano')(),
  ],
});
