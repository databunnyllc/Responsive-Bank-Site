const gulp = require('gulp');
const sass = require('gulp-sass');

gulp.task('sass', function() {
    return gulp.src('public/src/*.scss')
    .pipe(sass())
    .pipe(gulp.dest('public/src'))
}); 