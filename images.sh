#!/bin/bash

# -alpha remove   удаляет прозрачность с png (это делает файл меньше)
# кроме того это помогает удалить черные пиксели, которые возникают при конвертации png в jpg

# -transparent white   все белые пиксели делаются прозрачными
# -strip  удаляет всю мета информацию с картинки (позволяет уменьшить размер иногда до 60Кб)
# image files can contain meta data  such as when it was created and the device that created it

gifresize() {
#   mogrify -path $1 -thumbnail $2 -monochrome -strip $3
#   делаю при помощи convert, т.к mogrify выдает ошибку Bad file number при количестве более 742 файлов в папке 
   convert $1 -thumbnail $2 -monochrome -strip $3 
}

smartresize() {
   mogrify -path $1 -filter Triangle -define filter:support=2 -thumbnail $2 \
   -unsharp 0.25x0.08+8.3+0.045 -dither None -posterize 136 -quality 82 \
   -define jpeg:fancy-upsampling=off -define png:compression-filter=5 \
   -define png:compression-level=9 -define png:compression-strategy=1 \
   -strip -define png:exclude-chunk=all -interlace none -gravity center \
   -extent $3 -colorspace sRGB $4
}

smartoptimize() {
   mogrify -path $1 -filter Triangle -define filter:support=2 \
   -unsharp 0.25x0.08+8.3+0.045 -dither None -posterize 136 -quality 82 \
   -define jpeg:fancy-upsampling=off -define png:compression-filter=5 \
   -define png:compression-level=9 -define png:compression-strategy=1 \
   -strip -define png:exclude-chunk=all -interlace none -colorspace sRGB $2
}

#   делаю при помощи convert, т.к mogrify выдает ошибку Bad file number при количестве более 742 файлов в папке 
furnoptimize() {
   convert $1 -filter Triangle -define filter:support=2 \
   -unsharp 0.25x0.08+8.3+0.045 -dither None -posterize 136 -quality 82 \
   -define jpeg:fancy-upsampling=off -define png:compression-filter=5 \
   -define png:compression-level=9 -define png:compression-strategy=1 \
   -strip -define png:exclude-chunk=all -interlace none -colorspace sRGB $2
}

furnresize() {
   convert  $f -thumbnail $2  -gravity center -background white -extent $3  $4
}

pagethumbs() {
   convert $1 -filter Triangle -define filter:support=2 -thumbnail $2 \
   -unsharp 0.25x0.08+8.3+0.045 -dither None -posterize 136 -quality 82 \
   -define jpeg:fancy-upsampling=off -define png:compression-filter=5 \
   -define png:compression-level=9 -define png:compression-strategy=1 \
   -strip -define png:exclude-chunk=all -interlace none -colorspace sRGB $3
}

resize() {
   convert -thumbnail $1 -extent $2  $3
}

# хелп тута http://pingvinus.ru/note/command-find
find resources/img -exec rename -vf 'y/A-Z/a-z/' '{}' \; # заменяет UPPERCASE -> lowercase
find resources/img -exec rename -vf 'y/ /-/' '{}' \;     # заменяет пробел на дефис

# вот это не работает для файлов внутри папок, укоторых название с пробелом
# find resources/img -type f -exec rename -vf 'y/ /-/' '{}' \;     # заменяет пробел на дефис
# например Can't rename resources/img/_men-at-work/PrimeFitness Липецк/2013-02-17 23.55.41.jpg 
# resources/img/_men-at-work/PrimeFitness-Липецк/2013-02-17-23.55.41.jpg: No such file or directory

cd public/img
# создание папок
if [ ! -e "carousel" ];                then mkdir carousel; fi
if [ ! -e "categories" ];              then mkdir categories; fi
if [ ! -e "clients" ];                 then mkdir clients; fi
if [ ! -e "file-icons" ];              then mkdir file-icons; fi
if [ ! -e "foto" ];                    then mkdir -p foto/thumbs; fi
if [ ! -e "foto/bar" ];                then mkdir foto/bar; fi
if [ ! -e "foto/dush" ];               then mkdir foto/dush; fi
if [ ! -e "foto/dveri" ];              then mkdir foto/dveri; fi
if [ ! -e "foto/facades" ];            then mkdir foto/facades; fi
if [ ! -e "foto/fartuki" ];            then mkdir foto/fartuki; fi
if [ ! -e "foto/kozyrki" ];            then mkdir foto/kozyrki; fi
if [ ! -e "foto/lestnica" ];           then mkdir foto/lestnica; fi
if [ ! -e "foto/oblicovka-sten" ];     then mkdir foto/oblicovka-sten; fi
if [ ! -e "foto/okna" ];               then mkdir foto/okna; fi
if [ ! -e "foto/peregorodki" ];        then mkdir foto/peregorodki; fi
if [ ! -e "foto/polki" ];              then mkdir foto/polki; fi
if [ ! -e "foto/potolok" ];            then mkdir foto/potolok; fi
if [ ! -e "foto/reception" ];          then mkdir foto/reception; fi
if [ ! -e "foto/risunki" ];            then mkdir foto/risunki; fi
if [ ! -e "foto/shkafy" ];             then mkdir foto/shkafy; fi
if [ ! -e "foto/stoly" ];              then mkdir foto/stoly; fi
if [ ! -e "foto/vitriny" ];            then mkdir foto/vitriny; fi
if [ ! -e "foto/zabor" ];              then mkdir foto/zabor; fi
if [ ! -e "foto/zerkala" ];            then mkdir foto/zerkala; fi
if [ ! -e "furnitura" ]; 		         then mkdir furnitura; fi
if [ ! -e "homepage" ]; 		         then mkdir homepage; fi
if [ ! -e "menu" ];                    then mkdir menu; fi
if [ ! -e "news" ]; 		               then mkdir -p news/big; fi
if [ ! -e "pages" ];                   then mkdir -p pages/steklo; fi
if [ ! -e "risunki" ]; 	               then mkdir -p risunki/pesok; fi
if [ ! -e "risunki/vitraj" ];          then mkdir risunki/vitraj; fi
if [ ! -e "uslugi" ];                  then mkdir uslugi; fi

cd ../../
# ресайз картинок
smartoptimize 	public/img/ 						                       'resources/img/*.{jpg,png,gif}'
smartresize 	public/img/carousel/            640       ${w}x${h}  'resources/img/carousel/furnitura/*'
smartresize 	public/img/carousel/            912x294   ${w}x${h}  'resources/img/carousel/main/*'
smartresize 	public/img/carousel/            870       ${w}x${h}  'resources/img/carousel/works/*'
smartoptimize 	public/img/categories/				                    'resources/img/categories/*'
smartresize 	public/img/clients/ 	           'x190>'   ${w}x190   'resources/img/clients/*'
smartoptimize  public/img/file-icons/                               'resources/img/file-icons/*'

smartresize    public/img/foto/                 334x259^ 334x259    'resources/img/foto/*.jpg'
smartresize    public/img/foto/bar              640      ${w}x${h}  'resources/img/foto/bar/*'
smartresize    public/img/foto/dush             640      ${w}x${h}  'resources/img/foto/dush/*'
smartresize    public/img/foto/dveri            640      ${w}x${h}  'resources/img/foto/dveri/*'
smartresize    public/img/foto/facades          640      ${w}x${h}  'resources/img/foto/facades/*'
smartresize    public/img/foto/fartuki          640      ${w}x${h}  'resources/img/foto/fartuki/*'
smartresize    public/img/foto/kozyrki          640      ${w}x${h}  'resources/img/foto/kozyrki/*'
smartresize    public/img/foto/lestnica         640      ${w}x${h}  'resources/img/foto/lestnica/*'
smartresize    public/img/foto/oblicovka-sten   640      ${w}x${h}  'resources/img/foto/oblicovka-sten/*'
smartresize    public/img/foto/okna             640      ${w}x${h}  'resources/img/foto/okna/*'
smartresize    public/img/foto/peregorodki      640      ${w}x${h}  'resources/img/foto/peregorodki/*'
smartresize    public/img/foto/polki            640      ${w}x${h}  'resources/img/foto/polki/*'
smartresize    public/img/foto/potolok          640      ${w}x${h}  'resources/img/foto/potolok/*'
smartresize    public/img/foto/reception        640      ${w}x${h}  'resources/img/foto/reception/*'
smartresize    public/img/foto/risunki          640      ${w}x${h}  'resources/img/foto/risunki/*'
smartresize    public/img/foto/shkafy           640      ${w}x${h}  'resources/img/foto/shkafy/*'
smartresize    public/img/foto/stoly            640      ${w}x${h}  'resources/img/foto/stoly/*'
smartresize    public/img/foto/vitriny          640      ${w}x${h}  'resources/img/foto/vitriny/*'
smartresize    public/img/foto/zabor            640      ${w}x${h}  'resources/img/foto/zabor/*'
smartresize    public/img/foto/zerkala          640      ${w}x${h}  'resources/img/foto/zerkala/*'

smartresize    public/img/homepage/             588       ${w}x${h} 'resources/img/homepage/*'
smartoptimize  public/img/menu/                                     'resources/img/menu/*'
smartresize    public/img/news/                 244x190^   244x190  'resources/img/news/*'
smartresize    public/img/news/big/             640x480^  ${w}x${h} 'resources/img/news/*'
smartoptimize  public/img/pages/                                    'resources/img/pages/*'
smartoptimize  public/img/risunki/vitraj/                           'resources/img/risunki/vitraj/*'
smartoptimize  public/img/uslugi/                                   'resources/img/uslugi/*'


cd resources/img/risunki/pesok
for f in *; do
gifresize  $f  '480>'   ../../../../public/img/risunki/pesok/$f
done

# выравнивание картинок фурнитуры в один размер
# картинки больше, чем 230x185 уменьшаются
# а у картинок меньше, чем 230x185 увеличивается только белый бэкграунд
cd ../../furnitura
for f in *; do
furnoptimize  $f   ../../../public/img/furnitura/$f
done
for f in *-medium.*; do
furnresize  $f  '230x185>'  230x185   ../../../public/img/furnitura/$f
done


cd ../../../public/img/foto
# переименование картинок для фотогалереи по шаблону bar/bar-0001.jpg
find bar/.   -name '*.jpg'          | gawk 'BEGIN{ a=1 }{ printf "mv \"%s\" bar/bar-%04d.jpg\n", $0, a++ }' | bash
find dveri/. -name '*.jpg'          | gawk 'BEGIN{ a=1 }{ printf "mv \"%s\" dveri/dveri-%04d.jpg\n", $0, a++ }' | bash
find dush/.  -name '*.jpg'          | gawk 'BEGIN{ a=1 }{ printf "mv \"%s\" dush/dush-%04d.jpg\n", $0, a++ }' | bash
find facades/.  -name '*.jpg'       | gawk 'BEGIN{ a=1 }{ printf "mv \"%s\" facades/facades-%04d.jpg\n", $0, a++ }' | bash
find fartuki/.  -name '*.jpg'       | gawk 'BEGIN{ a=1 }{ printf "mv \"%s\" fartuki/fartuki-%04d.jpg\n", $0, a++ }' | bash
find kozyrki/.  -name '*.jpg'       | gawk 'BEGIN{ a=1 }{ printf "mv \"%s\" kozyrki/kozyrki-%04d.jpg\n", $0, a++ }' | bash
find lestnica/.  -name '*.jpg'      | gawk 'BEGIN{ a=1 }{ printf "mv \"%s\" lestnica/lestnica-%04d.jpg\n", $0, a++ }' | bash
find oblicovka-sten/.  -name '*.jpg'| gawk 'BEGIN{ a=1 }{ printf "mv \"%s\" oblicovka-sten/oblicovka-sten-%04d.jpg\n", $0, a++ }' | bash
find okna/.  -name '*.jpg'          | gawk 'BEGIN{ a=1 }{ printf "mv \"%s\" okna/okna-%04d.jpg\n", $0, a++ }' | bash
find peregorodki/.  -name '*.jpg'   | gawk 'BEGIN{ a=1 }{ printf "mv \"%s\" peregorodki/peregorodki-%04d.jpg\n", $0, a++ }' | bash
find polki/.  -name '*.jpg'         | gawk 'BEGIN{ a=1 }{ printf "mv \"%s\" polki/polki-%04d.jpg\n", $0, a++ }' | bash
find potolok/.  -name '*.jpg'       | gawk 'BEGIN{ a=1 }{ printf "mv \"%s\" potolok/potolok-%04d.jpg\n", $0, a++ }' | bash
find reception/.  -name '*.jpg'     | gawk 'BEGIN{ a=1 }{ printf "mv \"%s\" reception/reception-%04d.jpg\n", $0, a++ }' | bash
find risunki/.  -name '*.jpg'       | gawk 'BEGIN{ a=1 }{ printf "mv \"%s\" risunki/risunki-%04d.jpg\n", $0, a++ }' | bash
find shkafy/.  -name '*.jpg'        | gawk 'BEGIN{ a=1 }{ printf "mv \"%s\" shkafy/shkafy-%04d.jpg\n", $0, a++ }' | bash
find stoly/.  -name '*.jpg'         | gawk 'BEGIN{ a=1 }{ printf "mv \"%s\" stoly/stoly-%04d.jpg\n", $0, a++ }' | bash
find vitriny/.  -name '*.jpg'       | gawk 'BEGIN{ a=1 }{ printf "mv \"%s\" vitriny/vitriny-%04d.jpg\n", $0, a++ }' | bash
find zabor/.  -name '*.jpg'         | gawk 'BEGIN{ a=1 }{ printf "mv \"%s\" zabor/zabor-%04d.jpg\n", $0, a++ }' | bash
find zerkala/.  -name '*.jpg'       | gawk 'BEGIN{ a=1 }{ printf "mv \"%s\" zerkala/zerkala-%04d.jpg\n", $0, a++ }' | bash

# создание миниатюр для фотогалереи
smartresize   thumbs/   334x259^   334x259   'bar/*.jpg'
smartresize   thumbs/   334x259^   334x259   'dveri/*.jpg'
smartresize   thumbs/   334x259^   334x259   'dush/*.jpg'
smartresize   thumbs/   334x259^   334x259   'facades/*.jpg'
smartresize   thumbs/   334x259^   334x259   'fartuki/*.jpg'
smartresize   thumbs/   334x259^   334x259   'kozyrki/*.jpg'
smartresize   thumbs/   334x259^   334x259   'lestnica/*.jpg'
smartresize   thumbs/   334x259^   334x259   'oblicovka-sten/*.jpg'
smartresize   thumbs/   334x259^   334x259   'okna/*.jpg'
smartresize   thumbs/   334x259^   334x259   'peregorodki/*.jpg'
smartresize   thumbs/   334x259^   334x259   'polki/*.jpg'
smartresize   thumbs/   334x259^   334x259   'potolok/*.jpg'
smartresize   thumbs/   334x259^   334x259   'reception/*.jpg'
smartresize   thumbs/   334x259^   334x259   'risunki/*.jpg'
smartresize   thumbs/   334x259^   334x259   'shkafy/*.jpg'
smartresize   thumbs/   334x259^   334x259   'stoly/*.jpg'
smartresize   thumbs/   334x259^   334x259   'vitriny/*.jpg'
smartresize   thumbs/   334x259^   334x259   'zabor/*.jpg'
smartresize   thumbs/   334x259^   334x259   'zerkala/*.jpg'


cd ../../../resources/img/foto
# создание миниатюр для текстовых страниц сайта
pagethumbs   'dveri/dver-122.jpg'   500   ../../../public/img/pages/steklo/dver-fire.jpg
pagethumbs   'dveri/2015-02-21-16-07-50.jpg'   500   ../../../public/img/pages/steklo/dver-fire-2.jpg
pagethumbs   'dveri/dver-154.jpg'   500   ../../../public/img/pages/steklo/dver-office.jpg
pagethumbs   'dveri/dver-53.jpg'   500   ../../../public/img/pages/steklo/dver-office-2.jpg
pagethumbs   'dveri/2013-11-27-09-32-42.jpg'   500   ../../../public/img/pages/steklo/dver-office-3.jpg
pagethumbs   'dveri/dver-123.jpg'   500   ../../../public/img/pages/steklo/dver-vhod.jpg
pagethumbs   'dveri/dver-150.jpg'   500   ../../../public/img/pages/steklo/dver-slider.jpg
pagethumbs   'dveri/dver-155.jpg'   500   ../../../public/img/pages/steklo/dver-interium.jpg