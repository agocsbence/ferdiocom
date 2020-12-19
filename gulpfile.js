const gulp = require('gulp'),
      sass = require('gulp-sass'),
      postcss = require('gulp-postcss'),
      autoprefixer = require('autoprefixer'),
      cssnano = require('cssnano'),
      minify = require('gulp-minify'),
      concat = require('gulp-concat'),
      imagemin = require('gulp-imagemin');

sass.compiler = require('node-sass');
 
gulp.task('styles', function () {
  var processors = [
    autoprefixer(),
    cssnano({zindex: false})
  ];
  return gulp.src('src/assets/scss/style.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(postcss(processors))
    .pipe(gulp.dest('dist/assets/css/'));
});

gulp.task('imagemin', async function () {
  gulp.src('./src/assets/img/**/*')
    .pipe(imagemin())
    .pipe(gulp.dest('./dist/assets/img'))
});

gulp.task('fonts', function() {
  return gulp.src('src/assets/scss/fonts/**/*')
    .pipe(gulp.dest('dist/assets/css/fonts/'));
});

gulp.task('scripts', function(){
  return gulp.src('src/assets/js/**/*.js')
    .pipe(concat('scripts.js'))
    .pipe(minify())
    .pipe(gulp.dest('dist/assets/js'))
});

gulp.task('copyCSS', function() {
  return gulp.src('src/assets/css/*.css')
    .pipe(gulp.dest('dist/assets/css/'));
});

gulp.task('copyHTML', function() {
  return gulp.src('src/**/*.html')
    .pipe(gulp.dest('dist/'));
});

gulp.task('copyPHP', function(){
  return gulp.src('src/**/*.php')
    .pipe(gulp.dest('dist/'));
});

gulp.task('copyWPimage', function(){
  return gulp.src('src/screenshot.png')
    .pipe(gulp.dest('dist/'));
});

gulp.task('copyWPstyle', function(){
  return gulp.src('src/style.css')
    .pipe(gulp.dest('dist/'));
});

gulp.task('watch', function () {
  gulp.watch('./src/assets/scss/**/*.scss', gulp.series('styles'));
  console.log('gulp is watching for SCSS changes 👀');
  gulp.watch('./src/**/*.html', gulp.series('copyHTML'));
  console.log('gulp is watching for changes in HTML files ⌨️');
  gulp.watch('./src/assets/js/**/*.js', gulp.series('scripts'));
  console.log('gulp is watching for changes in Javascript files ⌨️');
  return;
});
gulp.task('watchWP', function () {
  gulp.watch('./src/assets/scss/**/*.scss', gulp.series('styles'));
  console.log('gulp is watching for SCSS changes 👀');
  gulp.watch('./src/**/*.php', gulp.series('copyPHP'));
  console.log('gulp is watching for changes in PHP files ⌨️');
  gulp.watch('./src/assets/js/**/*.js', gulp.series('scripts'));
  console.log('gulp is watching for changes in Javascript files ⌨️');
  return;
});

gulp.task('wordpress', gulp.series('copyWPimage', 'copyWPstyle', 'copyPHP', 'watchWP'));
gulp.task('default', gulp.series('imagemin', 'fonts', 'copyHTML', 'copyCSS', 'scripts', 'styles', 'watch'));