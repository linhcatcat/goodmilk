<?php
	global $base_url;
	$obj = db_query("SELECT node.nid AS nid, 
			node.title AS title, 
			node.language AS node_language, 
			node_data_field_banner_image.field_banner_image_fid AS image_fid, 
			node.type AS node_type, node.vid AS node_vid 
		FROM node node  
		LEFT JOIN content_type_banner node_data_field_banner_image ON node.vid = node_data_field_banner_image.vid 
		WHERE (node.status <> 0) AND (node.type in ('banner'))");
?>
<?php
	drupal_add_css(drupal_get_path('module', 'vsk_utilities').'/css/slideshow.min.css');
	drupal_add_js(drupal_get_path('module', 'vsk_utilities').'/js/jquery.easing.1.3.min.js', 'header');
	drupal_add_js(drupal_get_path('module', 'vsk_utilities').'/js/jquery.cycle.all.min.js', 'header');
	drupal_add_js(drupal_get_path('module', 'vsk_utilities').'/js/slideshow.setting.js', 'header');
?>

<div id="Slideshow" style="position:relative;width:<?php print $width;?>px;height:<?php print $height;?>px;">
	<div id="SlideRepeat"></div>
	<div id="Slides">
		<?php while($obj_rs = db_fetch_object($obj)){ ?>
		<?php
			$arr = field_file_load($obj_rs->image_fid);
			$path = $arr['filepath'];
		?>
		<a href="#"><img src="<?php print $base_url .'/'. $path; ?>" width="<?php print $width; ?>" height="<?php print $height; ?>" />
		<div class="text">
		<h1>New Ford Focus 1.8 AT 5-door</h1>
		<p>Xăng 1.8L Duratec 16 van 4 số tự động</p>
		</div>
		</a>
		<?php } ?>
	</div>
	<div id="slidePager"></div>
</div>
