#!/bin/bash

smartresize() {
   mogrify -verbose -path $1 -filter Triangle -define filter:support=2 -thumbnail $2 \
   -unsharp 0.25x0.08+8.3+0.045 -dither None -posterize 136 -quality 82 \
   -define jpeg:fancy-upsampling=off -define png:compression-filter=5 \
   -define png:compression-level=9 -define png:compression-strategy=1 \
   -strip -define png:exclude-chunk=all -interlace none  \
   -gravity center -extent $3  -colorspace sRGB  $4
}

cd public/img/foto
find zabor/.  -name '*.jpg'         | gawk 'BEGIN{ a=1 }{ printf "mv \"%s\" zabor/zabor-%04d.jpg\n", $0, a++ }' | bash

smartresize   thumbs/   234x180^   234x180   'zabor/*.jpg'
