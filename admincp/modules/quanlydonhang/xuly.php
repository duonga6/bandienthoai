<?php
    include('../../config/connect.php');
    if (isset($_GET['query']) && $_GET['query'] == 'xoa') {
        $id = $_GET['code_cart'];

        mysqli_query($connect, "DELETE FROM tbl_cart_info WHERE code_cart = $id");

        mysqli_query($connect, "DELETE FROM tbl_cart WHERE code_cart = $id");

        header('Location: ../../index.php?navigate=qldh&query=them');
    }
?>