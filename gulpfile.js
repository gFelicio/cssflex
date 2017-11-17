var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('sass', function()
{
  return gulp.src('resources/assets/sass/**/*.scss')
    .pipe(sass()) // Using gulp-sass
    .pipe(gulp.dest('public/css'))
});

gulp.task('watch', ['sass'], function()
{
    gulp.watch('resources/assets/sass/**/*.scss', ['sass']);
});

gulp.task('default', function () {
  console.log('Yawn! Nothing to run!')
});
