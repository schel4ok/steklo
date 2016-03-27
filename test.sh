#!/bin/bash

pagethumbs() {
   convert $1 -filter Triangle -define filter:support=2 -thumbnail $2 \
   -unsharp 0.25x0.08+8.3+0.045 -dither None -posterize 136 -quality 82 \
   -define jpeg:fancy-upsampling=off -define png:compression-filter=5 \
   -define png:compression-level=9 -define png:compression-strategy=1 \
   -strip -define png:exclude-chunk=all -interlace none \
   -extent $3 -colorspace sRGB $4
}


cd resources/img/foto
# создание миниатюр для текстовых страниц сайта
pagethumbs   'dveri/dver-122.jpg'   670  ${w}x${h} ../../../public/img/pages/steklo/dver-fire.jpg
pagethumbs   'dveri/2015-02-21-16-07-50.jpg'   670   ${w}x${h} ../../../public/img/pages/steklo/dver-fire-2.jpg
pagethumbs   'dveri/dver-154.jpg'   670  ${w}x${h}  ../../../public/img/pages/steklo/dver-office.jpg
pagethumbs   'dveri/dver-53.jpg'   670  ${w}x${h} ../../../public/img/pages/steklo/dver-office-2.jpg
pagethumbs   'dveri/2013-11-27-09-32-42.jpg'   670   ${w}x${h}   ../../../public/img/pages/steklo/dver-office-3.jpg
pagethumbs   'dveri/dver-123.jpg'   670  ${w}x${h}  ../../../public/img/pages/steklo/dver-vhod.jpg
pagethumbs   'dveri/2013-01-08-17-57-30.jpg'   500  ${w}x${h}  ../../../public/img/pages/steklo/dver-vhod-2.jpg
pagethumbs   'dveri/dver-150.jpg'   670  ${w}x${h}  ../../../public/img/pages/steklo/dver-slider.jpg
pagethumbs   'dveri/dver-49.jpg'   500  ${w}x${h}  ../../../public/img/pages/steklo/dver-slider-2.jpg
pagethumbs   'dveri/dver-66.jpg'   500  ${w}x${h}  ../../../public/img/pages/steklo/dver-slider-3.jpg
pagethumbs   'dveri/dver-155.jpg'   670  ${w}x${h}  ../../../public/img/pages/steklo/dver-interium.jpg
pagethumbs   'dveri/dver-166.jpg'   500  ${w}x${h}  ../../../public/img/pages/steklo/dver-interium-2.jpg
pagethumbs   'dveri/dver-87.jpg'    500   500x751   ../../../public/img/pages/steklo/dver-interium-3.jpg
pagethumbs   'dveri/dver-139.jpg'   500   ${w}x${h} ../../../public/img/pages/steklo/dver-interium-4.jpg
pagethumbs   'dveri/2016-02-27-16-50-08.jpg'   670  ${w}x${h}  ../../../public/img/pages/steklo/dver-sauna.jpg 