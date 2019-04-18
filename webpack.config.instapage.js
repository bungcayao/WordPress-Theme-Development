const path = require('path');
const ExtractTextPlugin = require('extract-text-webpack-plugin') ;
const CopyWebpackPlugin = require('copy-webpack-plugin');
//const CleanWebpackPlugin = require('clean-webpack-plugin');
const autoprefixer = require('autoprefixer') ;
const UglifyJsPlugin = require("uglifyjs-webpack-plugin");


module.exports = {
	entry: {
		bundle: ['./assets/js/_bundle.js', './assets/sass/style.scss' ]
	},
	output: {
		filename: './dist/[name].instapage.js',
		sourceMapFilename: './assets/[name].instapage.map'
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
      {
        test: /\.scss$/,
        use: ExtractTextPlugin.extract({
          use: [
            {
              loader: 'css-loader',
              options: {
                minimize: true,
                sourceMap: true,
                sourceMapFilename: 'style.css.map'
              }
            },
            {
              loader: 'postcss-loader',
              options: {
                sourceMap: true,
                sourceMapFilename: 'style.css.map',
                plugins: () => [autoprefixer]
              }
            },
            {
              loader: 'sass-loader',
              options: {
                sourceMap: true,

              }
            },
          ],
          fallback: 'style-loader',
          publicPath: '/assets/'
        })
      },
    ]
  },
  devtool: 'source-map',
  plugins: [
    new ExtractTextPlugin({
      filename: './dist/style.instapage.css',
      allChunks: true
    }),
    new CopyWebpackPlugin([ // Copy to ./dist folder
      // SEO Verification
      {
        from: './assets/js/seo-verification.instapage.js',
        to: './dist/seo-verification.instapage.js'
      },
      // Shared Header Functions (Intercom, Alexa, etc)
      {
        from: './assets/js/header.instapage.js',
        to: './dist/header.instapage.js'
      },
      // Shared Footer Functions (Custom JS Needed)
      {
        from: './assets/js/footer.instapage.js',
        to: './dist/footer.instapage.js'
      },
      // Header, Footer Menu's(Custom JS Needed)
      {
        from: './assets/js/pop-instapage.js',
        to: './dist/pop-instapage.js'
      }
    ]),
    // Uglify 
    // new UglifyJsPlugin()
  ]
}
