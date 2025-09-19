<?php
$ket_qua = 0;
$mang_so = array();

if (isset($_POST['btn_goi'])) {
    $nhap_mang = trim($_POST['nhap_mang']);
    if (!empty($nhap_mang)) {
        // Tách chuỗi thành mảng
        $mang_so = explode(",", $nhap_mang);

        // Tính tổng
        foreach ($mang_so as $so) {
            $ket_qua += (int)$so;
        }
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Nhập và tính toán trên dãy số</title>
    <meta charset="utf-8">
    <style>
    * {
        font-family: Tahoma;
    }

    table {
        width: 400px;
        margin: 100px auto;
    }

    table th {
        background: #66CCFF;
        padding: 10px;
        font-size: 18px;
    }
    </style>
</head>

<body>
    <form method="POST" action="">
        <table>
            <thead>
                <tr>
                    <th colspan="2">NHẬP VÀ TÍNH TRÊN DÃY SỐ</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Nhập dãy số:</td>
                    <td><input type="text" name="nhap_mang"
                            value="<?php echo isset($_POST['nhap_mang']) ? htmlspecialchars($_POST['nhap_mang']) : ''; ?>">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="btn_goi" value="Tổng dãy số"></td>
                </tr>
                <tr>
                    <td>Tổng dãy số:</td>
                    <td><input type="text" disabled value="<?php echo $ket_qua; ?>"></td>
                </tr>
            </tbody>
        </table>
    </form>
</body>

</html>