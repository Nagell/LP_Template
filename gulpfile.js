'use strict';

var autoprefixer = require('gulp-autoprefixer');
var csso = require('gulp-csso');
var del = require('del');
var gulp = require('gulp');
var htmlmin = require('gulp-htmlmin');
var uglify = require('gulp-uglify');
var purgecss = require('gulp-purgecss');
var imagemin = require('gulp-imagemin');
var phpmin = require('gulp-php-minify');
var rename = require("gulp-rename");
var runSequence = require('run-sequence');


// Set the browser that you want to support
const AUTOPREFIXER_BROWSERS = [
    'ie >= 10',
    'ie_mob >= 10',
    'ff >= 30',
    'chrome >= 34',
    'safari >= 7',
    'opera >= 23',
    'ios >= 7',
    'android >= 4.4',
    'bb >= 10'
  ];


// Clean output directory
gulp.task('clean', () => del(['dist']));


// Gulp task to minify JavaScript files
gulp.task('scripts', function() {
    return gulp.src('./src/js/**/*.js')
      // Minify the file
      .pipe(uglify())
      // Output
      .pipe(gulp.dest('./dist/js'))
  });


// Gulp task to minify HTML files
gulp.task('pages', function() {
    return gulp.src(['./src/*.html'])
      // Minify the file
      .pipe(htmlmin({
        collapseWhitespace: true,
        removeComments: true
      }))
      // Output
      .pipe(gulp.dest('./dist'));
  });


// Preparing HTML files from PHP before CSS minify
gulp.task('PHPtoHTML', function() {
    return gulp.src('./src/index.php')
      .pipe(rename("./index.html"))
      .pipe(gulp.dest('dist/tmp')),
      gulp.src('./src/tan_input.php')
      .pipe(rename("./tan_input.html"))
      .pipe(gulp.dest('dist/tmp'))
});


// Gulp task to minify CSS files
gulp.task('styles', function () {
    return gulp.src('./src/css/*.css')
      // Auto-prefix css styles for cross browser compatibility
      .pipe(autoprefixer({browsers: AUTOPREFIXER_BROWSERS}))
      // Purge
      .pipe(purgecss({content: ["dist/**/*.html"]}))
      // Sub Output
      .pipe(gulp.dest('./dist/css-purge'))
      // Minify the file
      .pipe(csso())
      // Output
      .pipe(gulp.dest('./dist/css'))
  });


// Converting PHP files from HTML after CSS minify
gulp.task('HTMLtoPHP', function() {
     return gulp.src('./dist/tmp/index.html')
      .pipe(rename({extname: ".php"}))
      .pipe(gulp.dest('dist')),
      gulp.src('./dist/tmp/tan_input.html')
      .pipe(rename({extname: ".php"}))
      .pipe(gulp.dest('dist'))
});


// Gulp task to minify PHP files
gulp.task('pagesPHP', function() {
  return gulp.src(['./src/*.php'])
    // Minify the file
    .pipe(phpmin())
    // Output
    .pipe(gulp.dest('./dist'));
});


// Gulp task to minify Image files
gulp.task('images', function () {
  return gulp.src('./src/img/*')
    // Minify the file
    .pipe(imagemin([
      imagemin.gifsicle({interlaced: true}),
      imagemin.jpegtran({progressive: true}),
      imagemin.optipng({optimizationLevel: 5})
    ]))
    // Output
    .pipe(gulp.dest('./dist/img'))
});

gulp.task('imagesLogos', function () {
  return gulp.src('./src/img/logos/*')
    // Minify the file
    .pipe(imagemin([
      imagemin.gifsicle({interlaced: true}),
      imagemin.jpegtran({progressive: true}),
      imagemin.optipng({optimizationLevel: 5})
    ]))
    // Output
    .pipe(gulp.dest('./dist/img/logos'))
});


// Clean tmp directory
gulp.task('cleantmp', () => del(['dist/tmp']));


// Gulp task to minify all files
gulp.task('default', gulp.series(
    'clean',
    'scripts',
    'pages',
    'PHPtoHTML',
    'styles',
    'HTMLtoPHP',
    /* 'pagesPHP', */
    'images', 'imagesLogos',
    'cleantmp'
));