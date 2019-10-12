var gulp = require('gulp');
var zip = require('gulp-zip');
var themeName = 'labgenomic';

function upload() {
    return gulp.src([
        '*',
        './dist/**/*',
        './inc/**/*',
        './template-parts/*',
        './templates/*',
        '!bower_components',
        '!node_modules',
        '!assets',
        '!.babelrc',
        '!webpack.config.js',
        '!postcss.config.js',
        '!package.json',
        '!gulpfile.js',
        '!.gitignore',
        '!yarn.lock',
        ], {base: "."})
        .pipe(zip(`${themeName}.zip`))
        .pipe(gulp.dest('.'));
}

exports.upload = upload;

gulp.task('zip', gulp.parallel(upload));