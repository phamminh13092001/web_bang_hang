<ul>
	<li>
		<a href="../manufacturers">
			Quản Lý Nhà Sản Xuất
		</a>
	</li>
	 <li>
		<a href="../product">
			Quản Lý Sản Phẩm
		</a>
	</li>
	<li>
		<a href="../giaodien">
			Trang chủ
		</a>
	</li>
</ul>
		<?php
		if(isset($_GET['loi'])){
		?>
		<span style='color:red'>
			<?php echo $_GET['loi']?>
     	</span>
    	<?php } ?>
		<?php
		if(isset($_GET['success'])){
		?>
		<span style='color:gray'>
		<?php echo $_GET['success']?>
     	</span>
    	<?php
		}
		?>

