const path = require('path');
const webpack = require('webpack');

const ExtractTextPlugin = require("extract-text-webpack-plugin");

const extractSass = new ExtractTextPlugin({
  filename: "css/style.css",
  disable: process.env.NODE_ENV === "development"
});

const jQueryPlugin = new webpack.ProvidePlugin({
  $: "jquery",
  jQuery: "jquery",
  "window.jQuery": 'jquery'
});

module.exports = {
  entry: [
    './src/sass/main.sass',
    './src/js/main.js'
  ],
  output: {
    path: path.resolve(__dirname, 'public/assets'),
    filename: 'js/main.js'
  },
  module: {
    rules: [ 
      // {Ajout de modules supplémentaires}
      {
        test: /\.jsx?$/,
        include: [
          path.resolve(__dirname, 'src')
        ],
        exclude: [
          path.resolve(__dirname, 'node_modules'),
          path.resolve(__dirname, 'bower_components')
        ],
        loader: 'babel-loader'
      },
      {
        test: /\.sass$/,
        use: extractSass.extract({
          use: [{
            loader: "css-loader",
            options: { 
              url: false 
            }
          }, {
            loader: "sass-loader"
          }],
          // use style-loader in development
          fallback: "style-loader"
        })
      }
    ]
  },
  resolve: {
    extensions: ['.json', '.js', '.jsx', '.css', 'sass']
  },
  devtool: 'source-map',
  plugins: [
    extractSass,
    jQueryPlugin
  ]
};