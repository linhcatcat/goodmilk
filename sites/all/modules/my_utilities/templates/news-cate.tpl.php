<?php
	global $base_url, $user;
	$taxo = taxonomy_get_tree(1);
?>
<div class="row-fluid">
	<div class="span12">
		<ul class="home-tab nav nav-tabs" id="myTab">
			<?php foreach ($taxo as $key => $item) { ?>
			<li class="<?php print $item->tid==$tid?'active':''; ?>"><a href="<?php print $base_url .'/news/'. $item->tid .'/'. unicode_str_replace($item->name) ; ?>"><?php print $item->name; ?></a></li>
			<?php } ?>
		</ul>
	</div>
</div>
<div class="row-fluid">
	<div class="span3 thumb">
		<a href="#"><img src="<?php echo $base_url .'/'. drupal_get_path('theme', 'Bootstrap').'/images/product-thumb.jpg'; ?>"/></a>
	</div>
	<div class="span9 text">
		<p class="title"><a href="#">Những sai lầm của mẹ Việt về dinh dưỡng cho trẻ</a></p>
		<p class="date">Update: 20/05/2014 - 14:23</p>
		<div class="summary">Theo bác sĩ Nguyễn Thị Hoa (Nguyên trưởng khoa Dinh dưỡng Bệnh viện Nhi đồng 1, TP HCM), sai lầm thường gặp ở các bà mẹ là quan niệm sai lệch về cân nặng. Với các mẹ, trẻ mũm mĩm đồng nghĩa với khỏe mạnh.</div>
	</div>
	<div class="clearfix"></div>
</div>
