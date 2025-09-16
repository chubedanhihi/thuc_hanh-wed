<?php
$mang_so = array();

function xuat_mang($mang_so) {
    echo implode(" ", $mang_so);
}

function tim_min($mang_so) {
    if (!empty($mang_so)) {
        $min = $mang_so[0];
        foreach ($mang_so as $so) {
            if ($so < $min) $min = $so;
        }
        echo $min;
    }
}

function tim_max($mang_so) {
    if (!empty($mang_so)) {
        $max = $mang_so[0];
        foreach ($mang_so as $so) {
            if ($so > $max) $max = $so;
        }
        echo $max;
    }
}

function tinh_tong($mang_so) {
    $tong = 0;
    foreach ($mang_so as $so) {
        $tong += $so;
    }
    echo $tong;
}

if (isset($_POST['so_phan_tu'])) {
    $n = (int)$_POST['so_phan_tu'];
    for ($i = 0; $i < $n; $i++) {
        $mang_so[$i] = mt_rand(0, 20);
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>PHÁT SINH MẢNG VÀ TÍNH TOÁN</title>
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
    <form action="" method="POST">
        <table>
            <thead>
                <tr>
                    <th colspan="2">PHÁT SINH MẢNG VÀ TÍNH TOÁN</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Nhập số phần tử:</td>
                    <td><input type="text" name="so_phan_tu"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Phát sinh và tính toán"></td>
                </tr>
                <tr>
                    <td>Mảng: </td>
                    <td><input type="text" disabled value="<?php xuat_mang($mang_so); ?>"></td>
                </tr>
                <tr>
                    <td>GTLN (MAX): </td>
                    <td><input type="text" disabled value="<?php tim_max($mang_so); ?>"></td>
                </tr>
                <tr>
                    <td>GTNN (MIN): </td>
                    <td><input type="text" disabled value="<?php tim_min($mang_so); ?>"></td>
                </tr>
                <tr>
                    <td>Tổng mảng: </td>
                    <td><input type="text" disabled value="<?php tinh_tong($mang_so); ?>"></td>
                </tr>
            </tbody>
        </table>
    </form>
</body>

</html>