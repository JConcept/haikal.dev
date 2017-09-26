const path = require('path');
const ExtractTextPlugin = require("extract-text-webpack-plugin");

const extractSass = new ExtractTextPlugin({
  filename: "css/style.css",
  disable: process.env.NODE_ENV === "development"
});

module.exports = {
  entry: [
    './src/sass/main.sass',
    './src/js/main.js'
  ],
  output: {
    filename: 'js/main.js',
    path: path.resolve(__dirname, 'public/assets')
  },
  module: {
    rules: [ /* {Ajout de modules supplémentaires} */{
      test: /.jsx?$/,
      include: [
        path.resolve(__dirname, 'src')
      ],
      exclude: [
        path.resolve(__dirname, 'node_modules'),
        path.resolve(__dirname, 'bower_components')
      ],
      loader: 'babel-loader'
    },{
      test: /\.sass$/,
      use: extractSass.extract({
        use: [{
          loader: "css-loader",
          options: { url: false }
        }, {
          loader: "sass-loader"
        }],
        // use style-loader in development
        fallback: "style-loader"
      })
    }]
  },
  resolve: {
    extensions: ['.json', '.js', '.jsx', '.css', 'sass']
  },
  devtool: 'source-map',
  plugins: [
    extractSass
  ]
};