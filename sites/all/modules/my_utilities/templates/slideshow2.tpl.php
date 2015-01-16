<?php
	global $base_url;
	$slideshow = node_load(array(
		'type' => 'slideshow2',
	));
?>
<div id="myCarousel" class="carousel slide carousel-fade">
	<!-- Carousel items -->
	<div class="carousel-inner">
		<?php foreach ($slideshow->field_slideshow2_image as $key => $item) {?>
		<div class="<?php print $key==0?'active ':'' ?>item"><img src="<?php echo $base_url .'/'. $item['filepath']; ?>"/></div>
		<?php } ?>
	</div>
</div>
