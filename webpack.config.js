const path = require('path');
const webpack = require('webpack');
const ExtractTextPlugin = require("extract-text-webpack-plugin");
const OptimizeCssAssetsPlugin = require('optimize-css-assets-webpack-plugin');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');
const CopyPlugin = require('copy-webpack-plugin');
var ImageminPlugin = require('imagemin-webpack-plugin').default;
const PurifyCSSPlugin = require('purifycss-webpack')
const glob = require('glob-all')


const isProduction = (process.env.NODE_ENV === 'production');

const config = {
	entry: {
        app: [
            './assets/js/all.js',
            './assets/css/style.scss'
        ]
	},
	output: {
		filename: '[name].js',
		path: path.resolve(__dirname, 'dist/js/'),
    },
    devtool: 'source-map',
	module: {
		rules: [
			{
				test: /\.scss$/,
				use: ExtractTextPlugin.extract({
                    use: ['css-loader', 'postcss-loader', 'sass-loader'],
                    fallback: 'style-loader'
				}),
            },
            {
                test: /\.png|je?pg|gif|svg$/,
                loaders: [
                    {
                        loader: 'file-loader',
                        options: {
                            name: '../images/[folder]/[name].[ext]'
                        }
                    },
                    'img-loader'
                ]
            },
            {
                test: /\.(woff(2)?|ttf|eot|svg)(\?v=\d+\.\d+\.\d+)?$/,
                use: [
                {
                    loader: 'file-loader',
                    options: {
                    name: '[name].[ext]',
                    outputPath: '../fonts/'
                    }
                }
                ]
            },
			{
				test: /\.js$/,
				exclude: /(node_modules|bower_components)/,
				loader: 'babel-loader',
				query: {
					presets: ['es2015']
				}
			}
		]
	},
	plugins: [
        new CopyPlugin([{ from: path.resolve(__dirname, 'assets/images'), to: path.resolve(__dirname, 'dist/images') }]),
        new ImageminPlugin({ 
            test: '../images/**', 
            optipng: {
                optimizationLevel: 1
            } 
        }),
        new ExtractTextPlugin('../css/[name].css'),
        new webpack.LoaderOptionsPlugin({
            minimize: isProduction
        }),
		new BrowserSyncPlugin({
            browser: 'google chrome',
            host: 'labgenomic.test',
            proxy: 'labgenomic.test',
            port: 3000,
            files: [
                '**/*.css',
                '**/*.js',
                '**/*.php',
            ]
        }),
        new PurifyCSSPlugin({
            paths: glob.sync([path.join(__dirname, '*.php'), path.join(__dirname, '**/*.php')])
        }),
	]
};

//If true JS and CSS files will be minified
if (isProduction) {
	config.plugins.push(
        new webpack.optimize.UglifyJsPlugin(),
        new OptimizeCssAssetsPlugin(),
	);
}

module.exports = config;