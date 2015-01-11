<?php
	$obj = db_query("SELECT node.nid AS nid, 
			node.title AS node_title, 
			node.language AS node_language, 
			node.created AS node_created 
		FROM node node  
		WHERE (node.status <> 0) AND (node.type in ('loaixe')) 
		ORDER BY node_created ASC");
?>
<div class="wrap-menu-block">
	<div class="title">Xe Ford</div>
	<ul>
		<?php while($obj_rs = db_fetch_object($obj)){ ?>
		<li><?php print l($obj_rs->node_title,'xe-cu/'.$obj_rs->nid.'/'.unicode_str_replace($obj_rs->node_title)) ?></li>
		<?php } ?>
	</ul>
</div>