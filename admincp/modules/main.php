<?php
    if (isset($_GET['navigate']) && isset($_GET['query'])) {
        $trangthai = $_GET['navigate'];
        $query = $_GET['query'];
    } else {
        $trangthai = '';
        $query = '';
    }

    if ($trangthai == 'qlhsp' && $query == 'them') {
        include('./modules/quanlydanhmucsp/them.php');
        include('./modules/quanlydanhmucsp/lietke.php');
    } elseif ($trangthai == 'qlhsp' && $query == 'sua') {
        include('./modules/quanlydanhmucsp/sua.php');
    }
    
?>