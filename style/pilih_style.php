<?php
    if (isset($_GET['hal'])) {

        if ($_GET['hal']=='pelanggan') {
          include "style/style_tabel.php";
        }
        elseif ($_GET['hal']=='tambah_pelanggan') {
          include "style/style2.php";
        }
        elseif ($_GET['hal']=='edit_pelanggan') {
          include "style/style2.php";
        }
        else
        {
          include "style/style1.php";
        }
    }else{
    include "style/style1.php";
    }
?>