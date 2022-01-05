<!DOCTYPE html>
<html>
<header>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styte.css">
    <title>Đăng kí</title>
    
</header>

<body>
<?php
    include'connect.php';

if(isset($_POST["submit"])){
    if($_POST["taikhoan"] != '' && $_POST["ten"] != '' && $_POST["email"] != '' && $_POST["diachi"] != '' && $_POST["sdt"] != '' && $_POST["matkhau"] != ''){
		$taikhoan =$_POST["taikhoan"];
		$ten =$_POST["ten"];
        $email =$_POST["email"];
        $diachi =$_POST["diachi"];
        $sdt =$_POST["sdt"];
		$matkhau =$_POST["matkhau"];
        $kiemtramatkhau = $_POST["kiemtramatkhau"];
        $sql="SELECT * from user where taikhoan ='$taikhoan' ";
        $old = mysqli_query($conn,$sql);
        if(mysqli_num_rows($old) > 0)
        {
            $ktramk1 = "Tên đăng nhập đã tồn tại";
            echo "<script type='text/javascript'>alert('$ktramk1');</script>";
        }
        else
        {
            if($matkhau != $kiemtramatkhau)
            {
                $ktramk2 = "Mật khẩu nhập lại bị sai";
                echo "<script type='text/javascript'>alert('$ktramk2');</script>";
            }
            else
                {
                    $sql = "insert into user(taikhoan, ten, email, diachi, sdt, matkhau) values ('$taikhoan','$ten','$email','$diachi','$sdt','$matkhau')";	
                    if(mysqli_query($conn,$sql)){
                        $message = "Đăng kí thành công";
                        echo "<script type='text/javascript'>alert('$message');</script>";
                    }else{
                        $result = mysqli_query($conn, $sql) or trigger_error("Query Failed! SQL: $sql - Error: ".mysqli_error($conn), E_USER_ERROR);
                    }
                }
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
				<li><a href="signin.php"><img
							src="https://img.icons8.com/ios-glyphs/25/000000/user-male-circle.png" /></a></li>
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
        <form class="form-signup" method = "POST" action="./signup.php" >
            <h1>Tạo tài khoản</h1>
            <div class="form-text" style="margin-bottom: 20px;">
                <input type="text" placeholder="Tên đăng nhâp" name="taikhoan" pattern="[a-zA-Z0-9]{3,15}" required
                title="Biệt danh phải được nhập trong khoảng từ 3 đến 15 ký tự">
            </div>
            <div class="form-text" style="margin-bottom: 20px;">
                <input type="text" placeholder="Tên người dùng" name="ten" pattern="[a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂẾưăạảấầẩẫậắằẳẵặẹẻẽềềểếỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s\W|_]{1,}" required
                title="Tên người dùng không bao gồm số">
            </div>
            <div class="form-text" style="margin-bottom: 20px;">
                <input type="email" placeholder="Email" name="email" required>
            </div>
            <div class="form-text" style="margin-bottom: 20px;">
                <input type="text" placeholder="Địa chỉ" name="diachi" required>
            </div>
            <div class="form-text" style="margin-bottom: 20px;">
                <input type="text" placeholder="Số điện thoại" name="sdt" pattern="[0-9]{10,12}" 
                title="Số điện thoại phải được nhập số trong khoảng từ 8 đến 12 ký tự số"
                required>
            </div>
            <div class="form-text" style="margin-bottom: 20px;">
                <input type="password" placeholder="Mật khẩu" name="matkhau" required>
            </div>
            <div class="form-text" style="margin-bottom: 20px;">
                <input type="password" placeholder="Nhập lại mật khẩu" name="kiemtramatkhau" required>
            </div>
            <button name="submit" type="submit">Đăng kí</button>
        </form>
    </div>
       
    <div class="footer2">
        <b>Made by: 6. Phạm Phúc Long - 23/10/2000</b>
    </div>
</body>

</html>