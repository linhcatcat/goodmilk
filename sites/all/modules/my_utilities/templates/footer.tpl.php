<?php
	global $base_url;
?>
<div class="bg-footer"><img class="img-responsive" src="<?php echo $base_url .'/'. drupal_get_path('theme', 'Bootstrap').'/images/bg-footer.png'; ?>" /></div>
	<div class="container">
		<div class="row-fluid">
			<div class="span7">
				<p class="link-social">Liên kết social:
					<a href="#"><img src="<?php echo $base_url .'/'. drupal_get_path('theme', 'Bootstrap').'/images/f.png'; ?>" /></a>
					<a href="#"><img src="<?php echo $base_url .'/'. drupal_get_path('theme', 'Bootstrap').'/images/t.png'; ?>" /></a>
					<a href="#"><img src="<?php echo $base_url .'/'. drupal_get_path('theme', 'Bootstrap').'/images/l.png'; ?>" /></a>
					<a href="#"><img src="<?php echo $base_url .'/'. drupal_get_path('theme', 'Bootstrap').'/images/g.png'; ?>" /></a>
					<a href="#"><img src="<?php echo $base_url .'/'. drupal_get_path('theme', 'Bootstrap').'/images/y.png'; ?>" /></a>
				</p>
				<ul class="menu-footer">
					<li><a href="#">Trang chủ</a></li>
					<li><a href="#">Thông tin liên lac</a></li>
					<li><a href="#">Điều khoản sử dụng</a></li>
					<li><a href="#">Sơ đồ website</a></li>
				</ul>
				<p class="copyright">© 2014 Copyright by Goodmilk. All rights reserved.</p>
			</div>
			<div class="span5">
				<?php
					$time = time() - 60;
					$time1 = time() - 120;
					$count = db_result( db_query("SELECT count(*) FROM {sessions} WHERE timestamp > $time" ) );
				?>
				<p class="pagination-right">
					Lượt truy cập: <?php print $pagehit = variable_get('site_pagehit',0); ?> -
					Online: <?php print $count==0?1:$count; ?>
				</p>
				<?php
					if( db_result( db_query("SELECT count(*) FROM {sessions} WHERE timestamp > $time1 and sid = '%s'",session_id()) ) == 0 ){
						variable_set('site_pagehit', $pagehit+1);
					}
				?>
			</div>
		</div>
	</div>
