'use strict';
 
var gulp = require('gulp');
var sass = require('gulp-sass');
 

gulp.task('sass', function () {
  gulp.src('stylesheets/**/*.scss')
  .pipe(sass.sync().on('error', sass.logError))
  .pipe(gulp.dest(''));
});
 
gulp.task('watch', ['sass'], function () {
  gulp.watch('stylesheets/**/*.scss', ['sass']);
});

gulp.task('default', ['sass', 'watch']);




