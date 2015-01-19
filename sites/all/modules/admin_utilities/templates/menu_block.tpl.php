<?php
    $types = node_get_types();
    //var_dump($types);
?>
<ul class="nav nav-pills nav-stacked main-menu">
    <li class="nav-header">Main</li>
    <?php foreach ($types as $key => $type) {
        $class =  $type->description?$type->description:'glyphicon-align-justify';
    ?>
    <li><?php print l('<i class="glyphicon '.  $class .'"></i><span> '. $type->name .'</span>', 'admin-menu/'.$key, array('html' => true)); ?></li>
    <?php } ?>
</ul>
