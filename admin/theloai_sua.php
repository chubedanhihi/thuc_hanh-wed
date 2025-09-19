<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Sửa Thể Loại</title>
</head>
<body>
<?php 
include("../connect.php");
if(isset($_GET['idTL'])){
    $sl="SELECT * FROM theloai WHERE idTL=".$_GET['idTL'];
    $results = mysqli_query($connect,$sl);
    $d = mysqli_fetch_array($results);
}
?>
<h2>Sửa Thể Loại</h2>
<form action="" method="post" enctype="multipart/form-data">
<table>
<tr>
    <td>Tên Thể Loại</td>
    <td><input type="text" name="TenTL" value="<?php echo $d['TenTL'];?>" /></td>
</tr>
<tr>
    <td>Thứ Tự</td>
    <td><input type="text" name="ThuTu" value="<?php echo $d['ThuTu'];?>" /></td>
</tr>
<tr>
    <td>Ẩn / Hiện</td>
    <td>
        <select name="AnHien">
            <option value="0" <?php if($d['AnHien']==0) echo "selected";?>>Ẩn</option>
            <option value="1" <?php if($d['AnHien']==1) echo "selected";?>>Hiện</option>
        </select>
    </td>
</tr>
<tr>
    <td>Icon cũ</td>
    <td><img src="../image/<?php echo $d['icon'] ?>" width="40" height="40" /></td>
</tr>
<tr>
    <td>Đổi Icon</td>
    <td>
        <input type="file" name="image" />
        <input type="hidden" name="ten_anh" value="<?php echo $d['icon']; ?>" />
    </td>
</tr>
<tr>
    <td></td>
    <td>
        <input type="hidden" name="idTL" value="<?php echo $_GET['idTL'];?>" />
        <input type="submit" name="Sua" value="Sửa" />
    </td>
</tr>
</table>
</form>

<?php
if (isset($_POST['Sua'])) {
    $theloai = $_POST['TenTL'];
    $thutu   = $_POST['ThuTu'];
    $an      = $_POST['AnHien'];
    $key     = $_POST['idTL'];
    $ten_file_tai_len = $_FILES["image"]["name"];

    if($ten_file_tai_len!="") {	
        $icon = $ten_file_tai_len;
        move_uploaded_file($_FILES['image']['tmp_name'],"../image/".$ten_file_tai_len);
        unlink("../image/".$_POST['ten_anh']); // xóa ảnh cũ
    } else {
        $icon = $_POST['ten_anh'];
    }

    $sl="UPDATE theloai SET TenTL='$theloai', ThuTu='$thutu', AnHien='$an', icon='$icon' WHERE idTL='$key'";
    if(mysqli_query($connect, $sl)){
        echo "<script>alert('Sửa thành công'); location.href='theloai.php';</script>";
    } else {
        echo "Lỗi: ".mysqli_error($connect);
    }
}
?>
</body>
</html>
