var gulp   = require('gulp'),
		sass = require('gulp-sass'),
		autoprefixer = require('gulp-autoprefixer'),
		concat = require('gulp-concat');

// browserSync browserSync browserSync browserSync browserSync browserSync		

		browserSync = require('browser-sync'),
		reload = browserSync.reload;

gulp.task('browserSync', function(){
	browserSync.init({
		proxy: 'http://localhost:8888/kalin-week7project/'
	});
});

// browserSync browserSync browserSync browserSync browserSync browserSync
// just addition of 'browserSync', 

gulp.task('default', ['browserSync', 'styles', 'watch']);

// browserSync browserSync browserSync browserSync browserSync browserSync

gulp.task('styles', function() {
	return gulp.src('sass/**/*.scss')
		.pipe(sass({
			'sourcemap=none': true,
			errLogToConsole: true
		}))
		.pipe(concat('style.css'))
		.pipe(gulp.dest('.'))

// browserSync browserSync browserSync browserSync browserSync browserSync

		.pipe(reload({ stream: true }));

// browserSync browserSync browserSync browserSync browserSync browserSync

});

// configure which files to watch and what tasks to use on file changes
gulp.task('watch', function() {
	gulp.watch('sass/**/*.scss', ['styles']);

// browserSync browserSync browserSync browserSync browserSync browserSync

	gulp.watch('**/*.php', reload);	

// browserSync browserSync browserSync browserSync browserSync browserSync

});