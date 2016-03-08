  var gulp 		          = require('gulp'),
      sass 		          = require('gulp-ruby-sass'),
      autoprefixer      = require('gulp-autoprefixer'),
      swig             = require('gulp-swig'),
      del  		          = require('del'),
      concat            = require('gulp-concat'),
      jshint            = require('gulp-jshint'),
      uglify            = require('gulp-uglify'),
      browserSync       = require('browser-sync').create();

  var config = {
      bowerDir: './bower_components' ,
      npmDir: './node_modules' 
  }

  gulp.task('default', ['clean'], function() {
      gulp.start('styles','icons','jshint', 'scripts', 'fonts', 'images', 'browser-sync');
  });

  gulp.task('clean', function(cb) {
      return del(['assets/dist'], cb)
  });

  gulp.task('styles', function() {
    return sass('app/scss/styles.scss', {
      style: 'expanded',
      loadPath:[
        config.bowerDir + '/fontawesome/scss'
      ]
      })
      .pipe(autoprefixer())
      .pipe(gulp.dest('assets/dist/css'))
      .pipe(browserSync.stream());
  });


gulp.task('jshint', function() {
    return gulp.src([
        'app/js/*.js',
    ]).pipe(jshint()
    ).pipe(jshint.reporter('jshint-stylish'));
});

gulp.task('scripts', function() { 
    return gulp.src([
        'app/js/vendor/*.js',
        'app/js/*.js'
    ])
        .pipe(concat('scripts.js'))
        .pipe(uglify())
        .pipe(gulp.dest('assets/dist/js'))
        .pipe(browserSync.stream());
});

gulp.task('images', function() {
    return gulp.src('app/img/**/*')
        .pipe(gulp.dest('assets/dist/img'))
        .pipe(browserSync.stream());
});

gulp.task('fonts', function() {
    return gulp.src('app/fonts/**/*')
        .pipe(gulp.dest('assets/dist/fonts'));
});


  gulp.task('icons', function() { 
    return gulp.src(config.bowerDir + '/fontawesome/fonts/**.*') 
        .pipe(gulp.dest('assets/dist/fonts'))
        .pipe(browserSync.stream()); 
});

  gulp.task('browser-sync', ['styles'], function() {
    // Static server
    browserSync.init({
         proxy: "http://gamedigest.dev:9000/"
    });

    gulp.watch('app/scss/**/*.scss', ['styles']);
    gulp.watch('app/js/**/*.js', ['jshint', 'scripts']);
    gulp.watch('app/img/**/*', ['images']);
  });
