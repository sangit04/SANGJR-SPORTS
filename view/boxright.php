<div class="mb">
    <div class="box_title">TÀI KHOẢN</div>
    <div class="box_content form_account">
    <?php
    if (isset($_SESSION['user'])) {
        extract($_SESSION['user']);
        ?>
        Xin chào: <br>
        "<?=$user ?>"
        
        <li class="form_li"><a href="index.php?act=quenmk">Quên mật khẩu</a></li>

        <li class="form_li"><a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a></li>
        <?php if ($role==1) { ?>
            <li class="form_li"><a href="admin/index.php">Đăng nhập ADMIN</a></li>
            <?php }?>
        

        <li class="form_li"><a href="index.php?act=thoat">Thoát</a></li>
        
        <?php
        } else {

            ?>
            <form action="index.php?act=dangnhap" method="POST">
            <h4>Tên đăng nhập</h4><br>
            <input type="text" name="user" >
            <h4>Mật khẩu</h4><br>
            <input type="password" name="pass" ><br>
            <input type="checkbox" name="" id="">Ghi nhớ tài khoản?
            <br><input type="submit" value="Đăng nhập" name="dangnhap">
            </form>
            <li class="form_li"><a href="#">Quên mật khẩu</a></li>
            <li class="form_li"><a href="index.php?act=dangky">Đăng kí thành viên</a></li>
            
        <?php } ?>
    </div>
</div>
<div class="mb">
    <div class="box_title">DANH MỤC</div>
    <div class="box_content2 product_portfolio">
        <ul>
            <?php
            $i = 0;
            foreach ($dsdm as $dm) {
                extract($dm);
                $linkdm = "index.php?act=sanpham&iddm=" . $id;

                echo '<li><a href="' . $linkdm . '">' . $name . '</a></li>';


            }
            ?>
            <!-- <li><a href="">Đồng Hồ</a></li>
                    <li><a href="">Trang Phục</a></li>
                    <li><a href="">Phụ Kiện</a></li>
                    <li><a href="">Giày</a></li>
                    <li><a href="">Túi Xách</a></li> -->
        </ul>
    </div>
    <div class="box_search">
        <form action="index.php?act=sanpham" method="POST">
            <input type="text" name="" name="kyw" id="" placeholder="Từ khóa tìm kiếm">
            <input type="submit" name="timkiem" value="Tìm kiếm">
        </form>
    </div>
</div>
<!-- DANH MỤC top 10 -->
<div class="mb">
    <div class="box_title">TOP 10 YÊU THÍCH</div>
    <div class="box_content">
        <?php
        $i = 0;
        foreach ($dstop10 as $sp) {
            extract($sp);
            $linksp = "index.php?act=sanphamct&idsp=" . $id;
            $img = $img_path . $img;
            echo '<div class="selling_products" style="width:100%;">
                        <a href="' . $linksp . '"><img src="' . $img . '" alt="anh"></a>
                        <a href="' . $linksp . '">' . $name . '</a>
                    </div>';


        }
        ?>
        <!-- <div class="selling_products" style="width:100%;">
                    <img src="view//img/ao2.jpg" alt="anh">
                    <a href="">Áo sơ mi ngắn tay</a>
                </div>
                <div class="selling_products" style="width:100%;">
                    <img src="view//img/ao2.jpg" alt="anh">
                    <a href="">Áo sơ mi ngắn tay</a>
                </div>
                <div class="selling_products" style="width:100%;">
                    <img src="view//img/ao2.jpg" alt="anh">
                    <a href="">Áo sơ mi ngắn tay</a>
                </div>
                <div class="selling_products" style="width:100%;">
                    <img src="view//img/ao2.jpg" alt="anh">
                    <a href="">Áo sơ mi ngắn tay</a>
                </div>
                <div class="selling_products" style="width:100%;">
                    <img src="view//img/ao2.jpg" alt="anh">
                    <a href="">Áo sơ mi ngắn tay</a>
                </div>
                <div class="selling_products" style="width:100%;">
                    <img src="view//img/ao2.jpg" alt="anh">
                    <a href="">Áo sơ mi ngắn tay</a>
                </div>
                <div class="selling_products" style="width:100%;">
                    <img src="view//img/ao2.jpg" alt="anh">
                    <a href="">Áo sơ mi ngắn tay</a>
                </div>
                <div class="selling_products" style="width:100%;">
                    <img src="view//img/ao2.jpg" alt="anh">
                    <a href="">Áo sơ mi ngắn tay</a>
                </div>
                <div class="selling_products" style="width:100%;">
                    <img src="view//img/ao2.jpg" alt="anh">
                    <a href="">Áo sơ mi ngắn tay</a>
                </div>
                <div class="selling_products" style="width:100%;">
                    <img src="view//img/ao2.jpg" alt="anh">
                    <a href="">Áo sơ mi ngắn tay</a>
                </div> -->
    </div>
</div>