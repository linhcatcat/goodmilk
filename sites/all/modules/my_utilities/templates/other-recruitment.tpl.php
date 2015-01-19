<?php
	$result = db_query('SELECT n.nid, n.title, n.created
		FROM {node} n WHERE n.type = "recruitment" and n.nid <> %d
		ORDER BY n.created DESC', $nid);
?>
<div class="other-recruitment">
	<h4 class="title">Tuyển dụng khác</h4>
	<ul>
		<?php while ($node = db_fetch_object($result)) { ?>
		<li><?php print l($node->title, 'node/'.$node->nid); ?></li>
		<?php } ?>
	</ul>
</div>
