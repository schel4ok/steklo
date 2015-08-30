var elixir = require('laravel-elixir');
var gulp = require('gulp');
var imageResize = require('gulp-image-resize');

// почему-то не работает  gulp img-resize-640 выдает ошибку
// если заработает, то image-resize поменять на default
// чтобы ресайз запускался просто командой gulp
gulp.task('img-resize-640', function () {
  gulp.src('/resources/img/*')
    .pipe(imageResize({ width : 640 }))
    .pipe(gulp.dest('/public/img/resize-640'));
});


elixir(function(mix) {
 mix
  // Copy a bootstrap Directory
  .copy('vendor/bower_components/bootstrap/less', 'resources/assets/less/bootstrap')
  // replace a variables from Bootswatch Paper
  .copy('vendor/bower_components/bootswatch/paper/variables.less', 'resources/assets/less/paper-variables.less')  

  // Copy other styles
  .copy('vendor/bower_components/bootswatch/paper/bootswatch.less', 'resources/assets/less/bootswatch.less')  
  .copy('vendor/bower_components/bootstrap-social/bootstrap-social.less', 'resources/assets/less/bootstrap-social.less')

  // Copy lightbox
  .copy('vendor/bower_components/lightbox/src/css/lightbox.css', 'resources/assets/less/lightbox.less')  
  .copy('vendor/bower_components/lightbox/src/images', 'public/images')  

  // Copy fonts
  .copy('vendor/bower_components/bootstrap/fonts', 'public/fonts')
  .copy('vendor/bower_components/fontawesome/fonts', 'public/fonts')
  .copy('vendor/bower_components/fontawesome/less', 'resources/assets/less/fontawesome')

  // Copy java
  .copy('vendor/bower_components/jquery/dist/jquery.js', 'resources/js/1-jquery.js')  
  .copy('vendor/bower_components/bootstrap/dist/js/bootstrap.js', 'resources/js/2-bootstrap.js')  
  .copy('vendor/bower_components/lightbox/src/js/lightbox.js', 'resources/js/3-lightbox.js')  

  .less('app.less')   // если в скобках оставить пустое место, то compile all less files in resources/assets/less
    //.stylesIn('resources/assets/css') // combine all css files in a directory 

  .scriptsIn('resources/js')  //  combine all scripts in resources/js directory. resulting JavaScript will be placed in public/js/all.js
  .version([
      'public/css/app.css',
      'public/js/all.js'
      ])  // присваивает версию. зачем-то надо для кеширования
});
// команда gulp компилирует все скрипты и выполняет все команды одновременно
// команда gulp --production кроме того минифицирует все файлы