#!/bin/bash

pagethumbs() {
   convert $1 -filter Triangle -define filter:support=2 -thumbnail $2 \
   -unsharp 0.25x0.08+8.3+0.045 -dither None -posterize 136 -quality 82 \
   -define jpeg:fancy-upsampling=off -define png:compression-filter=5 \
   -define png:compression-level=9 -define png:compression-strategy=1 \
   -strip -define png:exclude-chunk=all -interlace none \
   -extent $3 -colorspace sRGB $4
}


smartresize() {
   mogrify -path $1 -filter Triangle -define filter:support=2 -thumbnail $2 \
   -unsharp 0.25x0.08+8.3+0.045 -dither None -posterize 136 -quality 82 \
   -define jpeg:fancy-upsampling=off -define png:compression-filter=5 \
   -define png:compression-level=9 -define png:compression-strategy=1 \
   -strip -define png:exclude-chunk=all -interlace none -gravity center \
   -extent $3 -colorspace sRGB $4
}



cd resources/img/foto
# создание миниатюр для текстовых страниц сайта
pagethumbs   'peregorodki/peregorodka-18.jpg'   500  ${w}x${h} ../../../public/img/pages/steklo/peregorodka-fire.jpg
pagethumbs   'dveri/dver-170.jpg'   500  ${w}x${h} ../../../public/img/pages/steklo/peregorodka-fire-2.jpg

cd ../../../
smartresize 	public/img/carousel/            978x294   ${w}x${h}  'resources/img/carousel/main/*'
