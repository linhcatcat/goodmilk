<?php
	$result = db_query('SELECT n.nid, n.title, n.created
	FROM {node} n WHERE n.type = "%s"', $type);
	//my_set_message('Xin chao');
	$arrAdds = array('product', 'news', 'recruitment');
	global $base_url;
	$path = $base_url .'/'. drupal_get_path('theme', 'admin') .'/admin/';
?>
<script src="<?php print $path; ?>bower_components/jquery/jquery.min.js"></script>
<div class="box-header well" data-original-title="">
    <h2>
    	<i class="glyphicon glyphicon-user"></i>
    	<?php
    		if(in_array($type, $arrAdds)) {
    			print l('Add '.$type,'node/add/'.$type, array('query' => array('distination' => 'admin-menu/'.$type)));
    		}
    	?>
    </h2>

    <div class="box-icon">
        <a href="#" class="btn btn-setting btn-round btn-default"><i class="glyphicon glyphicon-cog"></i></a>
        <a href="#" class="btn btn-minimize btn-round btn-default"><i
                class="glyphicon glyphicon-chevron-up"></i></a>
        <!--<a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>-->
    </div>
</div>
<div class="box-content">
	<table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
	    <thead>
	    <tr>
	        <th>Title</th>
	        <th>Created</th>
	        <th>Actions</th>
	    </tr>
	    </thead>
	    <tbody>
		<?php while ($node = db_fetch_object($result)) { ?>
		<tr>
	        <td><?php print $node->title; ?></td>
	        <td class="center"><?php print date('d-m-Y H:s', $node->created); ?></td>
	        <td class="center">
	            <?php print l('<i class="glyphicon glyphicon-edit icon-white"></i> edit', 'node/'.$node->nid.'/edit', array('query' => array('destination' => 'admin-menu/'.$type), 'html' => true, 'attributes' => array('class' => 'btn btn-info'))); ?>
	            <?php if(in_array($type, $arrAdds)) { ?>
	            	<?php print l('<i class="glyphicon glyphicon-trash icon-white"></i> Delete', 'node/'.$node->nid.'/delete', array('query' => array('destination' => 'admin-menu/'.$type), 'html' => true, 'attributes' => array('class' => 'btn btn-danger'))); ?>
	            <?php } ?>
	        </td>
	    </tr>
		<?php } ?>
		</tbody>
	</table>
</div>
