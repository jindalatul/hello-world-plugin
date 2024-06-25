const path = require("path");

module.exports = () => {
	return {
		entry: ["/src/index.js"],
		output: {
			path: path.resolve(__dirname + "/build"),
		},
		module: {
			rules: [
				{
					test: /\.(js|jsx)$/,
					exclude: /node_modules/,
					use: ["babel-loader"],
				}
			],
		},
	};
};
