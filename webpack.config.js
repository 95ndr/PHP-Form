const path = require('path');
const ExtractTextPlugin = require('extract-text-webpack-plugin')
const CONFIG = {
	entry: './src/js/index.js',
	output: {
		path: path.resolve(__dirname, 'dist/js'),
		filename: 'bundle.js'
	},
	watch: true,
	module: {
		rules: [
			{ 
			  test: /\.scss$/, 
			  use: ExtractTextPlugin.extract({
			  	use:[
			  {
			  	loader : "css-loader"
			  }, 
			  {
			  	loader : "sass-loader"
			  }
			  	]
			  }) 
			}
		]
	},
	plugins: [
		new ExtractTextPlugin("../css/core.min.css")
	]
};

module.exports = CONFIG;