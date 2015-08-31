<?php 
namespace App\Http\Controllers;

use Storage;
use Imagine\Image\Box;
use Imagine\Image\ImageInterface;
use Imagine\Image\Point;
use Imagine\Image\PointInterface;
use Orchestra\Imagine\ImagineManager;
use Orchestra\Imagine\Facade as Imagine;

class ImageController extends Controller {

	public function __construct()
	{	

	}


function create_thumbnails()
{
    $width  = 640;
    $height = 480;
    $size   = new Box($width, $height);
    $mode   = ImageInterface::THUMBNAIL_INSET;   
    // THUMBNAIL_INSET - это пропорциональное уменьшение фотки по одной из сторон (максимальной)
    // THUMBNAIL_OUTBOUND - это тупо обрезка в заданный размер, не сохраняя пропорций

    $img_path = 'img/risunki/sand';
    $thumb_path = 'img/risunki/sand/thumbs';
    // если не заменить последний backslash на локалке, то не находит путь thumb_path 
    // и сохраняет уменьшенную картинку в оригинальный файл
    $files = str_replace('\\', '/', Storage::files($img_path));
	//dd($files);
	$watermark = Imagine::open(base_path().'/resources/assets/watermark/watermark-2.png');
	$wSize     = $watermark->getSize();  // 350x250
	$bottomRight = new Point($size->getWidth() - $wSize->getWidth(), $size->getHeight() - $wSize->getHeight());

	//dd($bottomRight);

    foreach ($files as $file) 
    {
    	// imagine не знает где у меня root, поэтому ему надо задавать полный путь включая base_path()
	    $thumbnail   = Imagine::open(public_path().'/'.$file)
    		    		//->rotate(45)   // поворачивает фотку
    					//->resize(new Box(320, 240), ImageInterface::FILTER_LANCZOS)  // ресайз фотки - тупо сжимает в новые размеры, не сохраняя пропорции
    					->thumbnail($size, $mode)  // THUMBNAIL_INSET более умный ресайз
    					//->paste($watermark, $bottomRight)
    					->save(public_path().'/'.str_replace($img_path, $thumb_path, $file), array('jpeg_quality' => 75));
    					//->show('jpg'); // выводит фотку в браузер
     }

    $thumbnails = str_replace('\\', '/', Storage::files($thumb_path));

    return view('thumbs')->withFiles($files)->withThumbnails($thumbnails);  

}



}