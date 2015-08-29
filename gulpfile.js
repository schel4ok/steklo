var elixir = require('laravel-elixir');
var gulp = require('gulp');
var imageResize = require('gulp-image-resize');

elixir.extend('thumbs', function() {
gulp.task('thumbs', function () {
  gulp.src('resources/assets/img/*.jpg')
    .pipe(imageResize({ 
      width : 640,
      height : 480,
      //crop : true,
      upscale : false
    }))
    .pipe(gulp.dest('public/img'));
});
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
  .copy('vendor/bower_components/lightbox/css/lightbox.css', 'resources/assets/img/lightbox/lightbox.css')  
  .copy('vendor/bower_components/lightbox/css/screen.css', 'resources/assets/img/lightbox/screen.css')  
 	.copy('vendor/bower_components/lightbox/img', 'resources/assets/img/lightbox')  

	// Copy fonts
	.copy('vendor/bower_components/bootstrap/fonts', 'resources/assets/fonts')
 	.copy('vendor/bower_components/fontawesome/fonts', 'resources/assets/fonts')
 	.copy('vendor/bower_components/fontawesome/less', 'resources/assets/less/fontawesome')
  	.copy('resources/assets/fonts', 'public/fonts')

	// Copy java
 	.copy('vendor/bower_components/jquery/dist/jquery.js', 'resources/js/1-jquery.js')  
 	.copy('vendor/bower_components/bootstrap/dist/js/bootstrap.js', 'resources/js/2-bootstrap.js')  
 	.copy('vendor/bower_components/lightbox/js/lightbox.js', 'resources/js/3-lightbox.js')  

 	.less('app.less')   // если в скобках оставить пустое место, то compile all less files in resources/assets/less
    //.stylesIn('resources/assets/css') // combine all css files in a directory 
 	.scripts() //  combine all scripts in resources/js directory
  .version([
    	'public/css/app.css',
    	'public/js/all.js'
    	])  // присваивает версию. зачем-то надо для кеширования

});
// команда gulp компилирует все скрипты и выполняет все команды одновременно
// команда gulp --production кроме того минифицирует все файлы
// разобраться с командой imagemin