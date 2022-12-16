<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <form action="" method="GET" class="container">
        <input type="text" class="form-control" name="so_thu_nhat" placeholder="Số thứ nhất">
        <input type="text" class="form-control" name="toan_tu" placeholder="Phép tính">
        <input type="text" class="form-control" name="so_thu_hai" placeholder="Số thứ hai">
        <button class="btn btn-primary">Tính</button>
    </form>
    <p>Kết quả: <?php
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
                echo $ketqua;
                ?></p>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>