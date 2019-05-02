var gulp = require('gulp');
var sass = require('gulp-sass');
var cssnano = require('gulp-cssnano');

gulp.task('sass', function(){
    return gulp.src('sass/main.scss')
        .pipe(sass())
        .pipe(cssnano())
        .pipe(gulp.dest('css'))
});