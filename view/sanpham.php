<main class="catalog  mb ">

    <div class="boxleft">
        <div class="mb">
          
            <div class="box_title">SẢN PHẨM <strong><?=$tendm?></strong></div>
            <div class="box_content">
           
            <div class="items ">
                <?php
                    $i = 0;
            
                    foreach ($dssp as $sp) {
                        extract($sp);
                        $hinh = $img_path . $img;
                        $linksp="index.php?act=sanphamct&idsp=".$id;
                        
                        if (($i == 2) || ($i == 5) || ($i == 8) || ($i == 11)) {
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
                  </div>
                  ';
                        $i += 1;
        
                    }
                ?>
</div>
            </div>
           
        </div>
        <div class="mb">
            <div class="box_title">BÌNH LUẬN</div>
            <div class="box_content">

            </div>
        </div>
        
    </div>
    <div class="boxright">

        <?php
        include "boxright.php";
        ?>
    </div>
    </div>