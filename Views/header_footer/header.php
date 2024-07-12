    <header class="header-one header-two">
        <div class="header-top-two">
            <div class="container text-center">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="middel-top">
                            <div class="left floatleft">
                            <p>
                                <i class="mdi mdi-clock"></i>
                                <b id="current-time"><?php echo date("Y-m-d H:i:s"); ?></b>
                                <b style='color:red; margin-left:20px;'>ANGEL Shop</b>
                            </p>
                            </div>
                        </div>
                        <div class="middel-top clearfix">
                            <ul class="clearfix right floatright">
                                <li>
                                    <a><i class="mdi mdi-account"></i></a>
                                    <ul>
                                        <?php  if(isset($_SESSION['login'])){ ?>
                                        <li><b>Chào <?=$_SESSION['login']['Ho']?> <?=$_SESSION['login']['Ten']?></b></li>
                                        <li><a href="?act=taikhoan&xuli=account">Tài khoản</a></li>
                                        <li><a href="?act=taikhoan&xuli=dangxuat">Đăng xuất</a></li>
                                        <?php
                                            if(isset($_SESSION['isLogin_Admin']) || isset($_SESSION['isLogin_Nhanvien'])){ ?>
                                            <li><a href="admin/?mod=login">Trang quản lý</a></li>
                                    <?php }}else{ ?>
                                        <li><b>Khách hàng</b></li>
                                        <li><a href="?act=taikhoan">Đăng nhập</a></li>
                                        <?php } ?>
                                    </ul>
                                </li>
                            </ul>
                            <div class="right floatright widthfull">
                                <form action="?act=shop" method="post">
                                    <button type="submit"><i class="mdi mdi-magnify"></i></button>
                                    <input type="text" style="color:black;" placeholder="Tìm kiếm..." name="keyword"/>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-2">
                    <div class="logo">
                        <a href="?act=home"><img src="public/img/footer/logoangel.png" alt="Sellshop"  style="width: 60px; height: auto;"  /></a>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="header-middel">
                        <div class="mainmenu">
                            <nav>
                                <ul>
                                    <li><a href="?act=home">Trang chủ</a></li>
                                    <li><a href="?act=shop">Cửa hàng</a>
                                        <ul class="magamenu">
                                            <li class="banner"></li>
                                            <?php    $i = 1; foreach ($data_chitietDM as $row) { ?>
                                                <li>
                                                    <a href="?act=shop&sp=<?=$i?>"><h5><?= $data_danhmuc[$i-1]['TenDM'] ?></h5></a>
                                                    <ul>
                                                        <?php foreach ($row as $value) { ?>
                                                        <li><a href="?act=shop&sp=<?=$value['MaDM']?>&loai=<?=$value['TenLSP']?>"><?=$value['TenLSP']?></a></li>
                                                        <?php }?>
                                                    </ul>
                                                </li>
                                            <?php $i++; } ?>
                                            <li class="banner"></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="?act=checkout">Thanh Toán</a>
                                    </li>
                                    <li><a href="?act=about">Giới thiệu</a></li>
                                    <li><a href="?act=contact">Liên hệ</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- mobile menu start -->
                        <div class="mobile-menu-area">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul>
                                        <li><a href="?act=home">Trang chủ</a>
                                        </li>
                                        <li><a href="?act=shop">Cửa hàng</a>
                                            <ul>
                                            <?php $i = 1; foreach ($data_chitietDM as $row) { ?>
                                                <li>
                                                    <a href="?act=shop&sp=<?=$i?>"><h5><?= $data_danhmuc[$i-1]['TenDM'] ?></h5></a>
                                                    <ul>
                                                        <?php foreach ($row as $value) { ?>
                                                        <li><a href="?act=shop&sp=<?=$value['MaDM']?>&loai=<?=$value['TenLSP']?>"><?=$value['TenLSP']?></a></li>
                                                        <?php }?>
                                                    </ul>
                                                </li>
                                            <?php $i++; } ?>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="?act=checkout">Thanh Toán</a>
                                        </li>
                                        <li><a href="?act=about">Giới thiệu</a></li>
                                        <li><a href="?act=contac">Liên hệ</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="cart-itmes">
                        <a class="cart-itme-a" href="?act=cart">
                            <?php 
                                $soluong = 0;
                                $thanhtien = 0;
                                if(isset($_SESSION['sanpham'])){
                                foreach ($_SESSION['sanpham'] as $value) {
                                    $soluong +=1;
                                    $thanhtien +=$value['ThanhTien'];
                                }}
                            ?>
                            <i class="mdi mdi-cart"></i>
                            <?=$soluong?> SP : <strong><?=number_format($thanhtien)?> VNĐ</strong>
                        </a>
                        <div class="cartdrop">
                            <?php if(isset($_SESSION['sanpham'])){
                                foreach ($_SESSION['sanpham'] as $value) { ?>
                            <div class="sin-itme clearfix">
                            <a href="?act=cart&xuli=deleteall&id=<?= $value['MaSP'] ?>"><i class="mdi mdi-close" title="Remove this product"></i></a>
                                <a class="cart-img" href="?act=cart"><img src="public/<?=$value['HinhAnh1']?>" alt="" /></a>
                                <div class="menu-cart-text">
                                    <a href="?act=detail&id=<?=$value['MaSP']?>">
                                        <h5><?=$value['TenSP']?></h5>
                                    </a>
                                    <b>Số lượng: <?=$value['SoLuong']?></b>
                                    <strong><?=number_format($value['ThanhTien'])?> VNĐ</strong>
                                </div>
                            </div>
                                <?php }} ?>
                            <div class="total">
                                <span style="color:#0b4da3">Tổng <strong>= <?=number_format($thanhtien)?> VNĐ</strong></span>
                            </div>
                            <a class="add-cart-btn out-menu " href="index.php?act=cart" style="color:white;background:#0b4da3;margin-top:20px">Đến giỏ hàng</a>
                            <a class="out-menu buy-btn" style="color:red;margin-top:20px" href="index.php?act=checkout">Thanh toán</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <script>
        function updateTime() {
            const now = new Date();
            const formattedTime = 
                String(now.getDate()).padStart(2, '0') + '-' +
                String(now.getMonth() + 1).padStart(2, '0') + '-' +
                now.getFullYear() + ' ' +
                String(now.getHours()).padStart(2, '0') + ':' +
                String(now.getMinutes()).padStart(2, '0') + ':' +
                String(now.getSeconds()).padStart(2, '0');
            document.getElementById('current-time').innerText = formattedTime;
        }

        // Update time every second
        setInterval(updateTime, 1000);

        // Initialize time immediately on page load
        updateTime();
    </script>
