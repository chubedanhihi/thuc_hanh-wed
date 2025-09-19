<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Xuất số thành chữ</title>
</head>

<body>
    <?php
$chu = ""; // gán mặc định để tránh lỗi khi chưa nhập

if (isset($_POST["so"])) {
    $so = $_POST["so"];

    if (is_numeric($so)) {
        $map = [
            0 => "Không",
            1 => "Một",
            2 => "Hai",
            3 => "Ba",
            4 => "Bốn",
            5 => "Năm",
            6 => "Sáu",
            7 => "Bảy",
            8 => "Tám",
            9 => "Chín"
        ];

        $so = (int)$so; // ép kiểu về số nguyên
        $chu = $map[$so] ?? "Không hợp lệ"; // nếu không thuộc 0–9 thì báo không hợp lệ
    } else {
        $chu = "Vui lòng nhập số";
    }
}
?>
    <form action="" method="POST">
        <table width="519" border="1" cellspacing="0" cellpadding="5">
            <tr>
                <td colspan="3" align="center"><b>Đọc số</b></td>
            </tr>
            <tr>
                <td>Nhập số (0 đến 9)</td>
                <td width="69" rowspan="2" align="center">
                    <input type="submit" name="button" id="button" value="Submit" />
                </td>
                <td>Kết quả bằng chữ</td>
            </tr>
            <tr>
                <td width="177">
                    <input type="text" name="so" id="textfield"
                        value="<?php echo isset($_POST['so']) ? htmlspecialchars($_POST['so']) : ''; ?>" />
                </td>
                <td width="232">
                    <input type="text" name="chu" id="textfield2" value="<?php echo $chu; ?>" readonly />
                </td>
            </tr>
        </table>
    </form>
</body>

</html>