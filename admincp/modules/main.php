<?php
    if (isset($_GET['navigate'])) {
        $trangthai = $_GET['navigate'];
    } else {
        $trangthai = '';
    }

    if (isset($_GET['query'])) {
        $query = $_GET['query'];
        
    }else {
        $query = '';
    }

    if ($trangthai == 'qldmsp' && $query == 'them') {
        include('./modules/quanlydanhmucsp/them.php');
        include('./modules/quanlydanhmucsp/lietke.php');
    } elseif ($trangthai == 'qldmsp' && $query == 'suahsp') {
        include('./modules/quanlydanhmucsp/sua.php');
    } elseif ($trangthai == 'qldmsp' && $query == 'suamucgia') {
        include('./modules/quanlydanhmucsp/suamucgia.php');
    } elseif ($trangthai == 'qlsp' && $query == 'them') {
        include('./modules/quanlysp/them.php');
        include('./modules/quanlysp/lietke.php');
    } elseif ($trangthai == 'qlsp' && $query == 'sua') {
        include('./modules/quanlysp/sua.php');
    } elseif ($trangthai == 'dangxuat') {
        unset($_SESSION['loginadmin']);
        header('Location: ../index.php');
    }elseif ($trangthai == 'qldh' && $query == 'them') {
        include('./modules/quanlydonhang/lietke.php');
    }
    
?>