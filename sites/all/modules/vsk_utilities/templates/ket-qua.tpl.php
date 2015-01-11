<?php
	$don_vi = $_GET['don_vi'];
	$gia_xe = $_GET['gia_xe'];
	$tien_tra_truoc = $_GET['tien_tra_truoc'];
	$lai_suat = $_GET['lai_suat'];
	$thoi_han = $_GET['thoi_han'];
	$tien_vay = $gia_xe - $tien_tra_truoc;
	$tien_goc = round($tien_vay/$thoi_han);
?>
<div class="in-trang">
<a href="javaScript:window.print()"><img title="In trang" alt="in trang" src="http://ototai.net/image/btn-print.gif"></a>
</div>
<div class="quay-lai">
<?php print l('Quay lại trang nhập liệu','mua-xe-o-to-tra-gop'); ?>
</div>
<div class="bang-1">
	<div class="bang-1-title">Bảng 1: Thông số bạn đã nhập</div>
	<table width="100%" align="center" class="hire">
		<thead>
			<tr>
			<th width="20%" align="center">Giá xe (<?php print $don_vi; ?>)</th>
			<th width="20%" align="center">Trả trước (<?php print $don_vi; ?>)</th>
			<th width="20%" align="center">Số vay (<?php print $don_vi; ?>)</th>
			<th width="20%" align="center">Lãi suất (%)</th>
			<th width="20%" align="center">Thời hạn (Tháng)</th>
			</tr>
		</thead>
		<tbody>		
		<tr>
			<td align="center"><?php print $gia_xe; ?></td>
			<td align="center"><?php print $tien_tra_truoc; ?></td>
			<td align="center"><?php print $tien_vay; ?></td>
			<td align="center"><?php print $lai_suat; ?></td>
			<td align="center"><?php print $thoi_han; ?></td>
		</tr>
		</tbody>
	</table>
</div>

<div class="bang-2">
	<div class="bang-2-title">Bảng 2: Số tiền lãi và tổng phải trả hàng tháng</div>
	<table width="100%" align="center" class="hire">
		<thead>
			<tr>
				<th width="10%" align="center">Kỳ</th>
				<th width="22%" align="center">Tiền gốc (<?php print $don_vi; ?>)</th>
				<th width="22%" align="center">Tiền lãi (<?php print $don_vi; ?>)</th>
				<th width="22%" align="center">Gốc + Lãi (<?php print $don_vi; ?>)</th>
				<th width="24%" align="center">Dư nợ (<?php print $don_vi; ?>)</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				$tong_tien_goc =0;
				$tong_tien_lai =0;
				$tong_goc_lai =0;
			?>
			<?php for( $i=1; $i<=$thoi_han;$i++){ ?>
			<tr>
				<td width="10%" align="center"><?php print $i; ?></td>
				<td width="22%" align="center">
				<?php 
					$tong_tien_goc = $tong_tien_goc + $tien_goc;
					print $tien_goc; 
				?>
				</td>
				<td width="22%" align="center">
				<?php 
					$tien_lai = round((($gia_xe - ($tien_tra_truoc*$i)) * $lai_suat)/100); 
					$tong_tien_lai = $tong_tien_lai + $tien_lai;
					print $tien_lai; 
				?>
				</td>
				<td width="22%" align="center">
				<?php 
					$goc_lai = round(($tien_vay/$thoi_han) + $tien_lai);
					$tong_goc_lai = $tong_goc_lai + $goc_lai;
					print $goc_lai; 
				?>
				</td>
				<td width="24%" align="center"><?php print round($gia_xe - $tien_tra_truoc - (($tien_vay/$thoi_han) * $i)); ?></td>
			</tr>
			<?php } ?>
		</tbody>
		<tfoot>
			<tr>
				<td width="10%" align="center">Σ</td>
				<td width="25%" align="center"><?php print $tong_tien_goc; ?></td>
				<td width="25%" align="center"><?php print $tong_tien_lai; ?></td>
				<td width="25%" align="center"><?php print $tong_goc_lai; ?></td>
				<td width="15%" align="center"></td>
			</tr>
		</tfoot>
	</table>
</div>
<div class="quay-lai">
<?php print l('Quay lại trang nhập liệu','mua-xe-o-to-tra-gop'); ?>
</div>