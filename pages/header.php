<?php
$sql_dm = "SELECT * FROM tb_danhmuc ORDER BY stt ASC";
$query_dm = mysqli_query($connect, $sql_dm);

$sql_tt = "SELECT * FROM tb_tinhtrang ORDER BY stt ASC";
$query_tt = mysqli_query($connect, $sql_tt);
?>

<div class="header">
    <div class="container-xxl text-center header-top">
        <div class="row">
            <div class="col-lg-3">
                <a href="" class=""><img src="img/logo.png" class="img-fluid" alt=""></a>
            </div>
            <div class="col-lg-4 d-flex align-items-center">
                <form class="d-flex w-100" role="search">
                    <input class="form-control me-2" type="search" placeholder="Nhập từ khóa tìm kiếm..."
                        aria-label="Nhập từ khóa tìm kiếm...">
                    <button class="btn btn-primary" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
            <div class="col-lg-2">
                <div class="row h-100 align-items-center">
                    <div class="col-3">
                        <i class="fa-solid fa-phone fs-3 ms-4 text-primary"></i>
                    </div>
                    <div class="col-9">
                        <p class="mb-0 fs-6">Tư vấn hỗ trợ</p>
                        <p class="mb-0 fs-5 fw-bold text-primary">0987654321</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="row h-100 align-item-center">
                    <div class="col-6">
                        <div class="row h-100 align-items-center">
                            <div class="col-4">
                                <a href="index.php?navigate=giohang"
                                    class="link-underline link-underline-opacity-0 d-block mt-2">
                                    <i class="fa-solid fa-cart-shopping w-100 fs-4"></i>
                                </a>
                            </div>
                            <div class="col-4">
                                <a href="" class="link-underline link-underline-opacity-0 d-block mt-2">
                                    <i class="fa-solid fa-heart w-100 fs-3"></i>
                                </a>
                            </div>
                            <div class="col-4">
                                <a href="" class="link-underline link-underline-opacity-0 d-block mt-2">
                                    <i class="fa-solid fa-truck-fast w-100 fs-4"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row h-100 align-items-center g-0">
                            <div class="col-3">
                                <i class="fa-regular fa-circle-user fs-3 text-primary mt-2"></i>
                            </div>
                            <div class="col-9">
                                <?php
                                if (isset($_SESSION['dangxuat'])) {
                                    ?>
                                    <a href="" class="link-underline link-underline-opacity-0">Đăng nhập</a>
                                    <a href="" class="link-underline link-underline-opacity-0">Đăng ký</a>
                                    <?php
                                } else {
                                ?>
                                <div class="dropdown">
                                    <button class="btn noborder dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">Username</button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Thông tin</a></li>
                                        <li><a class="dropdown-item" href="#">Cài đặt</a></li>
                                        <li><a class="dropdown-item" href="#">Đăng xuất</a></li>
                                    </ul>
                                </div>
                                <?php
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-primary-subtle header-bot">
        <div class="container-xxl">
            <nav class="navbar navbar-expand-lg p-0">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav fs-6">
                            <li class="nav-item dropdown">
                                <button class="btn dropdown-toggle hide d-flex align-items-center p-0" type="button"
                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="fa-solid fa-bars-staggered"></i>
                                    <a class="nav-link" href="#">Danh mục sản phẩm</a>
                                </button>
                                <div class="dropdown-menu p-0 header-menu-choose" aria-labelledby="dropdownMenuButton">
                                    <div class="list-group-container d-flex ">
                                        <div class="list-product-by-brain">
                                            <div class="list-group">
                                                <p class="list-product-content fw-bold">Điện thoại theo hãng</p>
                                                <?php
                                                while ($row_dm = mysqli_fetch_array($query_dm)) {
                                                    echo "<a href='#' class='list-group-item list-group-item-action'>" . $row_dm['tendm'] . "</a>";
                                                }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="list-product-by-status">
                                            <div class="list-group">
                                                <p class="list-product-content fw-bold">Chọn theo tình trạng</p>
                                                <?php
                                                while ($row_tt = mysqli_fetch_array($query_tt)) {
                                                    echo "<a href='#' class='list-group-item list-group-item-action'>" . $row_tt['ten_tinhtrang'] . "</a>";
                                                }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="list-product-by-price">
                                            <div class="list-group">
                                                <p class="list-product-content fw-bold">Chọn theo mức giá</p>
                                                <a href='#' class='list-group-item list-group-item-action'>Dưới 5
                                                    triệu</a>
                                                <a href='#' class='list-group-item list-group-item-action'>Từ 5 - 10
                                                    triệu</a>
                                                <a href='#' class='list-group-item list-group-item-action'>Từ 10 - 15
                                                    triệu</a>
                                                <a href='#' class='list-group-item list-group-item-action'>Từ 15 - 20
                                                    triệu</a>
                                                <a href='#' class='list-group-item list-group-item-action'>Từ 20 - 30
                                                    triệu</a>
                                                <a href='#' class='list-group-item list-group-item-action'>Trên 30
                                                    triệu</a>
                                            </div>
                                        </div>
                                        <div class="list-product-by-hot">
                                            <div class="list-group">
                                                <p class="list-product-content fw-bold">Sản phẩm bán chạy nhất</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php">Trang chủ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Giới thiệu</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Tin tức</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Câu hỏi thường gặp</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Tuyển dụng</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Liên hệ</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>