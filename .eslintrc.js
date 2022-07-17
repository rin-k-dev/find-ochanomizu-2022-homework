const defaultConfig = require("@wordpress/scripts/config/.eslintrc.js");
module.exports = {
	...defaultConfig,
	globals: {
		...defaultConfig.globals,
	},
	ignorePatterns: ["js/jquery.inview.min.js"],
	rules: {
		...defaultConfig.rules,
		'no-console': 'off',
		'@wordpress/no-unsafe-wp-apis': 'off',
	},
	parserOptions: {
		ecmaVersion: 'latest',
	},
	env: {
		browser: true,
		jquery: true,
	},
};
