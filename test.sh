#!/bin/bash

pagethumbs() {
   convert $1 -filter Triangle -define filter:support=2 -thumbnail $2 \
   -unsharp 0.25x0.08+8.3+0.045 -dither None -posterize 136 -quality 82 \
   -define jpeg:fancy-upsampling=off -define png:compression-filter=5 \
   -define png:compression-level=9 -define png:compression-strategy=1 \
   -strip -define png:exclude-chunk=all -interlace none -colorspace sRGB $3
}


cd resources/img/foto
# создание миниатюр для текстовых страниц сайта
pagethumbs   'dveri/dver-122.jpg'   678   ../../../public/img/pages/steklo/dver-fire.jpg
pagethumbs   'dveri/2015-02-21-16-07-50.jpg'   678   ../../../public/img/pages/steklo/dver-fire-2.jpg
pagethumbs   'dveri/dver-154.jpg'   678   ../../../public/img/pages/steklo/dver-office.jpg
pagethumbs   'dveri/dver-53.jpg'   678   ../../../public/img/pages/steklo/dver-office-2.jpg
pagethumbs   'dveri/2013-11-27-09-32-42.jpg'   678   ../../../public/img/pages/steklo/dver-office-3.jpg
pagethumbs   'dveri/dver-123.jpg'   678   ../../../public/img/pages/steklo/dver-vhod.jpg
pagethumbs   'dveri/dver-150.jpg'   678   ../../../public/img/pages/steklo/dver-slider.jpg
pagethumbs   'dveri/dver-155.jpg'   678   ../../../public/img/pages/steklo/dver-interium.jpg