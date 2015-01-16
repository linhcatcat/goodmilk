<?php
	global $base_url;
	$obj = db_query("SELECT node.nid AS nid,
			node.title AS title,
			node_data_field_product_sub_image.field_product_sub_image_fid AS image_fid,
			node.created AS node_created
		FROM node node
		LEFT JOIN content_type_product node_data_field_product_sub_image ON node.vid = node_data_field_product_sub_image.vid
		WHERE (node.status <> 0) AND (node.type in ('product'))
		ORDER BY node_created DESC");
?>
<div class="slider-wrap">
	<div class="bg"><img src="<?php echo $base_url .'/'. drupal_get_path('theme', 'Bootstrap').'/images/bg-sp.png'; ?>"/></div>
	<div class="slider lazy">
		<?php
			while($obj_rs = db_fetch_object($obj)){

			$arr = field_file_load($obj_rs->image_fid);
			$path = $arr['filepath'];
			$url = $base_url .'/'. drupal_get_path_alias('node/'. $obj_rs->nid);
		?>
			<?php if( $arr ) { ?>
			<div>
				<div class="image">
					<a href="<?php print $url; ?>" title="<?php print $obj_rs->title; ?>">
						<img data-lazy="<?php print $base_url .'/'. $path; ?>"/>
					</a>
				</div>
			</div>
			<?php } ?>
		<?php } ?>
	</div>
	<script>
	$('.lazy').slick({
		lazyLoad: 'ondemand',
		slidesToShow: 6,
		slidesToScroll: 1,
		touchMove: true,
		autoplay: true
	});
	</script>
</div>
