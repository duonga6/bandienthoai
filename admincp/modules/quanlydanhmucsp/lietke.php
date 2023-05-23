<?php
    $sql_lietke = "SELECT * FROM tbl_hangsp ORDER BY id_hangsp  ASC";
    $query_lietke_hsp = mysqli_query($connect, $sql_lietke);
?>

<div class="container-xxl mt-4">
    <table class="table table-bordered border-primary caption-top">
        <caption class="fs-5">Danh sách hãng sản phẩm</caption>
        <thead>
            <tr>
                <th scope="col" class="col-3">id_hangsp</th>
                <th scope="col" class="col-4">Tên hãng</th>
                <th scope="col" class="col-3">Thứ tự</th>
                <th scope="col" class="col-2"></th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = mysqli_fetch_array($query_lietke_hsp)) {
            ?>
            <tr>
                <td><?php echo $row['id_hangsp'] ?></td>
                <td><?php echo $row['tenhangsp'] ?></td>
                <td><?php echo $row['stt'] ?></td>
                <td>
                <a class="link-offset-2 link-underline link-underline-opacity-0 me-1" href="./modules/quanlyhangsanpham/xuly.php?idxoa=<?php echo $row['id_hangsp']?>&query=xoa">Xóa</a>|
                <a class="link-offset-2 link-underline link-underline-opacity-0" href="?navigate=qlhsp&query=sua&idsua=<?php echo $row['id_hangsp']?>">Sửa</a>
                </td>
            </tr>

            <?php
            }
        ?>
        </tbody>
    </table>
</div>