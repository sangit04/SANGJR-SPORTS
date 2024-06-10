<main class="catalog  mb ">

    <div class="boxleft">
        <div class="banner">
            <img id="banner" src="view/img/banner.jpg" alt="">
            <button class="pre" onclick="pre()">&#10094;</button>
            <button class="next" onclick="next()">&#10095;</button>
        </div>

        <div class="items ">
            <?php
            $i = 0;
            
            foreach ($spnew as $sp) {
                extract($sp);
                $hinh = $img_path . $img;
                $linksp="index.php?act=sanphamct&idsp=".$id;
                
                if (($i == 2) || ($i == 5) || ($i == 8)) {
                    $mr = "";
                } else {
                    $mr = "mr";
                }
                echo '
        <div class="box_items ' . $mr . '">
          <div class="box_items_img"><a href="'.$linksp.'"><img src="' . $hinh . '" alt=""></a>
            <div class="add" href="">ADD TO CART</div>
          </div>
          <a class="item_name" href="">' . $name . '</a>
          <p class="price">' . $price . '</p>
          </div>';
                $i += 1;

            }
            ?>



            <!-- <div class="items">
    <div class="box_items">
      <div class="box_items_img">
        <img src="view/img/ao2.jpg" alt="">
        <div class="add" href="">ADD TO CART</div>
      </div>
      <a class="item_name" href="">ÁO SƠ MI NGẮN TAY XIÊN</a>
      <p class="price">$4000</p>

    </div>
    <div class="box_items">
      <div class="box_items_img">
        <img src="view/img/ao1.jpg" alt="">
        <div class="add" href="">ADD TO CART</div>
      </div>
      <a class="item_name" href="">ÁO KHOÁC CÓ TÚI CÀI NÚT</a>
      <p class="price">$4000</p>

    </div>
    <div class="box_items">
      <div class="box_items_img">
        <img src="view/img/ao4.jpg" alt="">
        <div class="add" href="">ADD TO CART</div>
      </div>
      <a class="item_name" href="">ÁO SƠ MI ĐẢO NGƯỢC</a>
      <p class="price">$4000</p>

    </div>
    <div class="box_items">
      <div class="box_items_img">
        <img src="view//img/quan1.jpg" alt="">
        <div class="add" href="">ADD TO CART</div>
      </div>
      <a class="item_name" href="">QUẦN XẾP LY</a>
      <p class="price">$4000</p>

    </div>
    <div class="box_items">
      <div class="box_items_img">
        <img src="view//img/tui1.jpg" alt="">
        <div class="add" href="">ADD TO CART</div>
      </div>
      <a class="item_name" href="">TÚI HỘP CÓ DÂY ĐEO</a>
      <p class="price">$4000</p>

    </div>
    <div class="box_items">
      <div class="box_items_img">
        <img src="view//img/ao5.jpg" alt="">
        <div class="add" href="">ADD TO CART</div>
      </div>
      <a class="item_name" href="">SƠ MI CÓ CHI TIẾT BUỘC DÂY</a>
      <p class="price">$4000</p>

    </div>
    <div class="box_items">
      <div class="box_items_img">
        <img src="view//img/giay1.jpg" alt="">
        <a class="add" href="">ADD TO CART</a>
      </div>
      <a class="item_name" href="">GIÀY CARLO DERBY</a>
      <p class="price">$4000</p>

    </div>
    <div class="box_items">
      <div class="box_items_img">
        <img src="view//img/giay2.jpg" alt="">
        <div class="add" href="">ADD TO CART</div>
      </div>
      <a class="item_name" href="">GIÀY CHẠY BỘ B31</a>
      <p class="price">$4000</p>

    </div>
    <div class="box_items">
      <div class="box_items_img">
        <img src="view//img/nhan1.jpg" alt="">
        <div class="add"><a href="danhsach.html">ADD TO CART</a></div>
      </div>
      <a class="item_name" href="">NHẪN ĐÍNH KIM CƯƠNG</a>
      <p class="price">$4000</p>

    </div> -->



        </div>
    </div>
    <div class="boxright">

    <?php
        include "boxright.php";
        ?>
    </div>

</main>
<!-- BANNER 2 -->

<!-- FOOTER -->
