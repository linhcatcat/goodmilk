<?php
	global $base_url;
	$node = node_load($cid);
	drupal_set_title($node->title);
?>
<div class="wrap-home-page">
	<ul>
		<li>
			<ul>
				<?php 					
		$obj1 = db_query("SELECT node.nid AS nid,
			node_data_field_xecu_giagiam.field_xecu_giagiam_value AS giagiam_value, 		
			node.language AS node_language, 
			node.type AS node_type, 
			node.vid AS node_vid, 
			node_data_field_xecu_giagiam.field_xecu_hinhanh_fid AS hinhanh_fid,
			node_data_field_xecu_giagiam.field_xecu_giagoc_value AS giagoc_value, node_data_field_xecu_giagiam.field_xecu_tomtat_value AS tomtat_value, node.title AS node_title, 
			node.created AS node_created 
			FROM node node  
				INNER JOIN content_type_xecu node_data_field_xecu_loaixe ON node.vid = node_data_field_xecu_loaixe.vid 
				LEFT JOIN content_type_xecu node_data_field_xecu_giagiam ON node.vid = node_data_field_xecu_giagiam.vid 
			WHERE (node.status <> 0) AND (node.type in ('xecu')) AND (node_data_field_xecu_loaixe.field_xecu_loaixe_nid = '". $cid ."') 
			ORDER BY node_created ASC
			");
				?>
				<li>
				<?php 
					$flag = 0;
					$i = 1;
					while($obj_rs1 = db_fetch_object($obj1)){ 
					$flag = 1;
					$arr = field_file_load($obj_rs1->hinhanh_fid);
					$path = $arr['filepath'];
					$url = $base_url .'/chi-tiet-sp/'. $obj_rs1->nid .'/gioi-thieu';
					if($i%4==0){
						$cls = " first";
					} else {
						$cls = "";
					}
					
				?>
					<div class="item<?php print $cls; ?>">
						<div class="img">
						<a href="<?php print $url; ?>"><img src="<?php print $base_url .'/'. $path; ?>"/></a>
						</div>
						<div class="title"><?php print l($obj_rs1->node_title, '/chi-tiet-sp/'. $obj_rs1->nid .'/gioi-thieu'); ?></div>
						<div class="summ"><?php print $obj_rs1->tomtat_value; ?></div>
						<div class="price"><span>Giá gốc:</span> <?php print number_format($obj_rs1->giagoc_value,0,',','.'); ?> VNĐ</div>
						<div class="price"><span>Giá giảm:</span> <?php print number_format($obj_rs1->giagiam_value,0,',','.'); ?> VNĐ</div>
					</div>
					
				<?php 
					if($i%3==0){
						print '<div class="clear"></div>';
					}
					$i++;
					}
					if($flag==0){
						print '<div class="center">Đang cập nhật thông tin!</div>';
					}					
				?>
				<div class="clear"></div>
				</li>
			</ul>
		</li>
	</ul>
</div>