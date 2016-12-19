<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<meta name = "viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<!-- data-main主程序入口 -->
		<script data-main = "app.js" type="text/javascript" src = "js/require.js"></script>
		<style type="text/css">
				/* 重置样式 */
				*{
					margin: 0;
					padding: 0;
				}

				body{
					font: normal 0.21875rem "微软雅黑";  
					box-sizing: border-box;
					background: #efefef;
					overflow-x: hidden;
				}

				ul,ol{
					list-style: none;
				}

				a{
					text-decoration: none;
				}
			/* 脚部样式 */
			footer{
				width: 100%;
				height: 1.546875rem;
				background-color: #f6f6f6;
				position: fixed;
				bottom: 0;
				left: 0;
				display: flex;
				justify-content: space-around;
				align-items: center;
			}

			footer>a>img{
				width: 0.59375rem;
				height: 0.6875rem;
			}

			footer>a{
				text-align: center;
			}

			footer>a>p{
				font-size: 0.34375rem;
				color: #838282;
			}
			/*market部分*/
			.market{
				background: #fff;
				overflow: scroll; 
				overflow-y: hidden; 
			}

		</style>
	</head>
	<body>
		<div class = "main">
			<div class = "home"></div>
			<div class = "market"></div>
			<div class = "shopCar"></div>
			<div class = "mine"></div>
		</div>
		
		 <footer>
          <a href="#home">
            <img src="images/1.png" alt="">
            <p>首页</p>
          </a>
          <a href="#market">
            <img src="images/2.png" alt="">
            <p>闪送超市</p>
          </a>
          <a href="#shopCar">
            <img src="images/3.png" alt="">
            <p>购物车</p>
          </a>
          <a href="#mine">
            <img src="images/4.png" alt="">
            <p>我的</p>
          </a>
      	</footer>
	</body>
	<script type="text/javascript">
		(function(window){
		    var winW=document.documentElement.clientWidth||document.body.clientWidth;
		    document.documentElement.style.fontSize=winW/10+"px";
		    window.onresize=function(){
		        var winW=document.documentElement.clientWidth||document.body.clientWidth;
		        document.documentElement.style.fontSize=winW/10+"px";
		    }
		})(window);
	</script>
</html>