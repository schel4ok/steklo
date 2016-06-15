var elixir = require('laravel-elixir');
var gulp = require('gulp');


elixir(function(mix) {
 mix
  // Copy a bootstrap Directory
  .copy('vendor/bower_components/bootstrap/less', 'resources/assets/less/bootstrap')
  // replace a variables from Bootswatch Paper
  .copy('vendor/bower_components/bootswatch/paper/variables.less', 'resources/assets/less/paper-variables.less')  

  // Copy other styles
  .copy('vendor/bower_components/bootswatch/paper/bootswatch.less', 'resources/assets/less/bootswatch.less')  
  .copy('vendor/bower_components/bootstrap-social/bootstrap-social.less', 'resources/assets/less/bootstrap-social.less')
  //.copy('vendor/bower_components/selectize/dist/css/selectize.bootstrap3.css', 'resources/assets/less/selectize.bootstrap3.less')

  // Copy lightbox
  //.copy('vendor/bower_components/lightbox/src/css/lightbox.css', 'resources/assets/less/lightbox.less')  
  //.copy('vendor/bower_components/lightbox/src/images', 'public/build/images')  

  // Copy lightgallery
  .copy('vendor/bower_components/lightgallery/dist/css/lightgallery.css', 'resources/assets/less/lightgallery.less')  
  .copy('vendor/bower_components/lightgallery/dist/css/lg-fb-comment-box.css', 'resources/assets/less/lg-fb-comment-box.less')  
  .copy('vendor/bower_components/lightgallery/dist/css/lg-transitions.css', 'resources/assets/less/lg-transitions.less')  
  .copy('vendor/bower_components/lightgallery/dist/img', 'public/build/img')  

  // Copy lightslider
  .copy('vendor/bower_components/lightslider/dist/css/lightslider.css', 'resources/assets/less/lightslider.less')  
  .copy('vendor/bower_components/lightslider/dist/img', 'public/build/img')  

  // Copy fonts
  .copy('vendor/bower_components/bootstrap/fonts', 'public/build/fonts')
  .copy('vendor/bower_components/fontawesome/fonts', 'public/build/fonts')
  .copy('vendor/bower_components/fontawesome/less', 'resources/assets/less/fontawesome')
  .copy('vendor/bower_components/lightgallery/dist/fonts', 'public/build/fonts')

  // Copy java
  .copy('vendor/bower_components/jquery/dist/jquery.js', 'resources/js/1-jquery.js')  
  .copy('vendor/bower_components/bootstrap/dist/js/bootstrap.js', 'resources/js/2-bootstrap.js')  
  .copy('vendor/bower_components/angular/angular.js', 'resources/js/3-angular.js')  
  .copy('vendor/bower_components/lightgallery/dist/js/lightgallery-all.js', 'resources/js/4-lightgallery.js')  
  .copy('vendor/bower_components/lightslider/dist/js/lightslider.js', 'resources/js/5-lightslider.js')  



//vendor\bower_components\modernizr

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