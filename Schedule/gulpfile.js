var gulp         = require('gulp');
var browserSync  = require('browser-sync');
var sass         = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var concatCss    = require('gulp-concat-css');
let cleanCSS     = require('gulp-clean-css');
var uglify 		 = require('gulp-uglify');
var pump 		 = require('pump');

// Static Server + watching sass/html files
gulp.task('serve', ['sass'], function() {

	browserSync.init({
		server: "src/"
	});

	gulp.watch("src/sass/**/*.sass", ['sass']);
	gulp.watch("src/*.html").on('change', browserSync.reload);
});

// Compile sass into CSS & auto-inject into browsers
gulp.task('sass', function() {
	return gulp.src("src/sass/**/*.sass")
		.pipe(sass.sync().on('error', sass.logError))
		.pipe(autoprefixer({
			browsers: ['last 2 versions'],
			cascade: false
		}))
		.pipe(concatCss("style.css"))
		.pipe(gulp.dest("src/css"))
		.pipe(browserSync.stream());
});

gulp.task('minify-css', () => {
  return gulp.src('src/css/*.css')
  	.pipe(cleanCSS({compatibility: 'ie8'}))
    .pipe(cleanCSS({debug: true}, (details) => {
      console.log(`${details.name}: ${details.stats.originalSize}`);
      console.log(`${details.name}: ${details.stats.minifiedSize}`);
    }))
  .pipe(gulp.dest('dist/css'));
});

gulp.task('compress', function (cb) {
  pump([
        gulp.src('src/js/*.js'),
        uglify(),
        gulp.dest('dist/js')
    ],
    cb
  );
});
gulp.task('default', ['serve']);