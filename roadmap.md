#как писать текст "О компании"  
http://textis.ru/kak-pisat-tekst-o-kompanii/  
http://kasyanov.info/component/k2/delaem-privlekatelnuyu-stranitsu-o-kompanii  
http://texterra.ru/blog/7-sposobov-napisat-uboynyy-vstupitelnyy-abzats.html  
http://texterra.ru/blog/kak-napisat-tekst-na-stranitsu-o-kompanii-poshagovoe-rukovodstvo.html  


#Практическое применение FlexBox
http://habrahabr.ru/post/242545/


#Optimal Settings For ImageMagick
крутая статья про настройки фильтров imagemagick для ресайза картинок для сайта, чтобы получить максимальное сжатие по сравнению со стандартными настройками и даже фотошоопм
http://www.smashingmagazine.com/2015/06/efficient-image-resizing-with-imagemagick/


тут много скриптов по ImageMagick с описанием работы
http://www.fmwconcepts.com/imagemagick/aspect/index.php



вот так можно быстро заменить какое-нибудь слово во всех строках поля URL в таблице БД
```
UPDATE links
SET url = REPLACE(url, 'links/', 'files/')
```


Добавить нулей в начало имени файла
The command below renames only files that have four or fewer digits followed by a ".gif" extension. 
It does not rename files that do not strictly conform to that pattern. 
It does not truncate names that consist of more than four digits.
```
cd resources/img/risunki/pesok
rename 'unless (/0+[0-9]{4}.gif/) {s/^([0-9]{1,3}\.gif)$/000$1/g;s/0*([0-9]{4}\..*)/$1/}' *
```

вот статья об установке ларавел на vps
https://www.rosehosting.com/blog/install-laravel-on-linux-vps/