<?php
    include("../../config/connect.php");
    if (isset($_POST['themsanpham'])) {
        $tenhangsp = $_POST['tenhangsp'];
        $thutusp = $_POST['thutusp'];
        if ($tenhangsp && $thutusp) {
            $sql_them = "INSERT INTO tb_hangsp(tenhangsp, stt) VALUE('".$tenhangsp."', '".$thutusp."')";
            mysqli_query($connect, $sql_them);
        }
    }
    if (isset($_GET['query']) && $_GET['query'] == 'xoa') {
        $id = $_GET['idxoa'];
        $sql_xoa = "DELETE FROM tb_hangsp WHERE id_hangsp = '".$id."'";
        mysqli_query($connect, $sql_xoa);
    }

    if (isset($_POST['suasanpham'])) {
        $tenhang = $_POST['tenhangsp'];
        $stt = $_POST['thutusp'];
        $idsua = $_GET['idsua'];
        $sql_update = "UPDATE tb_hangsp SET tenhangsp = '".$tenhang."', stt = '".$stt."' WHERE id_hangsp = '".$idsua."'";
        mysqli_query($connect, $sql_update);
    }

    header('Location: ../../index.php?navigate=qlhsp&query=them');
?>