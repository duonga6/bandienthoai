<div>
<?php
    if (isset($_GET["navigate"])) {
        $trangthai = $_GET["navigate"];
    } else {
        $trangthai = "ok";
    }

    if ($trangthai == "giohang") {
        include("./pages/main/cart/cart.php");
    }

    if ($trangthai == "donhang") {
        
    }
?>
</div>