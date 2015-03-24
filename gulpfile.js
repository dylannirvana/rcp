var gulp          = require('gulp'),
    gutil         = require('gulp-util'),
    browserify    = require('gulp-browserify'),
    compass       = require('gulp-compass'),
    connect       = require('gulp-connect'),
    gulpif        = require('gulp-if'),
    uglify        = require('gulp-uglify'),
    minifyHTML    = require('gulp-minify-html'),
    concat        = require('gulp-concat'),
    bootstrap     = require('jquery', 'bootstrap-sass'),
    path          = require('path');
    

var env,
    jsSources,
    sassSources,
    htmlSources, 
    outputDir,
    sassStyle;

env = 'development';
// env = process.env.NODE_ENV || 'development';

if (env==='development') {
  outputDir = 'builds/development/';
  sassStyle = 'expanded';
} else {
  outputDir = 'builds/production/';
  sassStyle = 'compressed';
}

// Note: place libraries below as requirements
jsSources = [
  'components/scripts/jqloader.js',
  'components/scripts/TweenMax.min.js',
  'components/scripts/jquery.scrollmagic.min.js',
  'node_modules/bootstrap-sass/assets/javascripts/bootstrap.js',
  'components/scripts/script.js'
];
sassSources = [
  'components/sass/style.scss'
];

htmlSources = [outputDir + '*.html'];
// phpSources = [outputDir + '*.php']; ????

gulp.task('js', function() {
  gulp.src(jsSources)
    .pipe(concat('script.js'))
    .pipe(browserify())
    .on('error', gutil.log)
    .pipe(gulpif(env === 'production', uglify()))
    .pipe(gulp.dest(outputDir + 'js'))
    .pipe(connect.reload())
});

gulp.task('compass', function() {
  gulp.src(sassSources)
    .pipe(compass({
      sass: 'components/sass',
      css: outputDir + 'css',
      image: outputDir + 'images',
      style: sassStyle,
      require: ['susy', 'breakpoint']
    })
    // .pipe(concat('style.css')) // I added this line. Let's see if it works
    .on('error', gutil.log))
//    .pipe(gulp.dest( outputDir + 'css'))
    .pipe(connect.reload())
});

gulp.task('watch', function() {
  gulp.watch(jsSources, ['js']);
  gulp.watch(['components/sass/*.scss', 'components/sass/*/*.scss'], ['compass']);
  gulp.watch('builds/development/*.html', ['html']);
});

gulp.task('connect', function() {
  connect.server({
    root: outputDir,
    livereload: true
  });
});

gulp.task('html', function() { // simply replace html with php????
  gulp.src('builds/development/*.html')
    .pipe(gulpif(env === 'production', minifyHTML()))
    .pipe(gulpif(env === 'production', gulp.dest(outputDir)))
    .pipe(connect.reload())
});

// Copy images to production
gulp.task('move', function() {
  gulp.src('builds/development/images/**/*.*')
  .pipe(gulpif(env === 'production', gulp.dest(outputDir+'images')))
});

gulp.task('default', ['watch', 'html', 'js', 'compass', 'move', 'connect']); // replace html with php???
