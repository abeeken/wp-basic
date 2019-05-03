var distname = "wp-basic";

var gulp = require('gulp');
var sass = require('gulp-sass');
var cssnano = require('gulp-cssnano');
var rename = require('gulp-rename');
var jsnano = require('gulp-minify');
var concat = require('gulp-concat');
var del = require('del');
var zip = require('gulp-zip');

var jsfiles =[
    'js/parts/globals.js',
    'js/parts/scripts.js'
];

var sourcefiles = [
    '*.php',
    'style.css',
    'css/**/*',
    'fns/**/*',
    'parts/**/*',
    'js/*'
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

gulp.task('clean', function () {
    return del('dist/**/*');
});

gulp.task('makedist', function(){
    return gulp.src(sourcefiles,{ base: '.' })
        .pipe(gulp.dest('dist/'+distname))
});

gulp.task('makezip', function(){
    return gulp.src('dist/'+distname+'/*')
        .pipe(zip(distname+'.zip'))
        .pipe(gulp.dest('dist'))
});

gulp.task('build', gulp.series('clean', 'sass', 'minicss', 'js', 'makedist', 'makezip'), function(){});

gulp.task('watch', function(){
    gulp.watch('sass/*.scss', gulp.series('sass','minicss'));
    gulp.watch('js/parts/*.js', gulp.series('js'));
});