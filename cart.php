<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <title>Giỏ hàng</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styte.css">
</head>

<body>
<?php
        include './connect.php';
        if (isset($_GET['action'])) {

            function update_cart($add = false) {
                foreach ($_POST['soluong'] as $id => $soluong) {
                    if ($soluong == 0) {
                        unset($_SESSION["cart"][$id]);
                    } else {
                        if ($add) {
                            $_SESSION["cart"][$id] += $soluong;
                        } else {
                            $_SESSION["cart"][$id] = $soluong;
                        }
                    }
                }
            }

            switch ($_GET['action']) {
                case "add":
                    update_cart(true);
                    header('Location: ./cart.php');
                    break;
                case "delete":
                    if (isset($_GET['id'])) {
                        unset($_SESSION["cart"][$_GET['id']]);
                    }
                    header('Location: ./cart.php');
                    break;
                case "submit":
                    if (isset($_POST['update_click'])) { //Cập nhật số lượng sản phẩm
                        update_cart();
                        header('Location: ./cart.php');
                    } elseif ($_POST['order_click']) { //Đặt hàng sản phẩm
                        if ($error == false && !empty($_POST['soluong'])) { //Xử lý lưu giỏ hàng vào db
                            $sanpham = mysqli_query($con, "SELECT * FROM `sanpham` WHERE `masp` IN (" . implode(",", array_keys($_POST['soluong'])) . ")");
                            $total = 0;
                            $ordersanpham = array();
                            while ($row = mysqli_fetch_array($sanpham)) {
                                $ordersanpham[] = $row;
                                $total += $row['gia'] * $_POST['soluong'][$row['masp']];
                            }
                            $insertOrder = mysqli_query($conn, "INSERT INTO `order_detail` (`id`, `masp`, `soluong`, `gia`) VALUES " . $insertString . ";");
                            $success = "Đặt hàng thành công";
                            unset($_SESSION['cart']);
                        }
                    }
                    break;
            }
        }
        if (!empty($_SESSION["cart"])) {
            $sanpham = mysqli_query($conn, "SELECT * FROM `sanpham` WHERE `masp` IN (" . implode(",", array_keys($_SESSION["cart"])) . ")");
        }
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
						<a href="logout.php">Xin chào <?= $currentUser['ten'] ?><img src="https://img.icons8.com/ios-glyphs/25/000000/user-male-circle.png" /></a>
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

    <div class="cart">
        <div class="container4">
            <div class="cart-content">
                <div class="cart-content-left">
                <form id="cart-form" action="cart.php?action=submit" method="POST">
                    <table>
                        <tr>
                            <th>Sản phẩm</th>
                            <th>Tên sản phẩm</th>
                            <th>Số lượng</th>
                            <th>Giá</th>
                            <th>Xoá</th>
                        </tr>
                        <?php
                        if (!empty($sanpham)) {
                            $total = 0;
                            $num = 1;
                            while ($row = mysqli_fetch_array($sanpham)) {
                            ?>
                            <tr>
                                <td><img src="<?= $row['img'] ?>" alt=""></td>
                                <td><?= $row['tensp'] ?></td>
                                <td><input type="text" value="<?= $_SESSION["cart"][$row['masp']] ?>" name="soluong[<?= $row['masp'] ?>]" /></td>
                                <td>
                                    <p><b><?= $row['gia'] ?><sup>₫</sup></b></p>
                                </td>
                                <td><a href="cart.php?action=delete&id=<?= $row['masp'] ?>"><span>x</span></a></td>
                            </tr>
                            <?php
                                $total += $row['gia'] * $_SESSION["cart"][$row['masp']];
                                $num++;
                            }                            
                        }
                        ?>
                    </table>
                    <div class="product-contect-button">
                        <button type="submit" name="order_click">
                            <p>Thanh toán</p>
                        </button>                    
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>

    <div class="footer2">
        <b>Made by: 6. Phạm Phúc Long - 23/10/2000</b>
    </div>
</body>

</html>