
define(["text!./shopCar.html", "$css!./shopCar.css"], function(shopCarPage){
	return {
		init: function(){
			$(".shopCar").html(shopCarPage).show().siblings("div").hide();
		}
	}
	
});