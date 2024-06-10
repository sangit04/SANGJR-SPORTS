<main class="catalog  mb ">

    <div class="boxleft">
        <div class="mb">
          
            <div class="box_title">QUÊN MẬT KHẨU</div>
            <div class="box_content form_account">
            <form action="index.php?act=quenmk" method="post">
          <div>
            <h4>Email</h4><br>
            <input type="email" name="email" placeholder="nhập email">
          </div>
          
          <input type="submit" value="Gửi" name="guiemail">
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