const path = require( 'path' );	

const JS_DIR = path.resolve( __dirname, 'src');
const BUILD_DIR = path.resolve( __dirname, 'assets/js');

const entry = JS_DIR + '/index.js';

const output = {
	path: BUILD_DIR,
	filename: 'main.js',
};

const rules = [
	{
		test: /\.js$/,
		exclude: /node_modules/,
		use: 'babel-loader'
	}
];


module.exports = {
   entry: entry,
   output: output,
   devtool: 'source-map',
   module: {
		rules: rules,
	},
 };