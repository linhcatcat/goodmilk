<?php
	global $base_url;	
?>
<?php
	drupal_add_css(drupal_get_path('module', 'vsk_utilities').'/css/scroll.css');
	drupal_add_js(drupal_get_path('module', 'vsk_utilities').'/js/jquery.imageScroller.js', 'header');
	drupal_add_js(drupal_get_path('module', 'vsk_utilities').'/js/left-scroll.js', 'header');
?>
<?php
	$obj = db_query("SELECT node.nid AS nid,
	   node.title AS title,
	   node.language AS node_language,
	   node_data_field_partner_footer_image.field_partner_footer_image_fid AS image_fid,
	   node.type AS node_type,
	   node.vid AS node_vid,
	   RAND() AS _random
	 FROM node node 
	 LEFT JOIN content_type_partner_footer node_data_field_partner_footer_image ON node.vid = node_data_field_partner_footer_image.vid
	 WHERE (node.status <> 0) AND (node.type in ('partner_footer'))
	   ORDER BY _random ASC
	");
?>
<div id='left-scroll'>
	<?php while($obj_rs = db_fetch_object($obj)){ ?>
	<?php
		$arr = field_file_load($obj_rs->image_fid);
		$path = $arr['filepath'];
	?>
	<a href='<?php print $obj_rs->title; ?>' ><?php print theme('imagecache','image-100',$path); ?></a>
	<?php } ?>
	<!--
	<img src='<?php print $base_url .'/'. drupal_get_path('module', 'vsk_utilities'); ?>/images/pre2.jpg' title='Pesca' />
	<a href='#' title='Tigre'><img src='<?php print $base_url .'/'. drupal_get_path('module', 'vsk_utilities'); ?>/images/pre3.jpg' /></a>
	<img src='<?php print $base_url .'/'. drupal_get_path('module', 'vsk_utilities'); ?>/images/pre4.jpg' title='Lago' />
	<a href='#' title='Abstract'><img src='<?php print $base_url .'/'. drupal_get_path('module', 'vsk_utilities'); ?>/images/pre5.jpg' /></a>
	<a href='#' title='Balletto'><img src='<?php print $base_url .'/'. drupal_get_path('module', 'vsk_utilities'); ?>/images/pre1.jpg' /></a>
	<img src='<?php print $base_url .'/'. drupal_get_path('module', 'vsk_utilities'); ?>/images/pre2.jpg' title='Pesca' />
	<img src='<?php print $base_url .'/'. drupal_get_path('module', 'vsk_utilities'); ?>/images/pre4.jpg' title='Lago' />
	<a href='#' title='Abstract'><img src='<?php print $base_url .'/'. drupal_get_path('module', 'vsk_utilities'); ?>/images/pre5.jpg' /></a>
	-->
</div>