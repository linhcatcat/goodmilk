<?php
	global $base_url;
	$path = $base_url .'/'. drupal_get_path('module', 'vsk_utilities') .'/';
?>
<div class="form-block">
	<a href="<?php print $base_url.'/dang-ky-nhan-catalogue'; ?>"><img src="<?php print $path.'images/reg_catalogue.gif'; ?>"/></a>
	<a href="<?php print $base_url.'/dang-ky-lai-xe-thu'; ?>"><img src="<?php print $path.'images/reg_drive.gif'; ?>"/></a>
	<a href="<?php print $base_url.'/dang-ky-mua-xe'; ?>"><img src="<?php print $path.'images/reg_sell.gif'; ?>"/></a>
	<a href="<?php print $base_url.'/dang-ky-bao-duong'; ?>"><img src="<?php print $path.'images/reg_book.gif'; ?>"/></a>
	<a href="<?php print $base_url.'/contact'; ?>"><img src="<?php print $path.'images/reg_contact.gif'; ?>"/></a>
</div>