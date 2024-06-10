<main class="catalog  mb ">

    <div class="boxleft">
        <div class="mb">
          
            <div class="box_title">Đăng Ký Thành Viên</div>
            <div class="box_content form_account">
            <form action="index.php?act=dangky" method="post">
          <div>
            <h4>Email</h4><br>
            <input type="email" name="email" placeholder="nhập email">
          </div>
          <div>
          <h4>Tên đăng nhập</h4><br>
            
            <input type="text" name="user"  placeholder="nhập user">
          </div>
          <h4>Mật khẩu</h4><br>
             
          <div>
            <input type="password" name="pass"  placeholder="nhập pass">
          </div>
          <input type="submit" value="Đăng ký" name="dangky">
          <input type="reset" value="Nhập lại">
        </form>
        <h2 class="thongbao">
        <?php
        
           if (isset($thongbao)&&($thongbao!="")) {
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