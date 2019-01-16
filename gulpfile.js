var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var sourcemaps = require('gulp-sourcemaps');
var cleanCSS = require('gulp-clean-css');
 
gulp.task('styles', function() {
 
    return gulp.src('sass/**/*.scss') //source à inspecter
    	.pipe(sourcemaps.init()) //initialisation de sourcemap
        .pipe(sass().on('error', sass.logError)) //affichage des erreurs si il y a
        .pipe(sourcemaps.write()) //correspondances de fichier sass>css  
        .pipe(autoprefixer()) //prefixer les propriétés css au besoin
        .pipe(gulp.dest('./')) //destination des fichiers compilés sass en css
 
});

 
gulp.task('mini', () => {
  return gulp.src('style.css')
    .pipe(cleanCSS({compatibility: 'ie8'}))
    .pipe(gulp.dest('./'));
});


//Watch task
gulp.task('default',function() {
     gulp.watch('sass/**/*.scss', gulp.series('styles'));
});