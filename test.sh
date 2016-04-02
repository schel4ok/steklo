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
pagethumbs   'dush/dush-89.jpg'   500  ${w}x${h} ../../../public/img/pages/steklo/peregorodka-santekh.jpg
pagethumbs   'lestnica/lestnica-19.jpg'   500  ${w}x${h} ../../../public/img/pages/steklo/peregorodka-santekh-2.jpg
pagethumbs   'dush/dush-28.jpg'   500  ${w}x${h} ../../../public/img/pages/steklo/peregorodka-santekh-3.jpg

pagethumbs   'peregorodki/peregorodka-58.jpg'   500  ${w}x${h} ../../../public/img/pages/steklo/peregorodka-karkas.jpg

pagethumbs   'peregorodki/peregorodka-18.jpg'   500  ${w}x${h} ../../../public/img/pages/steklo/peregorodka-fire.jpg

pagethumbs   'peregorodki/peregorodka-89.jpg'   500  ${w}x${h} ../../../public/img/pages/steklo/peregorodka-office.jpg

pagethumbs   'peregorodki/peregorodka-98.jpg'   500  ${w}x${h} ../../../public/img/pages/steklo/peregorodka-mobile.jpg

pagethumbs   'peregorodki/peregorodka-28.jpg'   500  ${w}x${h} ../../../public/img/pages/steklo/peregorodka-glass.jpg

pagethumbs   'peregorodki/2013-08-02-15-17-01.jpg'   500  ${w}x${h} ../../../public/img/pages/steklo/peregorodka-interium.jpg

pagethumbs   'peregorodki/2013-02-14-19-35-57.jpg'   500  ${w}x${h} ../../../public/img/pages/steklo/peregorodka-dekor.jpg

pagethumbs   'peregorodki/peregorodka-76.jpg'   500  ${w}x${h} ../../../public/img/pages/steklo/peregorodka-slider.jpg
