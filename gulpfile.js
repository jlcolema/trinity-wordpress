/* ------------------------------
 * Gulp
 * --------------------------- */

// Notes...

/* Plugins
 * --------------------------- */

// Notes...

const gulp = require('gulp');

const concat = require('gulp-concat');
const uglify = require('gulp-uglify');
const sass = require('gulp-sass')(require('sass'));
const autoprefixer = require('gulp-autoprefixer');
// const imagemin = require('gulp-imagemin');
const browsersync = require('browser-sync');

/* Directories
 * --------------------------- */

// Notes...

const basePaths = {
	src: 'src/',
	dist: 'app/public/wp-content/themes/trinity/',
	assets: 'dist/public/wp-content/themes/trinity/assets/'
};

/* Sass
 * --------------------------- */

// Notes...

gulp.task('sass', function() {

	return gulp.src(basePaths.src + 'scss/styles.scss')

	.pipe(sass({
		outputStyle: 'compressed',
		precision: 9
	}).on('error', sass.logError))

	.pipe(autoprefixer({
		// browsers: ['last 2 versions'],
		cascade: false
	}))

	.pipe(gulp.dest(basePaths.assets + 'css'))

	.pipe(browsersync.stream());

});

/* JavaScript
 * --------------------------- */

// Notes...

gulp.task('js', function() {

	return gulp.src([

		// Libraries

		// basePaths.src + 'js/libraries/jquery.3.5.1.js',

		// Plugins

		// basePaths.src + 'js/plugins/name-of-plugin.js',
		basePaths.src + 'js/glide/glide.js',

		// Functions

		basePaths.src + 'js/functions.js'

	])

	.pipe(concat('scripts.js'))

	// .pipe(rename({
		// suffix: '.min'
	// }))

	.pipe(uglify())

	.pipe(gulp.dest(basePaths.assets + 'js'))

	.pipe(browsersync.stream());

});

/* Images
 * --------------------------- */

// Notes...

// gulp.task('img', function() {

	// return gulp.src(basePaths.src + 'img/**/*')

	// .pipe(imagemin({
		// optimizationLevel: 5,
		// progressive: true,
		// interlaced: true
	// }))

	// .pipe(gulp.dest(basePaths.assets + 'img'));

// });

/* Fonts
 * --------------------------- */

// Notes...

gulp.task('fonts', function() {

	return gulp.src(basePaths.src + 'fonts/**/*')

	.pipe(gulp.dest(basePaths.assets + 'fonts'));

});

/* Watch
 * --------------------------- */

// Notes...

gulp.task('watch', function() {

	browsersync.init({
		proxy: "http://wordpress.trinity.local",
		host: "wordpress.trinity.local",
		server: {
			// baseDir: "dist/html",
			// directory: false
		},
		open: "local",
		// browser: 'microsoft edge'
	});

	gulp.watch(basePaths.src + 'scss/**/*.scss', gulp.series('sass'));

	gulp.watch(basePaths.src + 'js/**/*.js', gulp.series('js'));

	// gulp.watch(basePaths.src + 'img/**/*', gulp.series('img'));

	gulp.watch(basePaths.src + 'fonts/**/*', gulp.series('fonts'));

	gulp.watch(basePaths.dist + '**/*.php').on('change', browsersync.reload);

});

/* Run
 * --------------------------- */

// Notes...

// gulp.task('default', gulp.parallel('sass', 'js', 'img', 'fonts', 'watch'));

gulp.task('default', gulp.parallel('sass', 'js', 'fonts', 'watch'));
