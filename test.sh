#!/bin/bash

pagethumbs() {
   convert $1 -filter Triangle -define filter:support=2 -thumbnail $2 \
   -unsharp 0.25x0.08+8.3+0.045 -dither None -posterize 136 -quality 82 \
   -define jpeg:fancy-upsampling=off -define png:compression-filter=5 \
   -define png:compression-level=9 -define png:compression-strategy=1 \
   -strip -define png:exclude-chunk=all -interlace none -extent $3 -colorspace sRGB $4
}

gifresize() {
#   mogrify -path $1 -thumbnail $2 -monochrome -strip $3
#   делаю при помощи convert, т.к mogrify выдает ошибку Bad file number при количестве более 742 файлов в папке 
   convert $1 -thumbnail $2  -strip $3 
}


cd resources/img/foto
# стеклянные душевые
pagethumbs   'polki/polka-04.jpg'   680  ${w}x${h} ../../../public/img/pages/steklo/polka-01.jpg
pagethumbs   'polki/polka-14.jpg'   680  ${w}x${h} ../../../public/img/pages/steklo/mebel-01.jpg
pagethumbs   'risunki/IMG_20150419_192650.jpg'   680  ${w}x${h} ../../../public/img/pages/steklo/mebel-02.jpg
pagethumbs   'reception/reception-05.jpg'   680  ${w}x${h} ../../../public/img/pages/steklo/reception-01.jpg
pagethumbs   'stoly/stol-10.jpg'   680  ${w}x${h} ../../../public/img/pages/steklo/stol-01.jpg
pagethumbs   'bar/bar-01.jpg'   680  ${w}x${h} ../../../public/img/pages/steklo/bar-01.jpg
pagethumbs   'shkafy/shkaf-04.jpg'   680  ${w}x${h} ../../../public/img/pages/steklo/shkaf-01.jpg
pagethumbs   'vitriny/2013-05-03-19-24-14.jpg'   680  ${w}x${h} ../../../public/img/pages/steklo/vitrina-01.jpg
pagethumbs   'vitriny/vitrina-02.jpg'   680  ${w}x${h} ../../../public/img/pages/steklo/vitrina-02.jpg
pagethumbs   'fartuki/fartuk-02.jpg'   680  ${w}x${h} ../../../public/img/pages/steklo/fartuk-01.jpg
pagethumbs   'oblicovka-sten/oblicovka-sten-05.jpg'   680  ${w}x${h} ../../../public/img/pages/steklo/oblicovka-01.jpg