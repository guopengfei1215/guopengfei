
define(["text!./home.html","$css!./home.css","$css!./swiper.min.css"], function(homePage){
	return{
		init:function(){
			$(".home").html(homePage).show().siblings("div").hide();
			// 轮播图
			var mySwiper = new Swiper('.swiper-container', {
				autoplay: 2000,//可选选项，自动滑动(时间:毫秒)
				loop : true,//循环
				pagination : '.swiper-pagination',//分页器
				autoplayDisableOnInteraction: false
			   })
		}
	}
});