<?php 	if ($furniture->title != NULL) : ?>
	
<div class="furniture"> 
	<div class="furniture-photo"> 
	
	<?php	if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/images/furniture/'.$furniture->id.'-big-2.jpg')) : ?>
	<a href="/images/furniture/<?php echo $furniture->id; ?>-big.jpg" rel="prettyPhoto[<?php echo $furniture->id; ?>]" title="<?php echo $this->escape($this->item->title); ?>"><img src="/images/furniture/<?php echo $furniture->id; ?>-medium.jpg"/></a>
	<?php  
		$i = 2;
		while ($i <= 10):
			$furniture_image_big = '/images/furniture/'.$furniture->id.'-big-' . $i . '.jpg';
			if (file_exists($_SERVER['DOCUMENT_ROOT'] . $furniture_image_big)) :
			echo '<a class="hidden" href="'.$furniture_image_big.'" rel="prettyPhoto['.$furniture->id.']" title="'.$this->escape($this->item->title).'"></a>' ;
			endif;
			$i++;
		endwhile;
	?>	
	<?php 	elseif (file_exists($_SERVER['DOCUMENT_ROOT'] . '/images/furniture/'.$furniture->id.'-big.jpg')) :  ?>
	<a href="/images/furniture/<?php echo $furniture->id; ?>-big.jpg" rel="prettyPhoto" title="<?php echo $this->escape($this->item->title); ?>"><img src="/images/furniture/<?php echo $furniture->id; ?>-medium.jpg"/></a>
	<?php 	endif; ?>
	
	</div> 
	
	<div class="furniture-characteristic"> 
		<table class="category table table-striped table-bordered table-hover"> <tbody> 
		<tr><th>Артикул:</th><td><?php echo $furniture->artikul;?></td></tr> 
		<tr><th>Отделка:</th><td><?php echo $furniture->otdelka;?></td></tr> 
		<tr><th>Ед. изм.:</th><td><?php echo $furniture->pcs;?></td></tr> 
		<tr><th>Описание:</th><td><?php echo $furniture->description;?></td></tr> 
		</tbody>
		</table>
	

		<div class="furniture-links"> 

	<?php	if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/images/furniture/'.$furniture->artikul.'-dwg-2.jpg')) : ?>
	<a href="/images/furniture/<?php echo $furniture->artikul; ?>-dwg.jpg" rel="prettyPhoto[dwg]" title="Чертежи"><i class="icon-pencil-2 icon-large"></i>Чертежи</a><br /> 
	<?php  
		$j = 2;
		while ($j <= 10):
			$dwg_image = '/images/furniture/'.$furniture->artikul.'-dwg-' . $j . '.jpg';
			if (file_exists($_SERVER['DOCUMENT_ROOT'] . $dwg_image)) :
			echo '<a class="hidden" href="'.$dwg_image.'" rel="prettyPhoto[dwg]" title="Чертежи"></a>' ;
			endif;
			$j++;
		endwhile;
	?>	
	<?php 	elseif (file_exists($_SERVER['DOCUMENT_ROOT'] . '/images/furniture/'.$furniture->artikul.'-dwg.jpg')) : ?>
	<a href="/images/furniture/<?php echo $furniture->artikul; ?>-dwg.jpg" rel="prettyPhoto" title="Чертежи"><i class="icon-pencil-2 icon-large"></i>Чертежи</a><br />
	<?php 	else : ?>

	<?php 	endif; ?>
	

	<?php	if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/images/furniture/'.$furniture->artikul.'-virez-2.jpg')) : ?>
	<a href="/images/furniture/<?php echo $furniture->artikul; ?>-virez.jpg" rel="prettyPhoto[virez]" title="Вырезы в стекле"><i class="icon-scissors icon-large"></i>Вырезы в стекле</a><br /> 
	<?php  
		$k = 2;
		while ($k <= 10):
			$virez_image = '/images/furniture/'.$furniture->artikul.'-virez-' . $k . '.jpg';
			if (file_exists($_SERVER['DOCUMENT_ROOT'] . $virez_image)) :
			echo '<a class="hidden" href="'.$virez_image.'" rel="prettyPhoto[virez]" title="Вырезы в стекле"></a>' ;
			endif;
			$k++;
		endwhile;
	?>	
	<?php 	elseif (file_exists($_SERVER['DOCUMENT_ROOT'] . '/images/furniture/'.$furniture->artikul.'-virez.jpg')) : ?>
	<a href="/images/furniture/<?php echo $furniture->artikul; ?>-virez.jpg" rel="prettyPhoto" title="Вырезы в стекле"><i class="icon-scissors icon-large"></i>Вырезы в стекле</a><br />
	
	<?php 	else : ?>
	
	<?php 	endif; ?>
	
	<a href="#CallBack" title="Обратный звонок" data-toggle="modal"><i class="icon-question-2 icon-large"></i>Задать вопрос по этому товару</a> 

		</div> 

	</div> 
</div>	
<?php 	endif; ?>