var gulp = require('gulp'),
    sass = require('gulp-ruby-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    cssnano = require('gulp-cssnano'),
    jshint = require('gulp-jshint'),
    uglify = require('gulp-uglify'),
    imagemin = require('gulp-imagemin'),
    rename = require('gulp-rename'),
    concat = require('gulp-concat'),
    notify = require('gulp-notify'),
    cache = require('gulp-cache'),
    livereload = require('gulp-livereload'),
    del = require('del');

var directory = {
    css: {
        dist: 'dist/css',
        public: 'public/css',
        root: 'css',
    },
    js: {
        dist: 'dist/js',
        public: 'public/js',
        root: 'js',
    },
    img: {
        dist: 'dist/img',
        public: 'public/img',
        root: 'img',
    },
    fonts: {
        dist: 'dist/fonts',
        public: 'public/fonts',
        root: 'fonts',
    }
}

/*
| # Scss
|
| The sass files to be converted as css
| and saved to different folders.
|
| @run  gulp sass
|
*/
gulp.task('sass', function () {
    return sass('resources/sass/app.scss', { style: 'expanded' })
        .pipe(autoprefixer('last 2 version'))
        .pipe(rename({suffix: '.min'}))
        .pipe(cssnano())
        .pipe(gulp.dest(directory.css.dist))
        .pipe(notify({ message: 'Completed compiling SASS Files' }));
});

/*
| # Scripts
|
| The js files to be concatinated
| and saved to different folders.
|
| @run  gulp scripts
|
*/
gulp.task('scripts', function () {
    return gulp.src('resources/scripts/**/*.js')
        .pipe(concat('app.js'))
        .pipe(rename({suffix: '.min'}))
        .pipe(uglify())
        .pipe(gulp.dest(directory.js.dist))
        .pipe(notify({ message: 'Completed compiling JS Files' }));
});

/*
| # Images
|
| The img files to be optimized
| and saved to different folders.
|
| @run  gulp images
|
| @destination
|       - ./img/
*/
gulp.task('images', function () {
    var favDir = directory.fav.root;
    gulp.src('resources/images/favicon/*')
        .pipe(gulp.dest(favDir))
        .pipe(notify({ message: 'Moved Favicons to' + favDir }));

    return gulp.src(['resources/images/**/*', '!resources/images/favicon/*'])
        .pipe(cache(imagemin({ optimizationLevel: 5, progressive: true, interlaced: true })))
        .pipe(gulp.dest(directory.img.root))
        .pipe(notify({ message: 'Images optimization complete' }));
});

/*
| # Clean
|
| @run  gulp clean
*/
gulp.task('clean', function () {
    return del(['css', 'js', 'img']);
});

/*
| # Default Task
|
| @run  gulp default
*/
gulp.task('default', ['clean'], function () {
    gulp.start('sass', 'scripts', 'images');
});

/*
| # Watcher
|
| @run  gulp watch
*/
gulp.task('watch', function () {
    // Create LiveReload server
    // livereload.listen();
    // Watch any files in , reload on change
    // gulp.watch(['**']).on('change', livereload.changed);

    // Watch .scss files
    gulp.watch('resources/sass/**/*.scss', ['sass']);
    // Watch .js files
    gulp.watch('resources/scripts/**/*.js', ['scripts']);
    // Watch image files
    gulp.watch('resources/images/**/*', ['images']);
});