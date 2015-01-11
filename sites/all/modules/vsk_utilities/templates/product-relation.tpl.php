<?php
	//$cid
	global $base_url;
	$node_current = node_load(arg(1));
	$taxo = get_taxo($node_current->taxonomy);
	$sql = "SELECT node.nid AS nid, 
		node.title AS title, 
		node.language AS node_language, 
		node_data_field_product_image.field_product_image_fid AS image_fid, 
		node.type AS node_type, node.vid AS node_vid, 
		node.created AS node_created 
	FROM node node  LEFT JOIN content_type_product node_data_field_product_image ON node.vid = node_data_field_product_image.vid 
	WHERE (node.type in ('product')) AND (node.status <> 0) AND (node.nid != %d) AND (node.vid IN (
	  SELECT tn.vid FROM term_node tn
	  WHERE tn.tid  = %d
	  )) ORDER BY node_created DESC";
	$obj = db_query($sql,$node_current->nid, $taxo->tid);
	$i = 0;$j = 1;
?>
<div class="wrap-product-relation">
	<div class="relation-title">Sản phẩm cùng danh mục</div>
	<div class="clear"></div>
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
		$i++;		
	?>
	<div class="product-item<?php print $cls; ?>">
		<div class="item-left"><a href="<?php print $base_url .'/'. $url; ?>"><?php print theme('imagecache','image-178',$path); ?></a></div>
		<div class="item-right">
			<div class="right-title"><?php print l($obj_rs->title, $url); ?></div>
		</div>
		<div class="clear"></div>
	</div>
	<?php if($j%3==0){ ?>
	<div class="clear"></div>
	<?php } ?>
	<?php $j++; ?>
	<?php } ?>
</div>
<div class="clear"></div>