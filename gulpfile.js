var gulp = require('gulp');
var sass = require('gulp-sass');
var cssnano = require('gulp-cssnano');
var rename = require('gulp-rename');

gulp.task('sass', function(){
    return gulp.src('sass/main.scss')
        .pipe(sass())
        .pipe(gulp.dest('css'))
});

gulp.task('minicss', function(){
    return gulp.src('css/main.css')
        .pipe(cssnano())
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(gulp.dest('css'))
});