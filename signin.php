<!DOCTYPE html>
<html>
<header>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styte.css">
    <title>Đăng nhập</title>
</header>

<body>
<?php
    session_start();
    include'connect.php';
    if(isset($_POST["dangnhap"]))
    {
        $email=$_POST["email"];
        $matkhau=$_POST["matkhau"];
        $sql="SELECT * FROM user WHERE email='$email' AND matkhau='$matkhau'";
        $query = mysqli_query($conn,$sql);
        $num_rows = mysqli_num_rows($query);
        if($num_rows == 0){
            $message = "Tài khoản hoặc mật khẩu không chính xác";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }else{
            while($data = mysqli_fetch_array($query)){
            $_SESSION['current_user'] = $data;
            }
        }
    }
?>
<?php 
    if(empty($_SESSION['current_user'])){
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
                
                    <img src="https://img.icons8.com/ios-glyphs/25/000000/user-male-circle.png" />
                        
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
        <form class="form-login" autocomplete="off" method="POST" action="./signin.php" >
            <h1>Đăng nhập</h1>
            <div class="form-text">
                <input type="text" placeholder="Tài khoản" name="email">
            </div>
            <div class="form-text">
                <input type="password" placeholder="Mật khẩu" name="matkhau">
            </div>
            <button type="submit" name="dangnhap">Đăng nhập</button>
            <span>Bạn chưa có tài khoản ? Đăng kí <a href="signup.php">Tại đây </a> </span>
        </form>
        </div>

        <div class="footer2">
            <b>Made by: 6. Phạm Phúc Long - 23/10/2000</b>
        </div>
    <?php
}
else{
    $currentUser = $_SESSION['current_user'];
    header('Location: ./index.php');
}
?>
     
</body>

</html>