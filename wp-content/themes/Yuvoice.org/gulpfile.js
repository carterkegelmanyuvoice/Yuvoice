const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass')); // ✅ Dart Sass
const sourcemaps = require('gulp-sourcemaps');
const autoprefixer = require('gulp-autoprefixer');
const cssnano = require('gulp-cssnano');
const plumber = require('gulp-plumber');
const babel = require('gulp-babel');
const concat = require('gulp-concat');
const uglify = require('gulp-uglify');
const imagemin = require('gulp-imagemin');
const newer = require('gulp-newer');
const browserSync = require('browser-sync').create();

// Paths
const paths = {
  styles: {
    src: 'assets/styles/scss/style.scss',
    dest: 'assets/styles'
  },
  scripts: {
    src: 'assets/js/**/*.js',
    dest: 'assets/js'
  },
  images: {
    src: 'assets/img/**/*',
    dest: 'assets/img'
  }
};

// Compile SCSS to CSS
gulp.task('styles', function () {
  console.log('Running styles task...');
  return gulp.src('assets/styles/scss/*.scss') // 👈 grab all entry-point SCSS files
    .pipe(plumber())
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(autoprefixer())
    .pipe(cssnano())
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest('assets/styles')) // 👈 outputs to the matching CSS folder
    .pipe(browserSync.stream());
});


// Compile and minify JS
gulp.task('scripts', function () {
  return gulp.src(paths.scripts.src)
    .pipe(plumber())
    .pipe(sourcemaps.init())
    .pipe(concat('main.js'))
    .pipe(babel({ presets: ['es2015'] }))
    .pipe(uglify())
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest(paths.scripts.dest))
    .pipe(browserSync.stream());
});

// Optimize images
gulp.task('images', function () {
  return gulp.src(paths.images.src)
    .pipe(newer(paths.images.dest))
    .pipe(imagemin())
    .pipe(gulp.dest(paths.images.dest));
});

// BrowserSync
gulp.task('browsersync', function () {
  browserSync.init({
    proxy: "http://localhost:8085", // You may want to customize this
    notify: false
  });
});

// Watch files
gulp.task('watch', function () {
  gulp.watch(paths.styles.src, gulp.series('styles'));
  gulp.watch(paths.scripts.src, gulp.series('scripts'));
  gulp.watch(paths.images.src, gulp.series('images'));
  gulp.watch('**/*.php').on('change', browserSync.reload);
});

// Default task
gulp.task('default', gulp.parallel('styles', 'scripts', 'images'));
