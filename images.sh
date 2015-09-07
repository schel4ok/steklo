#!/bin/bash

# -alpha remove   удаляет прозрачность с png (это делает файл меньше)
# кроме того это помогает удалить черные пиксели, которые возникают при конвертации png в jpg

# -transparent white   все белые пиксели делаются прозрачными
# -strip  удаляет всю мета информацию с картинки (позволяет уменьшить размер иногда до 60Кб)
# image files can contain meta data  such as when it was created and the device that created it

gifresize() {
   mogrify -verbose -path $1 -thumbnail $2 -monochrome -strip $3   
}

smartresize() {
   mogrify -verbose -path $1 -filter Triangle -define filter:support=2 -thumbnail $2 \
   -unsharp 0.25x0.08+8.3+0.045 -dither None -posterize 136 -quality 82 \
   -define jpeg:fancy-upsampling=off -define png:compression-filter=5 \
   -define png:compression-level=9 -define png:compression-strategy=1 \
   -strip -define png:exclude-chunk=all -interlace none -colorspace sRGB $3
}

smartoptimize() {
   mogrify -verbose -path $1 -filter Triangle -define filter:support=2 \
   -unsharp 0.25x0.08+8.3+0.045 -dither None -posterize 136 -quality 82 \
   -define jpeg:fancy-upsampling=off -define png:compression-filter=5 \
   -define png:compression-level=9 -define png:compression-strategy=1 \
   -strip -define png:exclude-chunk=all -interlace none -colorspace sRGB $2
}

cd public/img
if [ ! -e "carousel" ]; 		then mkdir carousel; fi
if [ ! -e "categories" ]; 		then mkdir categories; fi
if [ ! -e "clients" ]; 			then mkdir clients; fi
if [ ! -e "file-icons" ]; 		then mkdir file-icons; fi
if [ ! -e "furnitura" ]; 		then mkdir furnitura; fi
if [ ! -e "homepage" ]; 		then mkdir homepage; fi
if [ ! -e "links" ]; 			then mkdir links; fi
if [ ! -e "menu" ]; 			then mkdir menu; fi
if [ ! -e "news" ]; 			then mkdir news; fi
if [ ! -e "news/big" ]; 		then mkdir -p news/big; fi
if [ ! -e "pages" ]; 			then mkdir pages; fi
if [ ! -e "products" ]; 		then mkdir products; fi

if [ ! -e "risunki" ]; 			then mkdir risunki; fi
if [ ! -e "risunki/pesok" ]; 	then mkdir risunki/pesok; fi
if [ ! -e "risunki/vitraj" ]; 	then mkdir risunki/vitraj; fi


cd ../../
smartoptimize 	public/img/ 						'resources/img/*.{jpg,png,gif}'
smartresize 	public/img/carousel/ 	640		 	'resources/img/carousel/furnitura/*'
smartresize 	public/img/carousel/ 	912x294 	'resources/img/carousel/main/*'
smartresize 	public/img/carousel/ 	640		 	'resources/img/carousel/works/*'
smartoptimize 	public/img/categories/				'resources/img/categories/*'
smartresize 	public/img/clients/ 	"x190>" 	'resources/img/clients/*'
smartoptimize 	public/img/file-icons/				'resources/img/file-icons/*'
# furnitura
smartresize 	public/img/homepage/ 	588		 	'resources/img/homepage/*'
smartoptimize 	public/img/links/					'resources/img/links/*'
smartoptimize 	public/img/menu/					'resources/img/menu/*'
smartresize    	public/img/news/ 		234		 	'resources/img/news/*'
smartresize    	public/img/news/big/ 	640		 	'resources/img/news/*'
smartoptimize  	public/img/pages/        			'resources/img/pages/*'
# products

gifresize	  	public/img/risunki/pesok/     "480>"   	'resources/img/risunki/pesok/*'
smartoptimize  	public/img/risunki/vitraj/        		'resources/img/risunki/vitraj/*'


cd public/img/clients
for f in *.*
do convert -verbose $f -gravity center -extent ${w}x190 $f;
done

cd ../news
for f in *.*
do convert -verbose $f -gravity center -extent ${w}x180 $f;
done

cd big
for f in *.*
do convert -verbose $f -gravity center -extent ${w}x480 $f;
done