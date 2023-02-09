'use strict';
var gulp = require('gulp');
var sass = require('gulp-sass')(require('sass'));;
var concat = require('gulp-concat');

gulp.task('sass', function () {
    return gulp.src('./assets/sass/style.scss')
        .pipe(concat('style.scss'))
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./'));
});


gulp.task('watch', function () {
    //     gulp.watch('', ['sass']);

    gulp.watch('./assets/sass/*.scss', gulp.series('sass'));
    gulp.watch('./assets/sass/*/*.scss', gulp.series('sass'));
});
// gulp.task('sass:watch', function () {
//     gulp.watch('./assets/sass/*.scss', ['sass']);
// });

