<?php	
	//$nid
	//$tid
	$node_current = node_load(arg(1));
	$taxo = get_taxo($node_current->taxonomy);
	global $user, $base_url;
	$obj = db_query("SELECT node.nid AS nid,
	   node.title AS title,
	   node.language AS node_language,
	   node.created AS created
	 FROM node node 
	 WHERE (node.status <> 0) AND (node.type in ('news')) AND (node.nid != %d) AND (node.vid IN (
	  SELECT tn.vid FROM term_node tn
	  WHERE tn.tid  = %d
	  ))
	   ORDER BY created DESC
		", $nid, $taxo->tid);
?>
<?php if($obj){ ?>
<div class="other-news-wrap">	
	<div class="other-news-label">
		<div class="other-news-left"><?php print t('Các tin khác') ?></div>
		<div class="other-news-right">&nbsp;</div>
	</div>
	<div class="other-news-content">
		<ul>
		<?php $i=0; ?>
		<?php while($obj_rs = db_fetch_object($obj)){ ?>
			<?php 
				$path = $base_url .'/'. drupal_get_path_alias('node/'. $obj_rs->nid); 
				$node = node_load($obj_rs->nid);				
				$post_date = $node->created;
			?>
			<li class="item">
				<a href="<?php print $path; ?>" >
					<?php print $node->title .' '. date('(d/m)', $node->created) ;?>
				</a>
			</li>
		<?php $i++; } ?>
		</ul>
	</div>
	<div class="clear"></div>
</div>
<?php } ?>