<?php
	global $base_url, $user;
	$taxo = taxonomy_get_tree(1);
	$pager_limit = 3;
	$sql = "SELECT node.nid AS nid,
	   		node.title AS title,
	   		node_data_field_news_content.field_news_content_value AS news_content,
	   		node_data_field_news_content.field_news_images_fid AS news_images_fid,
	   		node_data_field_news_content.field_news_summary_value AS news_summary,
	   		node.changed AS node_changed
	 	FROM node node
	 	INNER JOIN term_node term_node ON node.vid = term_node.vid
	 	LEFT JOIN content_type_news node_data_field_news_content ON node.vid = node_data_field_news_content.vid
	 	WHERE (node.status <> 0) AND (node.type in ('news')) AND (term_node.tid = ". $tid .")
	   	ORDER BY node_changed DESC";
	$obj = pager_query($sql,$pager_limit, 0, NULL);
?>
<div class="row-fluid">
	<div class="span12">
		<ul class="home-tab nav nav-tabs" id="myTab">
			<?php foreach ($taxo as $key => $item) { ?>
			<li class="<?php print $item->tid==$tid?'active':''; ?>"><a href="<?php print $base_url .'/news/'. $item->tid .'/'. unicode_str_replace($item->name) ; ?>"><?php print $item->name; ?></a></li>
			<?php } ?>
		</ul>
	</div>
</div>
<?php while($obj_rs = db_fetch_object($obj)){ ?>
	<?php
		$arr = field_file_load($obj_rs->news_images_fid);
		$path = $arr['filepath'];
		$url = drupal_get_path_alias('node/'. $obj_rs->nid);
	?>
<div class="row-fluid news-item">
	<div class="span3 thumb">
		<?php if( $obj_rs->news_images_fid ){ ?>
		<a href="<?php print  $base_url .'/'. $url; ?>"><img src="<?php echo $base_url .'/'. $path; ?>"/></a>
		<?php } ?>
	</div>
	<div class="span9 text">
		<p class="title"><?php print l($obj_rs->title, $url); ?></p>
		<p class="date">Update: <?php print date('d/m/Y - h:i', $obj_rs->node_changed); ?></p>
		<div class="summary"><?php print $obj_rs->news_summary; ?></div>
	</div>
	<div class="clearfix"></div>
</div>
<?php } ?>

<?php print theme('pager', NULL, $pager_limit, 0); ?>
