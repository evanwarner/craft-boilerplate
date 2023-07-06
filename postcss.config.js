module.exports = ctx => ({
  map: ctx.options.map,
  plugins: [
    require('postcss-import')(),
    require('postcss-preset-env')({
      stage: false,
      features: {
        'color-functional-notation': true,
        'custom-media-queries': true,
        'custom-selectors': true,
        'media-query-ranges': true,
        'nesting-rules': true,
        'not-pseudo-class': true
      }
    }),
    require('cssnano')(),
  ],
});
