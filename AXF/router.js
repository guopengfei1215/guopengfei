define(["backbone"], function(Backbone){
	var Router = Backbone.Router.extend({
		routes:{
			home: "home",
			market: "market",
			shopCar: "shopCar",
			mine: "mine"
		},
		home: function(){
			require(["modules/home/home.js","modules/home/swiper.min.js"],function(home){
				home.init();
			});
		},
		market: function(){
			require(["modules/market/market.js","js/baiduTemplate.js"],function(market){
				market.init();
				/*左侧列表*/
				$.ajax({
					type:"get",
					url:"data/market.json",
					async:true,
					success:function(data){
						$("#product_nav").load("templete/tempMarket.html",function(){
							var market = baidu.template("market", data);
							$("#product_nav").html(market);
						})
					}
				})	

				/*右侧商品*/
				$.ajax({
					type:"get",
					url:"data/market.json",
					async:true,
					success:function(data){
						$("#product_right").load("templete/tempMarket2.html",function(){
							var market2 = baidu.template("market2", data);
							$("#product_right").html(market2);
						})
					}
				})
			});
		},
		shopCar: function(){
			require(["modules/shopCar/shopCar.js"],function(shopCar){
				shopCar.init();
			});
		},
		mine: function(){
			require(["modules/mine/mine.js"],function(mine){
				mine.init();
			});
		},
	});
	return new Router();
});	