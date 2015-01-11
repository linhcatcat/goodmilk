<?php
	$arg1 = arg(1);
	//$arg1 = 20;
	//smo(count_product(97, 7));
	//get_product($pid, $loai_id);
	$node = node_load($arg1);
	//smo($node->field_sanpham_thuvienanh);
	//smo(count($node->field_sanpham_thuvienanh));
?>
<div class="wrap-menu-block">
	<div class="title">Chi tiết</div>
	<ul>
		<li><?php print l('Giới thiệu','chi-tiet-sp/'.$arg1.'/gioi-thieu'); ?></li>
		<?php if($node->field_sanpham_thongsokythuat[0]['value']){ ?>
		<li><?php print l('Thông số kỉ thuật','chi-tiet-sp/'.$arg1.'/thong-so-ki-thuat'); ?></li>
		<?php } ?>
		<?php if(count_product($arg1, 1)){ ?>
		<li><?php print l('Đặc tính công nghệ','chi-tiet-sp/'.$arg1.'/dac-tinh-cong-nghe'); ?></li>
		<?php } ?>
		<?php if(count_product($arg1, 2)){ ?>
		<li><?php print l('Các điểm nổi bật','chi-tiet-sp/'.$arg1.'/cac-diem-noi-bat'); ?></li>
		<?php } ?>
		<?php if(count_product($arg1, 4)){ ?>
		<li><?php print l('Ngoại thất','chi-tiet-sp/'.$arg1.'/ngoai-that'); ?></li>
		<?php } ?>
		<?php if(count_product($arg1, 3)){ ?>
		<li><?php print l('Nội thất','chi-tiet-sp/'.$arg1.'/noi-that'); ?></li>
		<?php } ?>
		<?php if(count_product($arg1, 5)){ ?>
		<li><?php print l('Thiết kế linh hoạt','chi-tiet-sp/'.$arg1.'/thiet-ke-linh-hoat'); ?></li>
		<?php } ?>
		<?php if(count_product($arg1, 6)){ ?>
		<li><?php print l('Thiết kế hiện đại','chi-tiet-sp/'.$arg1.'/thiet-ke-hien-dai'); ?></li>
		<?php } ?>
		<?php if($node->field_sanpham_trangbitieuchuan[0]['value']){ ?>
		<li><?php print l('Trang bị tiêu chuẩn','chi-tiet-sp/'.$arg1.'/trang-bi-tieu-chuan'); ?></li>
		<?php } ?>
		<?php if(count_product($arg1, 7)){ ?>
		<li><?php print l('Tính năng lái ưu việt','chi-tiet-sp/'.$arg1.'/tinh-nang-lai-uu-viet'); ?></li>
		<?php } ?>
		<?php if($node->field_sanpham_thuvienanh[0]){ ?>
		<li><?php print l('Thư viện ảnh','chi-tiet-sp/'.$arg1.'/thu-vien-anh'); ?></li>
		<?php } ?>
	</ul>
</div>