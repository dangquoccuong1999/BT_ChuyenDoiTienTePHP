<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $tiGia = $_REQUEST['tigia'];
    $usd = $_REQUEST['usd'];
    $ketQua = $usd * $tiGia * 1000;
    echo 'Chuyển đổi từ USD sang tiền Việt là : ' . $ketQua . ' đồng';
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<br>
<form action="ChuyenDoiTienTe.php">
    <input type="submit" value="Quay lại">
</form>
</body>
</html>
