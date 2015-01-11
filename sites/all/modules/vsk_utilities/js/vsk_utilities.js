var heightMax = 200;
$( 'ul > li div.item' ).each(function(index, value){
	if($(this).height() > heightMax){
		heightMax = $(this).height();
	}
	console.log(heightMax);
});