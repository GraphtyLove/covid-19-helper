const path = require('path');
const connect = require('connect');
const serveStatic = require('serve-static');

connect().use(serveStatic(path.resolve(__dirname, 'public'))).listen(3333, function(){
    console.log('Server running on http://127.0.0.1:3333/...');
});
