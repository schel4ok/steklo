#!/bin/bash

mogrify -verbose -path public/img/risunki/pesok/ -thumbnail "480>" -monochrome -strip 'resources/img/risunki/pesok/*'



cd ../news
if [ ! -e "news" ]; then mkdir news; fi
for f in *.*
do  

   convert $f -filter Triangle -define filter:support=2  \
   -unsharp 0.25x0.08+8.3+0.045 -dither None -posterize 136 -quality 82 \
   -define jpeg:fancy-upsampling=off -define png:compression-filter=5 \
   -define png:compression-level=9 -define png:compression-strategy=1 \
   -strip -define png:exclude-chunk=all -interlace none -colorspace sRGB \
   -gravity center -extent ${w}x${w}*0.75 -thumbnail 200x160 news/$f
done
cp -rv --remove-destination news ../../../public/img
rm -rf news


Изменить формат всех изображений с png на jpg
cd out
mogrify -alpha remove -format jpg *.png
