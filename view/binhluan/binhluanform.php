<?php
session_start();

$idpro = $_REQUEST['idpro'];
include "../../model/pdo.php";
include "../../model/binhluan.php";

$dsbl = loadall_binhluan($idpro);
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/style.css" rel="stylesheet">
        <style>
             .mb {
                width: 90%;
                margin-left: 5%;
            }
            
            .binhluan table td:nth-child(1) {
                width: 50%;
            }

            .binhluan table td:nth-child(2) {
                width: 20%;
            }

            .binhluan table td:nth-child(3) {
                width: 30%;
            }
        </style>
    </head>

    <body>



        <div class="mb">

            <div class="binhluan">
                <table>

                    <tr>
                        <th>Nội dung</th>
                        <th>ID người bình luận</th>
                        <th>Thời gian bình luận</th>
                    </tr>
                    <?php

                    foreach ($dsbl as $bl) {
                        extract($bl);
                        $linkdm = "index.php?act=sanpham&iddm=" . $id;
                        echo '<tr><td>' . $noidung . '</td>';
                        echo '<td>' . $iduser . '</td>';
                        echo '<td>' . $ngaybinhluan . '</td></tr> ';
                    }
                    ?>
                </table>
            </div>

            <?php
            if (isset($_SESSION['user'])) {
                ?>
                <div class="box_search">
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                        <input type="hidden" name="idpro" value="<?= $idpro ?>"> <br>
                        <input type="text" name="noidung" id=""> <br>

                        <input type="submit" name="guibinhluan" value="Gửi">
                    </form>
                </div>
                <?php
            }
            ?>


            <?php
            if ((isset($_POST['guibinhluan'])) && ($_POST['guibinhluan'])) {
                $noidung = $_POST['noidung'];
                $idpro = $_POST['idpro'];
                $iduser = $_SESSION['user']['id'];
                $ngaybinhluan = date("h:i:sa d/m/Y");
                insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan);
                header("Location: " . $_SERVER['HTTP_REFERER']);
            }

            ?>

        </div>

    </body>

    </html>