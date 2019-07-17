var path = require('path');
module.exports = {
  entry: '/home/kalitins/CheatSheets/#my/scrpts/blackchaose.ascetic-fileget/src/ascetic-fileget.js',
  output: {
    path: '/home/kalitins/CheatSheets/#my/scrpts/blackchaose.ascetic-fileget/public/js',
    filename: 'ascetic-fileget.min.js',
    libraryTarget: 'var',
    library: 'ascetic_'
  },    
  devServer: {
    contentBase: path.join(__dirname, 'public'),
    compress: true,
    port: 9001,
    liveReload: true,
    watchContentBase: true
  },
    mode: 'development',
    watch: true,
    optimization: {
			minimize: true
	}
  };
