var elixir = require('laravel-elixir');
var gulp = require('gulp');


elixir(function(mix) {
 mix
  // Copy jquery
  .copy('vendor/bower_components/jquery/dist/jquery.js', 'resources/js/1-jquery.js')  

  // Copy bootstrap 
  .copy('vendor/bower_components/bootstrap/less', 'resources/assets/less/bootstrap')
  .copy('vendor/bower_components/bootstrap/dist/js/bootstrap.js', 'resources/js/2-bootstrap.js')  
  .copy('vendor/bower_components/bootstrap/fonts', 'public/build/fonts')

  // bootstrap-material-design
/*  .copy('vendor/bower_components/bootstrap-material-design/less', 'resources/assets/less/bootstrap-material-design')
  .copy('vendor/bower_components/bootstrap-material-design/scripts/material.js', 'resources/js/3.0-material.js')
  .copy('vendor/bower_components/bootstrap-material-design/scripts/ripples.js', 'resources/js/3.1-ripples.js')
*/
  // replace a variables from Bootswatch Paper
  .copy('vendor/bower_components/bootswatch/paper/variables.less', 'resources/assets/less/paper-variables.less')  
  // Copy other styles
  .copy('vendor/bower_components/bootswatch/paper/bootswatch.less', 'resources/assets/less/bootswatch.less')
  .copy('vendor/bower_components/bootstrap-social/bootstrap-social.less', 'resources/assets/less/bootstrap-social.less')
 
   // Copy inputs
  .copy('vendor/bower_components/inputs/dist/css/bootstrap-inputs.css', 'resources/assets/less/bootstrap-inputs.less')
  .copy('vendor/bower_components/inputs/assets/javascripts/inputs.js', 'resources/js/3-inputs.js')

   // Copy es5
  .copy('vendor/bower_components/es5-shim/es5-shim.js', 'resources/js/3-es5-shim.js')
  .copy('vendor/bower_components/es5-shim/es5-sham.js', 'resources/js/3-es5-sham.js')


  // Copy angular
  .copy('vendor/bower_components/angular/angular.js', 'resources/js/4.0-angular.js')  
  .copy('vendor/bower_components/angular-animate/angular-animate.js', 'resources/js/4.1-angular-animate.js')  
  .copy('vendor/bower_components/angular-aria/angular-aria.js', 'resources/js/4.2-angular-aria.js')  
  .copy('vendor/bower_components/angular-messages/angular-messages.js', 'resources/js/4.3-angular-messages.js')  
  // Copy angular-file-upload
  .copy('vendor/bower_components/angular-file-upload/dist/angular-file-upload.js', 'resources/js/4.4-angular-file-upload.js')  


  // Copy fontawesome
  .copy('vendor/bower_components/fontawesome/fonts', 'public/build/fonts')
  .copy('vendor/bower_components/fontawesome/less', 'resources/assets/less/fontawesome')


  // Copy lightgallery
  .copy('vendor/bower_components/lightgallery/dist/css/lightgallery.css', 'resources/assets/less/lightgallery.less')  
  .copy('vendor/bower_components/lightgallery/dist/css/lg-fb-comment-box.css', 'resources/assets/less/lg-fb-comment-box.less')  
  .copy('vendor/bower_components/lightgallery/dist/css/lg-transitions.css', 'resources/assets/less/lg-transitions.less')  
  .copy('vendor/bower_components/lightgallery/dist/img', 'public/build/img')  
  .copy('vendor/bower_components/lightgallery/dist/js/lightgallery-all.js', 'resources/js/5-lightgallery.js')  
  .copy('vendor/bower_components/lightgallery/dist/fonts', 'public/build/fonts')

  // Copy lightslider
  .copy('vendor/bower_components/lightslider/dist/css/lightslider.css', 'resources/assets/less/lightslider.less')  
  .copy('vendor/bower_components/lightslider/dist/img', 'public/build/img')  
  .copy('vendor/bower_components/lightslider/dist/js/lightslider.js', 'resources/js/6-lightslider.js')  



  .less('app.less')   // если в скобках оставить пустое место, то compile all less files in resources/assets/less
//  .stylesIn('resources/assets/css') // combine all css files in a directory 

  .scriptsIn('resources/js')  //  combine all scripts in resources/js directory. resulting JavaScript will be placed in public/js/all.js
  .version([
      'public/css/app.css',
      'public/js/all.js'
      ])  // присваивает версию. зачем-то надо для кеширования
});
// команда gulp компилирует все скрипты и выполняет все команды одновременно
// команда gulp --production кроме того минифицирует все файлы