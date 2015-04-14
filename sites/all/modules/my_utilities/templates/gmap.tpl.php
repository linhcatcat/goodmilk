<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=true&amp;key=ABQIAAAAnfs7bKE82qgb3Zc2YyS-oBT2yXp_ZAY8_ufC3CFXhHIE1NvwkxSySz_REpPq-4WZA27OwgbtyR3VcA" 
	type="text/javascript"></script>

<script type="text/javascript">
var map = null;
function loadGmap(loc) {
	if (GBrowserIsCompatible()) {
		var point;
		var map=new GMap2(document.getElementById(loc));

		map.addControl(new GOverviewMapControl());
		map.enableDoubleClickZoom();
		map.enableScrollWheelZoom();
		map.addControl(new GMapTypeControl());
		map.addControl(new GSmallMapControl());
		var address='<font size="2" face="Arial">';
		address = address + '<?php print t('Số 413/7/6 Lê Văn Quơi,'); ?> <br/>';
		address = address + '<?php print t('KP.5 P. Bịnh Trị Đông A,'); ?> <br/>';
		address = address + '<?php print t('Q. Bình Tân, TP. HCM'); ?> ';
		point = new GLatLng(10.7762472,106.6057571);
		var marker = new GMarker(point);
		map.setCenter(point,15);
		map.addOverlay(marker);
		//map.setMapType(G_SATELLITE_3D_MAP);
		//map.setMapType(G_HYBRID_MAP);
		//GEvent.addListener(marker, "click", function() {
		//marker.openInfoWindowTabsHtml([new GInfoWindowTab("Address",address)],{maxUrl:"http://abhishek.sur.googlepages.com"});
		//});
	}
}

</script>
<body onunload="GUnload()" onload="loadGmap('map_canvas');">
    <div id="map_canvas" style="height:182px"></div>
</body>