(function($){
	$(document).ready(function(){
		$(".field-upload, .selectable").find("a").map(function(){
			if (this.href.match(/\.(?:bmp|gif|jpe?g|png)$/i)) return this;
		}).attr("rel", "gallery").fancybox();
	});
})(jQuery);