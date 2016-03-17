/**
 * Created by steve.gibbings on 16/03/2016.
 */
var gulp =            require('gulp'),
    sass =            require('gulp-sass');


gulp.task('styles-dev', function() {
  return gulp.src('src/scss/*.scss')
    .pipe(sass({ includePaths:'../fabric/src/scss', outputStyle: 'expanded' }).on('error', sass.logError))
    .pipe(gulp.dest('dist/css/'));
});
