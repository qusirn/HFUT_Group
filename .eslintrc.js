// https://eslint.org/docs/user-guide/configuring

module.exports = {
  root: true,
  parserOptions: {
    parser: 'babel-eslint'
  },
  env: {
    browser: true,
  },
  extends: [
    // https://github.com/vuejs/eslint-plugin-vue#priority-a-essential-error-prevention
    // consider switching to `plugin:vue/strongly-recommended` or `plugin:vue/recommended` for stricter rules.
    // https://github.com/standard/standard/blob/master/docs/RULES-en.md
    'standard',
  ],
  // required to lint *.vue files
  plugins: [
    'html'
  ],
  "globals": {
        "$": true,
		"Vue": true,
        "jQuery": true
    },
  // add your custom rules here
  'rules': {
    // allow paren-less arrow functions 要求箭头函数的参数使用圆括号
    'arrow-parens': 0,
    // allow async-await 强制 generator 函数中 * 号周围使用一致的空格
    'generator-star-spacing': 0,
    // allow debugger during development
    'no-debugger': process.env.NODE_ENV === 'production' ? 2 : 0,
	'indent': 	["error", 4, {"SwitchCase": 1}],
	"no-unused-vars": [0, {     
      "vars": "local",   
      "args": "none"   
  }]
  }
}
