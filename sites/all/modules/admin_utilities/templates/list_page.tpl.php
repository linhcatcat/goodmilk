<?php
	$result = db_query('SELECT n.nid, n.title, n.created
	FROM {node} n WHERE n.type = "%s"', $type);
	my_set_message('Xin chao');
?>
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
