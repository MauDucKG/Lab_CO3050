<?php
$so_thu_nhat = $_GET['so_thu_nhat'];
$so_thu_hai = $_GET['so_thu_hai'];
$toan_tu = $_GET['toan_tu'];
// Code cảnh báo nhập thiếu dữ liệu
if (empty($so_thu_nhat) || empty($toan_tu) || empty($so_thu_hai)) {
    echo 'Canh bao: Ban nhap thieu du lieu !!!';
    exit();
}
//Code cảnh báo người dùng phải nhập số
if (!is_numeric($so_thu_nhat) || !is_numeric($so_thu_hai)) {
    echo 'Canh bao: Ban phai nhap so !!!';
    exit();
}

if ($toan_tu == '+') {
    $ketqua = $so_thu_nhat + $so_thu_hai;
} else if ($toan_tu == '-') {
    $ketqua = $so_thu_nhat - $so_thu_hai;
} else if ($toan_tu == '/') {
    $ketqua = $so_thu_nhat / $so_thu_hai;
} else if ($toan_tu == '*') {
    $ketqua = $so_thu_nhat * $so_thu_hai;
} else {
    echo 'Canh bao: Toan tu ban nhap vao khong chinh xac !!!';
    exit();
}
?>
<input type="text" value="<?php echo $so_thu_nhat ?>" name="so_thu_nhat" size="10">
<input type="text" value="<?php echo $toan_tu ?>" name="toan_tu" size="5">
<input type="text" value="<?php echo $so_thu_hai ?>" name="so_thu_hai" size="10">
=
<input type="text" value="<?php echo $ketqua ?>" name="ketqua" size="10"><br /><br />
<a href="index.php">Làm phép tính khác</a>