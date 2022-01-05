<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <header>
        <title>Liên hệ</title>
        <link rel="stylesheet" href="styte.css">
        <style>
            .contact{
                border: 1px solid #ccc;
                width: 300px;
                height: 500px;
                padding: 20px 30px;
            }
            .contact h1{
                margin-bottom: 40px;
            }
            .contact button{
                height: 35px;
                width: 100%;
                margin-bottom: 30px;
                border: none;
                border-radius: 5px;
            }
            .form-text2{
                margin-bottom: 10px;
                position: relative;
            }
            .form-text2 input{                
                padding: 0px 12px;
	            width: 90%;
	            height: 35px;
	            border: none;
	            border: 1px solid #ccc;
	            cursor: pointer;
	            outline: none;
            }
            .form-text2 label{
                position: absolute;
                left: 12px;
                bottom: 12px;
            }
    
        </style>
    </header>
    <body>
<?php
include'connect.php';
if(isset($_POST["submit"])){
    if( $_POST["ten"] != '' && $_POST["email"] != '' &&  $_POST["sdt"] != '' && $_POST["noidung"] != ''){
		$ten =$_POST["ten"];
        $email =$_POST["email"];
        $sdt =$_POST["sdt"];
        $noidung = $_POST["noidung"];
        $sql = "insert into contact( ten, email, sdt, noidung) values ('$ten','$email','$sdt','$noidung')";	
        if(mysqli_query($conn,$sql)){
            $message = "Thêm thành công";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }else{
            $result = mysqli_query($conn, $sql) or trigger_error("Query Failed! SQL: $sql - Error: ".mysqli_error($conn), E_USER_ERROR);
        }
    }
    else{
        $message2 = "Vui lòng nhập đủ thông tin";
        echo "<script type='text/javascript'>alert('$message2');</script>";
    }
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
        <div class="container2">
            <form class="contact" method = "POST" action="./contact.php">
                <h1>Liên hệ</h1>
                <div class="form-text2">
                    <input type="text" placeholder=" Họ tên" name="ten" pattern="[a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂẾưăạảấầẩẫậắằẳẵặẹẻẽềềểếỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s\W|_]{1,}" required
                title="Tên người dùng không bao gồm số">
                </div>
                <div class="form-text2">
                    <input type="email" placeholder=" Email" name="email">
                </div>
                <div class="form-text2">
                    <input type="text" placeholder=" Số điện thoại" name = "sdt" pattern="[0-9]{10,12}" 
                title="Số điện thoại phải được nhập số trong khoảng từ 8 đến 12 ký tự số"
                required>
                </div>
                <label style="margin-right: 230px;">Nội dung</label>
                <div>
                    <textarea name ="noidung" cols="50" rows="7" style=" width: 300px; margin-top: 10px;">
                    </textarea>
                </div>
                <div class="product-contect-button">
                    <button name="submit" type="submit">
                        <p>Gửi phản hồi</p>
                    </button>                    
                </div>
            </form>
        </div>
		
	<div class="footer2">
        <b>Made by: 6. Phạm Phúc Long - 23/10/2000</b>
    </div>
    </body>
</html>