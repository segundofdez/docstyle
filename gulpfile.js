// common
var gulp = require('gulp'),
    rename = require('gulp-rename'),
    watch = require('gulp-watch'),
    notify = require('gulp-notify'),
    runSequence = require('run-sequence'),

    // styles
    less = require('gulp-less');
    autoprefixer = require('gulp-autoprefixer'),
    minifycss = require('gulp-minify-css'),

    // js
    concat = require('gulp-concat'),
    fs = require('fs'),
    uglify = require('gulp-uglify');


/**
* Gulp errors
*/
function swallowError (error) {
    console.log(error.toString());
    this.emit('end');
}


/**
* Task less: less, errors, autoprefixer, minified, rename, notify, sourcemaps and browserSync
*/
gulp.task('less', function () {
    var less_src_import = 'source/styles/main.less';
    var less_dest_folder = 'public/css/';

    var minOpts = {processImport:true, keepSpecialComments:false};

    return gulp.src(less_src_import)
        .pipe(less())
        .on('error', swallowError)
        .pipe(autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1'))
        .pipe(minifycss(minOpts))
        //.pipe(sourcemaps.init())
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(gulp.dest(less_dest_folder))
        .pipe(notify("Less compiled, prefixed and minified"))
});


/**
* Task js concat and minified
*/
gulp.task('js', function () {
    var dest_folder = 'public/js/';
    var vendorJs = JSON.parse(fs.readFileSync('./source/js/js.json'));
    var src = [];

    for(var item in vendorJs.js) {
        src.push(vendorJs.js[item].src);
    }

    return gulp.src(src)
        .on('error', swallowError)
        .pipe(concat('main.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest(dest_folder))
        .pipe(notify({message:"Compress js"})
    );
});


/**
* Task gulp-watch
*/
gulp.task('watch', function () {
    gulp.watch(['source/styles/**/*.less'], ['less']);
    gulp.watch(['source/js/main.js', 'source/js/js.json'], ['js']);
});