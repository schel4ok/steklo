#!/bin/bash
# Use a simple shell loop, to process each of the images.
cd resources/img
if [ ! -e "x160" ]; then mkdir x160; fi
if [ ! -e "x480" ]; then mkdir x480; fi

for f in *.{jpg,gif,png}
do 
	convert $f -rotate 30 -thumbnail x160  x160/$f;
	convert $f -rotate 45 -thumbnail x480 x480/$f;
done

cp -r --remove-destination x160 ../../public/img
cp -r --remove-destination x480 ../../public/img
rm -rf x160 x480

#watermark
#convert -size 300x50 xc:none -font Arial -pointsize 20 -gravity center -draw \"fill white text 1,1 'Tequipment.net' text 0,0 'Tequipment.net' fill black text -1,-1 'Tequipment.net' \" WATERMARK.png
#composite -dissolve 50% -gravity south WATERMARK.png image-1.jpg image-11.jpg