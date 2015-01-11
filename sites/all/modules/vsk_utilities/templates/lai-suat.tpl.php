<?php
	global $base_url;
?>
<div class="wrap-lai-suat">
	<div class="huong-dan">
		<div class="huong-dan-title">Hướng dẫn</div>
		<div class="huong-dan-item"><?php print l('Tư vấn mua xe trả góp dành cho cá nhân','') ?></div>
		<div class="huong-dan-item"><?php print l('Tư vấn mua xe trả góp dành cho công ty','') ?></div>
		<div class="huong-dan-item"></div>
	</div>
	<div class="form-tinh-lai-suat">
		<div class="form-title">Bảng tính lãi Mua xe Ôtô trả góp</div>
		<?php print drupal_get_form('tinh_lai_suat'); ?>
		<div class="over-lay"></div>
	</div>
</div>
<script src="<?php print $base_url .'/'. drupal_get_path('module', 'vsk_utilities'); ?>/js/jquery.js" type="text/javascript"></script>
<script>
$(function() {
	function check_input(){
		var gia_xe = $.trim($('#edit-gia-xe').val());
		var tien_tra_truoc = $.trim($('#edit-tien-tra-truoc').val());
		var lai_suat = $.trim($('#edit-lai-suat').val());
		var thoi_han = $.trim($('#edit-thoi-han').val());
		if(gia_xe==''){
			alert('Vui lòng nhập giá xe!');
			$('#edit-gia-xe').focus();
			return false;
		} else {
			if( isNaN(gia_xe) ){
				alert('Vui lòng nhập số!');
				$('#edit-gia-xe').focus();
				return false;
			}
		}
		if(tien_tra_truoc==''){
			alert('Vui lòng nhập số tiền trả trước!');
			$('#edit-tien-tra-truoc').focus();
			return false;
		} else {
			if( isNaN(tien_tra_truoc) ){
				alert('Vui lòng nhập số!');
				$('#edit-tien-tra-truoc').focus();
				return false;
			}
		}
		if(lai_suat==''){
			alert('Vui lòng nhập lãi suất!');
			$('#edit-lai-suat').focus()
			return false;
		} else {
			if( isNaN(lai_suat) ){
				alert('Vui lòng nhập số!');
				$('#edit-lai-suat').focus()
				return false;
			}
		}
		if(thoi_han==''){
			alert('Vui lòng nhập thời hạn vay!');
			$('#edit-thoi-han').focus();
			return false;
		} else {
			if( isNaN(thoi_han) ){
				alert('Vui lòng nhập số!');
				$('#edit-thoi-han').focus();
				return false;
			}
		}
		return true;
	}
	function tinh_lai_suat(){
		var don_vi = $('#edit-don-vi-tinh').val();
		var gia_xe = $('#edit-gia-xe').val();
		var tien_tra_truoc = $('#edit-tien-tra-truoc').val();
		var lai_suat = $('#edit-lai-suat').val();
		var thoi_han = $('#edit-thoi-han').val();
		var action = '<?php print $base_url.'/ket-qua'; ?>';
		$('.over-lay').show();
		$.get(action, {
			'don_vi': don_vi,
			'gia_xe': gia_xe,
			'tien_tra_truoc': tien_tra_truoc,
			'lai_suat': lai_suat,
			'thoi_han':thoi_han
		}, function(data){
			$('.wrap-lai-suat').html(data);
		}).done(function() {
			$('.over-lay').hide();
		});
	}
	$('#tinh-lai-suat #edit-send').live("click",function(){
		if( check_input() ){
			tinh_lai_suat();
		}
		return false;
	});
});
</script>