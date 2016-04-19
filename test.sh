#!/bin/bash

pagethumbs() {
   convert $1 -filter Triangle -define filter:support=2 -thumbnail $2 \
   -unsharp 0.25x0.08+8.3+0.045 -dither None -posterize 136 -quality 82 \
   -define jpeg:fancy-upsampling=off -define png:compression-filter=5 \
   -define png:compression-level=9 -define png:compression-strategy=1 \
   -strip -define png:exclude-chunk=all -interlace none -extent $3 -colorspace sRGB $4
}




cd resources/img/foto
# стеклянные двери
pagethumbs   'dveri/2013-02-14-15.35.50.jpg'   680  ${w}x${h} ../../../public/img/pages/steklo/peregorodka-dekor.jpg
pagethumbs   'risunki/pesok-25.jpg'   680  ${w}x${h} ../../../public/img/pages/steklo/peregorodka-dekor-2.jpg
pagethumbs   'dveri/dver-138.jpg'   680  ${w}x${h} ../../../public/img/pages/steklo/peregorodka-dekor-3.jpg
pagethumbs   'dveri/dver-55.jpg'   680  ${w}x${h} ../../../public/img/pages/steklo/peregorodka-dekor-4.jpg
