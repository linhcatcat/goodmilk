<?php
	global $base_url;
?>
<div class="home-page-menu content-home first">
	<h2 class="content-title">Sản phẩm</h2>
	<div class="content-content">
		<?php $pro1 = product_home(14); ?>
		<div class="item first">
			<div class="item-title"><?php print $pro1->term_name; ?></div>
			<div class="item-content">
				<div class="content-left"><a href=""><img src="<?php print $base_url .'/'. $pro1->path; ?>"/></a></div>
				<div class="content-right"><?php print $pro1->description; ?></div>
				<div class="clear"></div>
			</div>
		</div>
		<?php $pro2 = product_home(18); ?>
		<div class="item">
			<div class="item-title"><?php print $pro2->term_name; ?></div>
			<div class="item-content">
				<div class="content-left"><a href=""><img src="<?php print $base_url .'/'. $pro2->path; ?>"/></a></div>
				<div class="content-right"><?php print $pro2->description; ?></div>
				<div class="clear"></div>
			</div>
		</div>
		<?php 
			$taxo = taxonomy_get_term(15);
			$pro3 = product_home(16); 
			$pro4 = product_home(17); 
		?>
		<div class="item parent">
			<div class="item-title"><?php print $taxo->name; ?></div>
			<div class="item-content">
				<div class="content-child">
					<div class="child-left"><a href=""><img src="<?php print $base_url .'/'. $pro3->path; ?>"/></a></div>
					<div class="child-right">
						<div class="child-title"><?php print $pro3->term_name; ?></div>
						<div class="child-content"><?php print $pro3->description; ?></div>						
					</div>
					<div class="clear"></div>
				</div>
				<div class="content-child">
					<div class="child-left"><a href=""><img src="<?php print $base_url .'/'. $pro4->path; ?>"/></a></div>
					<div class="child-right">
						<div class="child-title"><?php print $pro4->term_name; ?></div>
						<div class="child-content"><?php print $pro4->description; ?></div>						
					</div>
					<div class="clear"></div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		
		<div class="clear"></div>
	</div>
</div>