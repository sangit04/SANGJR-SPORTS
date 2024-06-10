<main class="catalog  mb ">

    <div class="boxleft">
        <div class="mb">

            <div class="box_title">CẬP NHẬT TÀI KHOẢN</div>
            <div class="box_content form_account">
                <?php
                if (isset($_SESSION['user']) && (is_array($_SESSION['user']))) {
                    extract($_SESSION['user']);
                }
                ?>
                <form action="index.php?act=edit_taikhoan" method="post">
                    <div>
                        <h4>Email</h4><br>
                        <input type="email" name="email" placeholder="nhập email...." value="<?= $email ?>">
                    </div>
                    <div>
                        <h4>Tên đăng nhập</h4><br>
                        <input type="text" name="user" placeholder="nhập user...." value="<?= $user ?>">
                    </div>
                    <div>
                        <h4>Mật khẩu</h4><br>
                        <input type="password" name="pass" placeholder="nhập mật khẩu...." value="<?= $pass ?>">
                    </div>
                    <div>
                        <h4>Địa chỉ</h4><br>
                        <input type="text" name="address" placeholder="nhập địa chỉ...." value="<?= $address ?>">
                    </div>
                    <div>
                        <h4>Số điện thoại</h4><br>
                        <input type="text" name="tel" placeholder="nhập sdt...." value="<?= $tel ?>">
                    </div>
                    <input type="hidden" name="id" value="<?php echo $_SESSION['user']['id']; ?>">
                    <input type="submit" value="Cập nhật" name="capnhat">
                    <input type="reset" value="Nhập lại">
                </form>
                <h2 class="thongbao">
                    <?php

                    if (isset($thongbao) && ($thongbao != "")) {
                        echo $thongbao;
                    }

                    ?>
                </h2>
            </div>
        </div>

    </div>
    <div class="boxright">

        <?php
        include "view/boxright.php";
        ?>
    </div>
    </div>