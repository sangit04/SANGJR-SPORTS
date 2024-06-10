<main class="catalog  mb ">

    <div class="boxleft">
        <div class="mb">
            <?php
               extract($onesp);
            ?>
            <div class="box_title"><?=$name?></div>
            <div class="box_content">
                <?php
                    extract($onesp);
                    $img=$img_path.$img;
                    echo"<div class='spct'><img src='".$img."'></div>";
                    echo $mota;
                ?>

            </div>
        </div>
        <div class="mb">
            <div class="box_title">BÌNH LUẬN</div>
            <div class="box_content">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                $("#binhluan").load("view/binhluan/binhluanform.php", {
                    idpro: <?php echo $id ?>
                });
            });
        </script>
        <div class="row" id="binhluan">

        </div>
            </div>
        </div>
        <div class="mb">
            <div class="box_title">SẢN PHẨM CÙNG LẠI</div>
            <div class="box_content">
                <?php
                foreach ($sp_cungloai as $sp_cungloai) {
                    extract($sp_cungloai);
                    $linksp="index.php?act=sanphamct&idsp=".$id;
                    
                    echo '<li><a href="'.$linksp.'">'.$name.'</a></li>';
                }
                ?>
            </div>
        </div>
    </div>
    <div class="boxright">

        <?php
        include "boxright.php";
        ?>
    </div>
    </div>