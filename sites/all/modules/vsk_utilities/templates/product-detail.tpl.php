<?php
	//$pid
	global $base_url;
	$node = node_load($pid);
	//smo(node_load($pid));
?>
<div class="product-detail">
	<?php if(arg(2)=='gioi-thieu'){ ?>
	<div class="detail-01">
		<div class="left"><img src="<?php print $base_url .'/'.$node->field_sanpham_hinhanh[0]['filepath']; ?>" /></div>
		<div class="right">
			<div class="title"><?php print $node->title; ?></div>
			<div class="summ"><?php print $node->field_sanpham_tomtat[0]['value']; ?></div>
		</div>
		<div class="clear"></div>
		<div class="intro"><?php print $node->field_sanpham_gioithieu[0]['value']; ?></div>
	</div>
	<?php } elseif(arg(2)=='thong-so-ki-thuat'){ ?>
		<?php if($node->field_sanpham_thongsokythuat[0]['value']){ ?>
		<div class="detail-02">
			<div class="title"><?php print 'Thông số kỉ thật'; ?></div>
			<div class="intro"><?php print $node->field_sanpham_thongsokythuat[0]['value']; ?></div>
		</div>
		<?php } else{ ?>
			<div class="center">Đang cập nhật thông tin!</div>
		<?php } ?>
	<?php }elseif(arg(2)=='trang-bi-tieu-chuan'){ ?>
		<?php if($node->field_sanpham_trangbitieuchuan[0]['value']){ ?>
		<div class="detail-02">
			<div class="title"><?php print 'Trang bị tiêu chuẩn'; ?></div>
			<div class="intro"><?php print $node->field_sanpham_trangbitieuchuan[0]['value']; ?></div>
		</div>
		<?php } else{ ?>
			<div class="center">Đang cập nhật thông tin!</div>
		<?php } ?>
	<?php }elseif(arg(2)=='thu-vien-anh'){ ?>
		<?php if($node->field_sanpham_thuvienanh){ ?>
		<div class="detail-03">
			<div class="title"><?php print 'Thư viện ảnh'; ?></div>
			<div id="thu-vien-anh">
				<div class="left">
					<ul>
						<?php foreach($node->field_sanpham_thuvienanh AS $key => $value){ ?>
						<li><a href="#tabs-<?php print $key+1; ?>">
						<?php print theme('imagecache', 'image-85', $value['filepath']); ?></a></li>
						<?php } ?>
						<div class="clear"></div>
					</ul>
				</div>
				<div class="right">
					<?php foreach($node->field_sanpham_thuvienanh AS $key1 => $value1){ ?>
					<div id="tabs-<?php print $key1+1; ?>"><img src="<?php print $base_url .'/'. $value1['filepath']; ?>"/>
					<div class="title"><?php print $value1['data']['title']; ?></div>
					</div>
					<?php } ?>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<?php } else{ ?>
			<div class="center">Đang cập nhật thông tin!</div>
		<?php } ?>
	<?php }elseif(arg(2)=='tinh-nang-lai-uu-viet'){ ?>
		<?php
			$aProducts = get_product($pid, 7);
		?>
		<?php if(count_product($pid, 7)){ ?>
		<div class="detail-03 detail-04">
			
			<div class="title"><?php print 'Tính năng lái ưu việt'; ?></div>
			<div id="thu-vien-anh">
				<div class="left">
					<ul>
						<?php 
						$i=1;
						foreach($aProducts as $obj_rs2){
							$arr = field_file_load($obj_rs2->thongso_hinhanh_fid);
							$path = $arr['filepath'];
						?>
						<li><a href="#tabs-<?php print $i; ?>">
						<?php print theme('imagecache', 'image-85', $path); ?>
						<div class="span"><?php print $obj_rs2->node_title; ?></div>
						</a></li>
						<?php 
						$i++;
						} 
						?>
						<div class="clear"></div>
					</ul>
				</div>
				<div class="right">
					<?php 
						$j=1;
						foreach($aProducts as $obj_rs3){
							$arr = field_file_load($obj_rs3->thongso_hinhanh_fid);
							$path = $arr['filepath'];
						?>
					<div id="tabs-<?php print $j; ?>"><img src="<?php print $base_url .'/'. $path; ?>"/>
					<div class="title"><?php print $obj_rs3->node_title; ?></div>
					<div class="content"><?php print $obj_rs3->noidung_value; ?></div>
					</div>
					<?php
					$j++;
					} 
					?>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<?php } else{ ?>
			<div class="center">Đang cập nhật thông tin!</div>
		<?php } ?>
	<?php }elseif(arg(2)=='thiet-ke-hien-dai'){ ?>
		<?php
			$aProducts = get_product($pid, 6);
		?>
		<?php if(count_product($pid, 6)){ ?>
		<div class="detail-03 detail-04">
			
			<div class="title"><?php print 'Thiết kết hiện đại'; ?></div>
			<div id="thu-vien-anh">
				<div class="left">
					<ul>
						<?php 
						$i=1;
						foreach($aProducts as $obj_rs2){
							$arr = field_file_load($obj_rs2->thongso_hinhanh_fid);
							$path = $arr['filepath'];
						?>
						<li><a href="#tabs-<?php print $i; ?>">
						<?php print theme('imagecache', 'image-85', $path); ?>
						<div class="span"><?php print $obj_rs2->node_title; ?></div>
						</a></li>
						<?php 
						$i++;
						} 
						?>
						<div class="clear"></div>
					</ul>
				</div>
				<div class="right">
					<?php 
						$j=1;
						foreach($aProducts as $obj_rs3){
							$arr = field_file_load($obj_rs3->thongso_hinhanh_fid);
							$path = $arr['filepath'];
						?>
					<div id="tabs-<?php print $j; ?>"><img src="<?php print $base_url .'/'. $path; ?>"/>
					<div class="title"><?php print $obj_rs3->node_title; ?></div>
					<div class="content"><?php print $obj_rs3->noidung_value; ?></div>
					</div>
					<?php
					$j++;
					} 
					?>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<?php } else{ ?>
			<div class="center">Đang cập nhật thông tin!</div>
		<?php } ?>
	<?php }elseif(arg(2)=='thiet-ke-linh-hoat'){ ?>
		<?php
			$aProducts = get_product($pid, 5);
		?>
		<?php if(count_product($pid, 5)){ ?>
		<div class="detail-03 detail-04">
			
			<div class="title"><?php print 'Thiết kế linh hoạt'; ?></div>
			<div id="thu-vien-anh">
				<div class="left">
					<ul>
						<?php 
						$i=1;
						foreach($aProducts as $obj_rs2){
							$arr = field_file_load($obj_rs2->thongso_hinhanh_fid);
							$path = $arr['filepath'];
						?>
						<li><a href="#tabs-<?php print $i; ?>">
						<?php print theme('imagecache', 'image-85', $path); ?>
						<div class="span"><?php print $obj_rs2->node_title; ?></div>
						</a></li>
						<?php 
						$i++;
						} 
						?>
						<div class="clear"></div>
					</ul>
				</div>
				<div class="right">
					<?php 
						$j=1;
						foreach($aProducts as $obj_rs3){
							$arr = field_file_load($obj_rs3->thongso_hinhanh_fid);
							$path = $arr['filepath'];
						?>
					<div id="tabs-<?php print $j; ?>"><img src="<?php print $base_url .'/'. $path; ?>"/>
					<div class="title"><?php print $obj_rs3->node_title; ?></div>
					<div class="content"><?php print $obj_rs3->noidung_value; ?></div>
					</div>
					<?php
					$j++;
					} 
					?>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<?php } else{ ?>
			<div class="center">Đang cập nhật thông tin!</div>
		<?php } ?>
	<?php }elseif(arg(2)=='ngoai-that'){ ?>
		<?php
			$aProducts = get_product($pid, 4);
		?>
		<?php if(count_product($pid, 4)){ ?>
		<div class="detail-03 detail-04">
			
			<div class="title"><?php print 'Ngoại thất'; ?></div>
			<div id="thu-vien-anh">
				<div class="left">
					<ul>
						<?php 
						$i=1;
						foreach($aProducts as $obj_rs2){
							$arr = field_file_load($obj_rs2->thongso_hinhanh_fid);
							$path = $arr['filepath'];
						?>
						<li><a href="#tabs-<?php print $i; ?>">
						<?php print theme('imagecache', 'image-85', $path); ?>
						<div class="span"><?php print $obj_rs2->node_title; ?></div>
						</a></li>
						<?php 
						$i++;
						} 
						?>
						<div class="clear"></div>
					</ul>
				</div>
				<div class="right">
					<?php 
						$j=1;
						foreach($aProducts as $obj_rs3){
							$arr = field_file_load($obj_rs3->thongso_hinhanh_fid);
							$path = $arr['filepath'];
						?>
					<div id="tabs-<?php print $j; ?>"><img src="<?php print $base_url .'/'. $path; ?>"/>
					<div class="title"><?php print $obj_rs3->node_title; ?></div>
					<div class="content"><?php print $obj_rs3->noidung_value; ?></div>
					</div>
					<?php
					$j++;
					} 
					?>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<?php } else{ ?>
			<div class="center">Đang cập nhật thông tin!</div>
		<?php } ?>
	<?php }elseif(arg(2)=='noi-that'){ ?>
		<?php
			$aProducts = get_product($pid, 3);
		?>
		<?php if(count_product($pid, 3)){ ?>
		<div class="detail-03 detail-04">
			
			<div class="title"><?php print 'Nội thất'; ?></div>
			<div id="thu-vien-anh">
				<div class="left">
					<ul>
						<?php 
						$i=1;
						foreach($aProducts as $obj_rs2){
							$arr = field_file_load($obj_rs2->thongso_hinhanh_fid);
							$path = $arr['filepath'];
						?>
						<li><a href="#tabs-<?php print $i; ?>">
						<?php print theme('imagecache', 'image-85', $path); ?>
						<div class="span"><?php print $obj_rs2->node_title; ?></div>
						</a></li>
						<?php 
						$i++;
						} 
						?>
						<div class="clear"></div>
					</ul>
				</div>
				<div class="right">
					<?php 
						$j=1;
						foreach($aProducts as $obj_rs3){
							$arr = field_file_load($obj_rs3->thongso_hinhanh_fid);
							$path = $arr['filepath'];
						?>
					<div id="tabs-<?php print $j; ?>"><img src="<?php print $base_url .'/'. $path; ?>"/>
					<div class="title"><?php print $obj_rs3->node_title; ?></div>
					<div class="content"><?php print $obj_rs3->noidung_value; ?></div>
					</div>
					<?php
					$j++;
					} 
					?>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<?php } else{ ?>
			<div class="center">Đang cập nhật thông tin!</div>
		<?php } ?>
	<?php }elseif(arg(2)=='cac-diem-noi-bat'){ ?>
		<?php
			$aProducts = get_product($pid, 2);
		?>
		<?php if(count_product($pid, 2)){ ?>
		<div class="detail-03 detail-04">
			
			<div class="title"><?php print 'Các điểm nổi bật'; ?></div>
			<div id="thu-vien-anh">
				<div class="left">
					<ul>
						<?php 
						$i=1;
						foreach($aProducts as $obj_rs2){
							$arr = field_file_load($obj_rs2->thongso_hinhanh_fid);
							$path = $arr['filepath'];
						?>
						<li><a href="#tabs-<?php print $i; ?>">
						<?php print theme('imagecache', 'image-85', $path); ?>
						<div class="span"><?php print $obj_rs2->node_title; ?></div>
						</a></li>
						<?php 
						$i++;
						} 
						?>
						<div class="clear"></div>
					</ul>
				</div>
				<div class="right">
					<?php 
						$j=1;
						foreach($aProducts as $obj_rs3){
							$arr = field_file_load($obj_rs3->thongso_hinhanh_fid);
							$path = $arr['filepath'];
						?>
					<div id="tabs-<?php print $j; ?>"><img src="<?php print $base_url .'/'. $path; ?>"/>
					<div class="title"><?php print $obj_rs3->node_title; ?></div>
					<div class="content"><?php print $obj_rs3->noidung_value; ?></div>
					</div>
					<?php
					$j++;
					} 
					?>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<?php } else{ ?>
			<div class="center">Đang cập nhật thông tin!</div>
		<?php } ?>
	<?php }elseif(arg(2)=='dac-tinh-cong-nghe'){ ?>
		<?php
			$aProducts = get_product($pid, 1);
		?>
		<?php if(count_product($pid, 1)){ ?>
		<div class="detail-03 detail-04">
			
			<div class="title"><?php print 'Đặc tính công nghệ '; ?></div>
			<div id="thu-vien-anh">
				<div class="left">
					<ul>
						<?php 
						$i=1;
						foreach($aProducts as $obj_rs2){
							$arr = field_file_load($obj_rs2->thongso_hinhanh_fid);
							$path = $arr['filepath'];
						?>
						<li><a href="#tabs-<?php print $i; ?>">
						<?php print theme('imagecache', 'image-85', $path); ?>
						<div class="span"><?php print $obj_rs2->node_title; ?></div>
						</a></li>
						<?php 
						$i++;
						} 
						?>
						<div class="clear"></div>
					</ul>
				</div>
				<div class="right">
					<?php 
						$j=1;
						foreach($aProducts as $obj_rs3){
							$arr = field_file_load($obj_rs3->thongso_hinhanh_fid);
							$path = $arr['filepath'];
						?>
					<div id="tabs-<?php print $j; ?>"><img src="<?php print $base_url .'/'. $path; ?>"/>
					<div class="title"><?php print $obj_rs3->node_title; ?></div>
					<div class="content"><?php print $obj_rs3->noidung_value; ?></div>
					</div>
					<?php
					$j++;
					} 
					?>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<?php } else{ ?>
			<div class="center">Đang cập nhật thông tin!</div>
		<?php } ?>
	<?php } else { ?>
		<div class="center">Đang cập nhật thông tin!</div>
	<?php } ?>	
</div>

<script src="<?php print $base_url .'/'. drupal_get_path('module', 'vsk_utilities'); ?>/js/jquery.js" type="text/javascript"></script>
<script src="<?php print $base_url .'/'. drupal_get_path('module', 'vsk_utilities'); ?>/js/jquery-ui.js" type="text/javascript"></script>
<script>
$(function() {
	$( "#thu-vien-anh" ).tabs();
});
</script>