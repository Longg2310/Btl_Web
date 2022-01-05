<!DOCTYPE html>
<html>

<head>
	<title>Thời trang nam</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="styte.css">
	
	<style>
            .container4{
                width: 1200px;
                margin: 0 auto;
            }
			.container4 > h1{
				text-align: center;
			}
            .product-items{
                border: 1px solid #ccc;
                padding: 30px;
            }
            .product-item{
                float: left;
                width: 23%;
                margin: 1%;
                padding: 10px;
                box-sizing: border-box;
                line-height: 26px;
            }
            .product-item label{
                font-weight: bold;
            }
            .product-item p{
                margin: 0;
                line-height: 26px;
                max-height: 52px;
                overflow: hidden;
            }
            .product-price{
                color: red;
                font-weight: bold;
            }
            .product-img{
                padding: 5px;
                border: 1px solid #ccc;
                margin-bottom: 5px;
            }
            .product-item img{
                max-width: 100%;
            }
            .product-item ul{
                margin: 0;
                padding: 0;
                border-right: 1px solid #ccc;
            }
            .product-item ul li{
                float: left;
                width: 33.3333%;
                list-style: none;
                text-align: center;
                border: 1px solid #ccc;
                border-right: 0;
                box-sizing: border-box;
            }
            .clear-both{
                clear: both;
            }
            a{
                text-decoration: none;
            }
            .buy-button{
                text-align: right;
                margin-top: 10px;
            }
            .buy-button a{
                background: #444;
                padding: 5px;
                color: #fff;
            }
            #pagination{
                text-align: right;
                margin-top: 15px;
            }
            .page-item{
                border: 1px solid #ccc;
                padding: 5px 9px;
                color: #000;
            }
            .current-page{
                background: #000;
                color: #FFF;
            }
    </style>
</head>

<body>
	<?php 
    session_start();
    ?>
	<div class="topbar">
		<p>Hotline Mua Hàng: 0973 285 886 | Hotline CSKH: 1900 886 803 - Ext 1 | Email CSKH:web@360boutique.vn</p>
	</div>
	<header>
		<div class="header">
			<div class="logo">
				<a href="index.php"><img class="img-logo" src="img/logo.png"></a>
			</div>
			<div class="search">
				<input type="text" placeholder="SEARCH">
				<button type="submit"><img src="https://img.icons8.com/ios-filled/25/000000/search--v4.png" /></button>
			</div>
			<div class="others">
				<li><a href="signin.php">
						<?php 
                if(empty($_SESSION['current_user'])){
                    ?>
						<img src="https://img.icons8.com/ios-glyphs/25/000000/user-male-circle.png" />
						<?php
                }
                else{
					$currentUser = $_SESSION['current_user'];
					?>
						<a href="logout.php">Xin chào
							<?= $currentUser['ten'] ?> <img
								src="https://img.icons8.com/ios-glyphs/25/000000/user-male-circle.png" />
						</a>
						<?php
				}
                ?>
					</a></li>
				<li><a href=""><img src="https://img.icons8.com/ios-filled/25/000000/search--v4.png" /></a></li>
				<li><a href="cart.php">
						<img src="https://img.icons8.com/material-outlined/25/000000/shopping-cart--v2.png" /></a></li>
			</div>
		</div>
		<hr>
		<div class="menu">
			<li class="menu-item"><a href="">Thu đông mới</a></li>
			<li class="menu-item"><a href="">Giới thiệu</a></li>
			<li class="menu-item"><a href="product.php">Sản phẩm</a>
				<div class="menu-con">
					<div class="menu-con-item">
						<ul class="menu-con-list">
							<h4>Áo Nam</h4>
							<li><a class="menu-con-link" href="">Áo Polo</a></li>
							<li><a class="menu-con-link" href="">Áo Phông</a></li>
							<li><a class="menu-con-link" href="">Áo Sơ Mi</a></li>
							<li><a class="menu-con-link" href="">Áo Len</a></li>
							<li><a class="menu-con-link" href="">Áo Nỉ</a></li>
							<li><a class="menu-con-link" href="">Áo Khác</a></li>
						</ul>
					</div>
					<div class="menu-con-item">
						<ul class="menu-con-list">
							<h4>Quần nam</h4>
							<li><a class="menu-con-link" href="">Quần Âu</a></li>
							<li><a class="menu-con-link" href="">Quần Jeans</a></li>
							<li><a class="menu-con-link" href="">Quần Jogger</a></li>
							<li><a class="menu-con-link" href="">Quần Kaki</a></li>
							<li><a class="menu-con-link" href="">Quần Short</a></li>
						</ul>
					</div>
					<div class="menu-con-item">
						<ul class="menu-con-list">
							<h4>Phụ kiện nam</h4>
							<li><a class="menu-con-link" href="">Balo, Túi Deo Chéo</a></li>
							<li><a class="menu-con-link" href="">Kính</a></li>
							<li><a class="menu-con-link" href="">Mũ</a></li>
							<li><a class="menu-con-link" href="">Ví Da</a></li>
						</ul>
					</div>
					<div class="menu-con-item">
						<ul class="menu-con-list">
							<h4>Dày dép nam</h4>
							<li><a class="menu-con-link" href="">Giày</a></li>
							<li><a class="menu-con-link" href="">Dép</a></li>
						</ul>
					</div>
				</div>
			</li>
			<li class="menu-item"><a href="">Bộ sưu tập</a>
				<div class="menu-con">
					<div class="menu-con-item">
						<ul class="menu-con-list">
							<h4>Bộ sưu tập xuân</h4>
						</ul>
					</div>
					<div class="menu-con-item">
						<ul class="menu-con-list">
							<h4>Bộ sưu tập hạ</h4>
						</ul>
					</div>
					<div class="menu-con-item">
						<ul class="menu-con-list">
							<h4>Bộ sưu tập thu</h4>
						</ul>
					</div>
					<div class="menu-con-item">
						<ul class="menu-con-list">
							<h4>Bộ sưu tập đông</h4>
						</ul>
					</div>
				</div>
			</li>
			<li class="menu-item"><a href="">Khuyến mãi</a>
				<div class="menu-con">
					<div class="menu-con-item">
						<ul class="menu-con-list">
							<h4>5%</h4>
						</ul>
					</div>
					<div class="menu-con-item">
						<ul class="menu-con-list">
							<h4>10%</h4>
						</ul>
					</div>
					<div class="menu-con-item">
						<ul class="menu-con-list">
							<h4>20%</h4>
						</ul>
					</div>
					<div class="menu-con-item">
						<ul class="menu-con-list">
							<h4>30%</h4>
						</ul>
					</div>
					<div class="menu-con-item">
						<ul class="menu-con-list">
							<h4>50%</h4>
						</ul>
					</div>
					<div class="menu-con-item">
						<ul class="menu-con-list">
							<h4>70%</h4>
						</ul>
					</div>
				</div>
			</li>
			<li class="menu-item"><a href="contact.php">Liên hệ</a></li>
			<li class="menu-item"><a href="">Tuyển dụng</a></li>
			<li class="menu-item"><a href="">Hệ thống cửa hàng</a></li>
		</div>
	</header>
	<div class="container">
		<div class="slide">
			<img src="./img/img1.jpg" class="slide-item" number="0" />
			<img src="./img/img2.jpg" class="slide-item" number="1" style="display: none;" />
			<img src="./img/img3.jpg" class="slide-item" number="2" style="display: none;" />
			<img src="./img/img4.jpg" class="slide-item" number="3" style="display: none;" />

			<a href="#" class="next"><b> > </b></a>
			<a href="#" class="prev"><b>
					< </b></a>
		</div>
		<script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
		<script>
			$(() => {
				$('.next').click(function () {
					changeImage('next');
				})
				$('.prev').click(function () {
					changeImage('prev');
				})
			})

			function changeImage(type) {
				let imSelectVisible = $('img.slide-item:visible');
				let imgVisible = parseInt(imSelectVisible.attr('number'));
				console.log(imgVisible)

				let eqNumber = type === 'next' ? imgVisible + 1 : imgVisible - 1;

				if (imgVisible === 0) {
					eqNumber = $('.slide-item').length - 1;
				}

				if (eqNumber >= $('.slide-item').length) {
					eqNumber = 0
				}

				$('img.slide-item').eq(eqNumber).fadeIn();

				imSelectVisible.fadeOut();
			}

			setInterval(function () {
				$('.prev').click();
			}, 5000);
		</script>
	</div>
	<?php
        include './connect.php';
        $item_per_page = !empty($_GET['per_page'])?$_GET['per_page']:6;
        $current_page = !empty($_GET['page'])?$_GET['page']:1; //Trang hiện tại
        $offset = ($current_page - 1) * $item_per_page;
        $products = mysqli_query($conn, "SELECT * FROM `sanpham` ORDER BY `masp` ASC  LIMIT " . $item_per_page . " OFFSET " . $offset);
        $totalRecords = mysqli_query($conn, "SELECT * FROM `sanpham`");
        $totalRecords = $totalRecords->num_rows;
        $totalPages = ceil($totalRecords / $item_per_page);
        ?>

	<div class="container4">
		<h1>Sản phẩm quần áo nam thời trang nam mới nhất</h1>
		<div class="product-items">
			<?php
                while ($row = mysqli_fetch_array($products)) {
                    ?>
			<div class="product-item">
				<div class="product-img">
					<a href="detail.php?id=<?= $row['masp'] ?>"><img src="<?= $row['img'] ?>"
							title="<?= $row['tensp'] ?>" /></a>
				</div>
				<strong><a href="detail.php?id=<?= $row['masp'] ?>">
						<?= $row['tensp'] ?>
					</a></strong><br />
				<label>Giá: </label><span class="product-price">
					<?= number_format($row['gia'], 0, ",", ".") ?> đ
				</span><br />
				<p>
					<?= $row['thongtin'] ?>
				</p>
			</div>
			<?php } ?>
			<div class="clear-both"></div>
			<?php
                include './pagination.php';
                ?>
			<div class="clear-both"></div>
		</div>
	</div>

	<div class="footer3">
		<b>Made by: 6. Phạm Phúc Long - 23/10/2000</b>
	</div>
</body>

</html>