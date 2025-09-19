<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Thêm Thể Loại</title>
</head>
<body>
<h2>Thêm Thể Loại</h2>
<form action="theloai_them_xl.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>Tên Thể Loại</td>
            <td><input type="text" name="TenTL" required /></td>
        </tr>
        <tr>
            <td>Thứ Tự</td>
            <td><input type="number" name="ThuTu" value="0" /></td>
        </tr>
        <tr>
            <td>Ẩn / Hiện</td>
            <td>
                <select name="AnHien">
                    <option value="0">Ẩn</option>
                    <option value="1" selected>Hiện</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Icon</td>
            <td><input type="file" name="image" required /></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="Them" value="Thêm" />
                <input type="reset" value="Hủy" />
            </td>
        </tr>
    </table>
</form>
</body>
</html>
