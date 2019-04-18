const path = require('path');
const ExtractTextPlugin = require('extract-text-webpack-plugin') ;
const CopyWebpackPlugin = require('copy-webpack-plugin') ;
const CleanWebpackPlugin = require('clean-webpack-plugin') ;
const autoprefixer = require('autoprefixer') ;

module.exports = {
	entry: {
    bundle: ['./assets/js/_bundle.js', './assets/sass/style.scss' ],
    analytics: ['./assets/js/_analytics.js'],
	},
	output: {
		filename: './dist/[name].js',
    sourceMapFilename: './assets/[name].map',
    library: 'popLibrary'
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
    // Destroy/Cleans ./dist folder
    new CleanWebpackPlugin('./dist/'),
    // Create/Compiles CSS file
    new ExtractTextPlugin(
      {
        filename: './dist/style.css',
        allChunks: true
      }
    ),
    // Copy to ./dist folder
    new CopyWebpackPlugin([
      // Theme Images
      {
        from: './assets/images/',
        to: './dist/images/'
      },
      // Trackable Downloads
      {
        from: './assets/downloads/',
        to: './dist/downloads/'
      },
      // jQuery Library
			{
				from: './node_modules/jquery/dist/jquery.min.js',
				to: './dist/'
      }
    ])
  ]
}
