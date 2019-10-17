var gulp = require('gulp');
var Server = require('karma').Server;

/**
 * Run test once and exit
 */
gulp.task('test', function (done) {
  new Server({
    configFile: __dirname + '/karma.conf.js',
    singleRun: true
  }, karmaCompleted).start();


  function karmaCompleted(karmaResult) {
    console.log('Karma completed');
    
    if (karmaResult === 1) {
        done('karma: tests failed with code ' + karmaResult);
    } else {
        console.log('Karma completted successfully, calling gulp done()' );
        done();
    }
}

});

/**
 * Watch for file changes and re-run tests on each change
 */
gulp.task('watch', function (done) {
  new Server({
    configFile: __dirname + '/karma.conf.js'
  }, done).start();
});

gulp.task('default', gulp.series('watch',function(){
  
}));