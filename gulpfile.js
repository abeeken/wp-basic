var gulp = require('gulp');
var sass = require('gulp-sass');
var cssnano = require('gulp-cssnano');
var rename = require('gulp-rename');
var jsnano = require('gulp-minify');
var concat = require('gulp-concat');

var jsfiles =[
    'js/parts/globals.js',
    'js/parts/scripts.js'
];

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

gulp.task('js', function(){
    return gulp.src(jsfiles)
        .pipe(concat('scripts.js'))
        .pipe(gulp.dest('js'))
        .pipe(jsnano())
        .pipe(gulp.dest('js'))
});