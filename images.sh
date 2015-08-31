#!/bin/bash
# Use a simple shell loop, to process each of the images.


#   echo $HOME - show shell base directory
#   echo $PWD - show current working directory
#   это пример с текстовым ватермарком поверх картинки
#   watermark
#convert -size 300x50 xc:none -font Arial -pointsize 20 -gravity center -draw \"fill white text 1,1 'Tequipment.net' text 0,0 'Tequipment.net' fill black text -1,-1 'Tequipment.net' \" WATERMARK.png
#composite -dissolve 50% -gravity south WATERMARK.png image-1.jpg image-11.jpg

#   это пример ресайза картинки до ширины 912 и если высота более 294, то лишнее обрезается относительно центра 
#cd ../../../../public/img/test
#if [ ! -e "912" ]; then mkdir 912; fi
#for f in *.*
#do convert $f -strip -auto-orient -thumbnail 912 -gravity center -extent 912x294 912/$f;
#done



cd resources/img
if [ ! -e "img" ]; then mkdir img; fi
# вот это вот *.{jpg,gif,png} выдает ошибку, если в папке только jpg 
# скрипт пытается открыть gif,png тоже и выдает ошибки в консоли
for f in *.*
do convert $f -strip img/$f;
done
cp -rv --remove-destination img/* ../../public/img
rm -rf img

# все логотипы  
# все белые пиксели делаются прозрачными
#  if [ %h > 190 ]; then convert $f -strip -thumbnail x190 clients/$f; fi
cd clients
if [ ! -e "clients" ]; then mkdir clients; fi
for f in *.*
do 
	h=`identify -format %h $f` | if [ "$h" -gt 190 ]; then convert $f -strip -thumbnail x190 clients/$f; fi ;
	convert $f -strip -gravity center -extent x190 -transparent white clients/$f;
done
cp -rv --remove-destination clients ../../../public/img
rm -rf clients


cd ../carousel/furnitura
if [ ! -e "../carousel" ]; then mkdir ../carousel; fi
for f in *.*
do convert $f -strip ../carousel/$f;
done

cd ../main
for f in *.*
do convert $f -strip -auto-orient -thumbnail 912x294 ../carousel/$f;
done

cd ../works
for f in *.*
do convert $f -strip -auto-orient -thumbnail 640x480 ../carousel/$f;
done
cp -rv --remove-destination ../carousel ../../../../public/img
rm -rf ../carousel
