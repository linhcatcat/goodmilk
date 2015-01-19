<?php
	$result = db_query('SELECT n.nid, n.title, n.created
	FROM {node} n WHERE n.type = "%s"', $type);
	//my_set_message('Xin chao');
	$arrAdds = array('product', 'news', 'recruitment');
?>
<div class="box-header well" data-original-title="">
    <h2>
    	<i class="glyphicon glyphicon-user"></i>
    	<?php
    		if(in_array($type, $arrAdds)) {
    			print l('Add '.$type, 'add/node/'.$type.'?distination=admin-menu/'.$type);
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
	        <td class="center"><?php date('d-m-Y H:s', $node->created); ?></td>
	        <td class="center">
	            <a class="btn btn-success" href="#">
	                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
	                View
	            </a>
	            <a class="btn btn-info" href="#">
	                <i class="glyphicon glyphicon-edit icon-white"></i>
	                Edit
	            </a>
	            <a class="btn btn-danger" href="#">
	                <i class="glyphicon glyphicon-trash icon-white"></i>
	                Delete
	            </a>
	        </td>
	    </tr>
		<?php } ?>
		</tbody>
	</table>
</div>
