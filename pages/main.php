<?php
if (isset($_GET["navigate"])) {
    $trangthai = $_GET["navigate"];
} else {
    $trangthai = "ok";
}
if ($trangthai == "dangnhap") {
    echo '<script>window.location.href = "user/login.php";</script>';
    exit;
} elseif ($trangthai == "gioithieu") {
    include("./pages/main/gioithieu.php");
} elseif ($trangthai == "tintuc") {
    include("./pages/main/tintuc.php");
} elseif ($trangthai == "cauhoi") {
    include("./pages/main/cauhoi.php");
} elseif ($trangthai == "tuyendung") {
    include("./pages/main/tuyendung.php");
} elseif ($trangthai == "lienhe") {
    include("./pages/main/lienhe.php");
} elseif ($trangthai == "giohang") {
    include("./pages/main/cart.php");
} elseif ($trangthai == "donhang") {
    include("./pages/main/donhang.php");
}
else {
    include("./pages/slider.php");
    include("./pages/main/products.php");
}
?>