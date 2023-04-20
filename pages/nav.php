<?php
$sql_dm = "SELECT * FROM tb_danhmuc ORDER BY id_dm DESC";
$query_dm = mysqli_query($connect, $sql_dm);
?>

<div class="header">
    <div class="container-xxl text-center">
        <div class="row">
            <div class="col-lg-3">
                <img src="img/logo.png" class="img-fluid" alt="">
            </div>
            <div class="col-lg-5 d-flex align-items-center">
                <form class="d-flex w-100" role="search">
                    <input class="form-control me-2" type="search" placeholder="Nhập từ khóa tìm kiếm..." aria-label="Nhập từ khóa tìm kiếm...">
                    <button class="btn btn-primary" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
            <div class="col-lg-2">
                <div class="row h-100 align-items-center">
                    <div class="col-lg-3">
                        <i class="fa-solid fa-phone fs-3 ms-4 text-primary"></i>
                    </div>
                    <div class="col-lg-9">
                        <p class="mb-0 fs-6">Tư vấn hỗ trợ</p>
                        <p class="mb-0 fs-5 fw-bold text-primary">0987654321</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-1">
                <div class="row h-100 align-items-center">
                    <div class="col-lg-6">
                        <a href="" class="link-underline link-underline-opacity-0 d-block mt-2">
                            <i class="fa-solid fa-cart-shopping w-100 fs-4"></i>
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a href="" class="link-underline link-underline-opacity-0 d-block mt-2">
                        <i class="fa-solid fa-truck-fast w-100 fs-4"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-1">

            </div>
        </div>
    </div>
</div>