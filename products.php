	<DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web bán thức ăn </title>
    <link rel="stylesheet" href="style.css">
    <style type="text/css">
    	<style type="text/css">
		.tung_san_pham{
			width: 33%;
			border: 1px solid black;
			height: 300px;
			float: left;

/*    background:#362f2f;*/
}
		}
    </style>
</head>
<body>
    <div id="wrapper">
        <div id="header">
            <a href="" class="logo">
                <img src="//bizweb.dktcdn.net/100/234/853/themes/563300/assets/logo.png?1656407040804" >
            </a>
            <div id="menu">
                <div class="item">
                    <a href="http://localhost/webbanhang/giaodien/">Trang Chủ</a>
                </div>
                <div class="item">
                    <a href="#">Sản Phẩm</a>
                </div>
                <div class="item">
                    <a href="">Đơn Hàng</a>
                </div>
                <div class="item">
                    <a href="">Giới Thiệu</a>
                </div>
                <div class="item">
                    <a href="">Tin Tức</a>
                </div>
                <div class="item">
                    <a href="">Liên Hệ</a>
                </div>
            </div>
            <div id="actions">
                <div class="item">
                    <img src="https://raw.githubusercontent.com/hqteamobi/web_shop_ban_hang/main/assets/user.png" alt="">
                </div>
                <div class="item">
                    <img src="https://raw.githubusercontent.com/hqteamobi/web_shop_ban_hang/main/assets/cart.png" alt="">
                </div>
            </div>
        </div>
        <div id="banner">
            <div class="box-left">
                <h2>
                    <span>THỨC ĂN</span>
                    <br>
                    <span>THƯỢNG HẠNG</span>
                </h2>
                <p>Chuyên cung cấp các món ăn đảm bảo dinh dưỡng
                    hợp vệ sinh đến người dùng,phục vụ người dùng 1 cái
                    hoàn hảo nhất</p>
                <button>Mua ngay</button>
            </div>
        </div>
         <div id="wp-products">
         	<h2>SẢN PHẨM CỦA CHÚNG TÔI</h2>
         	<?php
	require 'connect.php';
	$sql = "select * from products";
	$result = mysqli_query($connect,$sql);
	?>
	<?php foreach ($result as $each): ?>
		<div class="tung_san_pham">
			<h1>
				<?php echo $each['name'] ?>
			</h1>
			<img src="product/photos/<?php echo $each['photo'] ?> " height='100'>
			<p><?php echo $each['price'] ?> $ </p>
			<a href="product.php?id=<?php echo $each['id'] ?>">
				Xem chi tiết
			</a>
			<?php if(!empty($_SESSION['id'])){?>
				<br>
             <a href="add_to_cart.php?id=<?php echo $each['id'] ?>">
             	Thêm Vào Giỏ Hàng
             </a>

			<?php } ?>
		</div>
	<?php endforeach ?>
</div>
  <div id="footer">
            <div class="box">
                <div class="logo">
                    <img src="//bizweb.dktcdn.net/100/234/853/themes/563300/assets/logo.png?1656407040804">
                </div>
                <p>Cung cấp sản phẩm với chất lượng an toàn cho quý khách</p>
            </div>
            <div class="box">
                <h3>NỘI DUNG</h3>
                <ul class="quick-menu">
                    <div class="item">
                        <a href="">Trang chủ</a>
                    </div>
                    <div class="item">
                        <a href="">Sản phẩm</a>
                    </div>
                    <div class="item">
                        <a href="">Blog</a>
                    </div>
                    <div class="item">
                        <a href="">Liên hệ</a>
                    </div>
                </ul>
            </div>
            <div class="box">
                <h3>LIÊN HỆ</h3>
                <form action="">
                    <input type="text" placeholder="Địa chỉ email">
                    <button>Nhận tin</button>
                </form>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>

</html>