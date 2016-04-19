#!/bin/bash

pagethumbs() {
   convert $1 -filter Triangle -define filter:support=2 -thumbnail $2 \
   -unsharp 0.25x0.08+8.3+0.045 -dither None -posterize 136 -quality 82 \
   -define jpeg:fancy-upsampling=off -define png:compression-filter=5 \
   -define png:compression-level=9 -define png:compression-strategy=1 \
   -strip -define png:exclude-chunk=all -interlace none -colorspace sRGB $3
}


smartresize() {
   mogrify -path $1 -filter Triangle -define filter:support=2 -thumbnail $2 \
   -unsharp 0.25x0.08+8.3+0.045 -dither None -posterize 136 -quality 82 \
   -define jpeg:fancy-upsampling=off -define png:compression-filter=5 \
   -define png:compression-level=9 -define png:compression-strategy=1 \
   -strip -define png:exclude-chunk=all -interlace none -gravity center \
   -extent $3 -colorspace sRGB $4
}

smartoptimize() {
   mogrify -path $1 -filter Triangle -define filter:support=2 \
   -unsharp 0.25x0.08+8.3+0.045 -dither None -posterize 136 -quality 82 \
   -define jpeg:fancy-upsampling=off -define png:compression-filter=5 \
   -define png:compression-level=9 -define png:compression-strategy=1 \
   -strip -define png:exclude-chunk=all -interlace none -colorspace sRGB $2
}


cd resources/img/foto
# стеклянные двери
pagethumbs   'dveri/dver-122.jpg'   680  ../../../public/img/pages/steklo/dver-fire.jpg
pagethumbs   'dveri/2015-02-21-16-07-50.jpg'   680   ../../../public/img/pages/steklo/dver-fire-2.jpg
pagethumbs   'dveri/dver-154.jpg'   680   ../../../public/img/pages/steklo/dver-office.jpg
pagethumbs   'dveri/dver-53.jpg'   390   ../../../public/img/pages/steklo/dver-office-2.jpg
pagethumbs   'dveri/2013-11-27-09-32-42.jpg'   390   ../../../public/img/pages/steklo/dver-office-3.jpg
pagethumbs   'dveri/dver-150.jpg'   680   ../../../public/img/pages/steklo/dver-slider.jpg
pagethumbs   'dveri/dver-49.jpg'   390   ../../../public/img/pages/steklo/dver-slider-2.jpg
pagethumbs   'dveri/dver-66.jpg'   390   ../../../public/img/pages/steklo/dver-slider-3.jpg
pagethumbs   'dveri/dver-155.jpg'   680   ../../../public/img/pages/steklo/dver-interium.jpg
pagethumbs   'dveri/dver-166.jpg'   390   ../../../public/img/pages/steklo/dver-interium-2.jpg
pagethumbs   'dveri/dver-87.jpg'   390   ../../../public/img/pages/steklo/dver-interium-3.jpg
pagethumbs   'dveri/dver-139.jpg'   390   ../../../public/img/pages/steklo/dver-interium-4.jpg
pagethumbs   'dveri/dver-123.jpg'   680   ../../../public/img/pages/steklo/dver-vhod.jpg
pagethumbs   'dveri/2013-01-08-17-57-30.jpg'   390   ../../../public/img/pages/steklo/dver-vhod-2.jpg
pagethumbs   'dveri/2016-02-27-16-50-08.jpg'   680   ../../../public/img/pages/steklo/dver-sauna.jpg
# стеклянные перегородки
pagethumbs   'dush/dush-89.jpg'   680   ../../../public/img/pages/steklo/peregorodka-santekh.jpg
pagethumbs   'lestnica/lestnica-19.jpg'   680   ../../../public/img/pages/steklo/peregorodka-santekh-2.jpg
pagethumbs   'dush/dush-28.jpg'   390   ../../../public/img/pages/steklo/peregorodka-santekh-3.jpg
pagethumbs   'peregorodki/peregorodka-58.jpg'   680   ../../../public/img/pages/steklo/peregorodka-karkas.jpg
pagethumbs   'peregorodki/2013-11-09-10-26-56.jpg'   390   ../../../public/img/pages/steklo/peregorodka-karkas-2.jpg
pagethumbs   'peregorodki/peregorodka-27.jpg'   680   ../../../public/img/pages/steklo/peregorodka-karkas-3.jpg
pagethumbs   'peregorodki/peregorodka-18.jpg'   680   ../../../public/img/pages/steklo/peregorodka-fire.jpg
pagethumbs   'dveri/dver-170.jpg'   680   ../../../public/img/pages/steklo/peregorodka-fire-2.jpg
pagethumbs   'peregorodki/peregorodka-89.jpg'   680   ../../../public/img/pages/steklo/peregorodka-office.jpg
pagethumbs   'dveri/dver-47.jpg'   680   ../../../public/img/pages/steklo/peregorodka-office-2.jpg
pagethumbs   'peregorodki/peregorodka-92.jpg'   680   ../../../public/img/pages/steklo/peregorodka-office-3.jpg
pagethumbs   'peregorodki/peregorodka-98.jpg'   680  ../../../public/img/pages/steklo/peregorodka-mobile.jpg
pagethumbs   'peregorodki/peregorodka-99.jpg'   680  ../../../public/img/pages/steklo/peregorodka-mobile-2.jpg
pagethumbs   'peregorodki/08_impressive-glazed-corridor.jpg'   680   ../../../public/img/pages/steklo/peregorodka-glass.jpg
pagethumbs   'peregorodki/peregorodka-54.jpg'   680  ../../../public/img/pages/steklo/peregorodka-glass-2.jpg
pagethumbs   'peregorodki/peregorodka-87.jpg'   680   ../../../public/img/pages/steklo/peregorodka-glass-3.jpg
pagethumbs   'peregorodki/2013-08-02-15-17-01.jpg'   680   ../../../public/img/pages/steklo/peregorodka-interium.jpg
pagethumbs   'peregorodki/peregorodka-26.jpg'   680   ../../../public/img/pages/steklo/peregorodka-interium-2.jpg
pagethumbs   'peregorodki/2013-02-14-19-35-57.jpg'   680   ../../../public/img/pages/steklo/peregorodka-interium-3.jpg
pagethumbs   'dveri/dver-72.jpg'   680  ../../../public/img/pages/steklo/peregorodka-interium-4.jpg
pagethumbs   'peregorodki/peregorodka-24.jpg'   680   ../../../public/img/pages/steklo/peregorodka-interium-5.jpg
pagethumbs   'peregorodki/peregorodka-55.jpg'   680   ../../../public/img/pages/steklo/peregorodka-interium-6.jpg
pagethumbs   'peregorodki/2013-08-17-17-36-47.jpg'   680   ../../../public/img/pages/steklo/peregorodka-interium-7.jpg
