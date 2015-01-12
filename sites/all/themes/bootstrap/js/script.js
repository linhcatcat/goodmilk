$(document).ready(function() {
	/*
  $("a[href!='http']")
   .each(function()
   {
   	  //alert(this.href);
      var link = this.href;
      this.href = this.href.replace(/^http:\/\/\.themeiq\.com/,
         link);
      //alert(link);
   });
   */
/*
   $("a[href!='http']").each(function() {
	var me = $(this).attr('href');
  	if(!me.match('^http')) {
  		alert("http://themeiq.com/"+me);
    	$(this).attr('href','http://themeiq.com/' + me);
  	}
*/
  	/*
  	if(!this.href.match('^http')) {
  		alert(this.href);
    	this.href = "http://themeiq.com/" + this.href
  	}

   })*/
  $('.carousel').carousel();
});

