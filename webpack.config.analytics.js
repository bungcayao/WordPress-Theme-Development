const path = require('path');
const ExtractTextPlugin = require('extract-text-webpack-plugin');
const CopyWebpackPlugin = require('copy-webpack-plugin');
const CleanWebpackPlugin = require('clean-webpack-plugin');
const autoprefixer = require('autoprefixer');
const UglifyJsPlugin = require("uglifyjs-webpack-plugin");

module.exports = {
	entry: {
    analytics: ['./assets/js/_analytics.js'],
	},
	output: {
		filename: './dist/[name].js',
		sourceMapFilename: './assets/[name].map',
	},
  module: {
    rules: [
      {
        test: /\.js$/,
        exclude: /(node_modules|bower_components)/,
        use: {
          loader: 'babel-loader',
          options: {
            presets: ['env'],
            plugins: [require('babel-plugin-transform-object-rest-spread')]
          }
        }
      },
    ]
  },
  devtool: 'source-map',
  plugins: [
    // Uglify
    new UglifyJsPlugin({
      uglifyOptions: {
        compress: {
          warnings: false,
          drop_console: true
        }
      }
    })
  ]
}