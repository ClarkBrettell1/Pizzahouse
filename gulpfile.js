//initialise modules
const autoprefixer = require('autoprefixer');
const cssnano = require('cssnano');
const {src, dest, watch, series, parallel} = require('gulp');
const concat = require('gulp-concat');
const postcss = require('postcss');
const replace = require('gulp-replace');
const sourcemaps = require('gulp-sourcemaps');
const uglify = require('gulp-uglify');
const less = require('gulp-less');

 


//File Path Variables
const files = {
    lessPath: 'public/less/**/*.less',
    jsPath: 'public/js/**/*.js'
}

//Sass task
function lessTask() {
    return src(files.lessPath)
        .pipe(sourcemaps.init())
        .pipe(less())
        .pipe(sourcemaps.write())
        .pipe(dest('dist')
        );
}

//Js Task
function jsTask() {
    return src(files.jsPath)
        .pipe(concat('all.js'))
        .pipe(uglify())
        .pipe(dest('dist')
        );
}

//Cachebusting Task
const cbstring = new Date().getTime();
function cacheBustTask(){
    return src(['index.html'])
    pipe(replace(/cb=\d+/g, 'cb=' + cbstring))
    .pipe(dest('.')
    );
}


//Watch
function watchTask(){
    watch([files.lessPath, files.jsPath],
        parallel(lessTask, jsTask));
}

//default task
exports.default = series(
    parallel(lessTask, jsTask),
    cacheBustTask,
    watchTask
);