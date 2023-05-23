<div class="container-xxl">
    <h4 class="mt-3 mb-4 text-center">Quản lý hãng sản phẩm</h4>
    <form action="./modules/quanlyhangsanpham/xuly.php" method="post">
        <div class="row">
            <div class="col-4">
                <h5 class="fw-normal mb-3">Thêm hãng sản phẩm:</h5>
                <form action="xyly.php" method="post">
                    <div class="input-group input-group-sm mb-2 row">
                        <p class="fs-6 mb-0 col-4">Tên hãng</p>
                        <input type="text" class="form-control col-8" name="tenhangsp">
                    </div>
                    <div class="input-group input-group-sm mb-2 row">
                        <p class="fs-6 mb-0 col-4">Thứ tự</p>
                        <input type="text" class="form-control col-8" name="thutusp">
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm" name="themsanpham">Thêm</button>
                </form>
            </div>
        </div>
    </form>

</div>