<?php
	global $base_url;
	$obj = db_query("SELECT node.nid AS nid,
	   node.title AS title,
	   node.language AS node_language,
	   node_data_field_services_image.field_services_image_fid AS image_fid,
	   node.type AS node_type,
	   node.vid AS node_vid,
	   node.created AS node_created
	 FROM node node 
	 LEFT JOIN content_type_services node_data_field_services_image ON node.vid = node_data_field_services_image.vid
	 WHERE (node.status <> 0) AND (node.type in ('services'))
	   ORDER BY node_created DESC
	");
	$i = 0;
?>
<div class="content-home services-home">
	<h2 class="content-title">Dịch vụ</h2>
	<div class="services-content">
		<?php while($obj_rs = db_fetch_object($obj)){ ?>
		<?php 
			$arr = field_file_load($obj_rs->image_fid);
			$path = $arr['filepath'];
			$url = drupal_get_path_alias('node/'. $obj_rs->nid);
			if($i==0){
				$cls = ' first';
			} else {
				$cls = '';
			}
		?>
		<div class="services-item<?php print $cls; ?>">
			<div class="services-item-title"><?php print l($obj_rs->title,$url); ?></div>
			<div class="services-item-content">
				<a href="<?php print $base_url .'/'. $url; ?>"><img src="<?php print $base_url .'/'. $path; ?>"/></a>
			</div>
		</div>
		<?php $i++; } ?>
		<div class="clear"></div>
	</div>
</div>