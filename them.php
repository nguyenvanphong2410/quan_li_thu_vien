<?php
require_once("kiemtraconnect.php"); //kiểm tra kết nối
$msg = '';
//Kiểm tra nhập submit
if (isset($_POST['click'])) {
    //Kiểm tra có nhập vào đủ thông tin
    if (($_POST['masach'] != "")
        && ($_POST['tensach'] != "")
        && ($_POST['nhaxb'] != "")
        && ($_POST['namxb'] != "")
        && ($_POST['chubien'] != "")
        && ($_POST['mota'] != "")
        && ($_POST['sotrang'] != "")
        && ($_POST['taiban'] != "")
        && ($_POST['tacgia2'] != "")
    ) {
        $a = $_POST['masach'];
        $b = $_POST['tensach'];
        $c = $_POST['nhaxb'];
        $d = $_POST['namxb'];
        $e = $_POST['chubien'];
        $f = $_POST['mota'];
        $g = $_POST['sotrang'];
        $h = $_POST['taiban'];
        $i = $_POST['tacgia2'];


        //Tạo truy vấn thêm bản ghi
        $sql = "INSERT INTO tbl_sach (masach,tensach,nhaxb, namxb ,chubien, mota,sotrang, taiban,tacgia2)
            VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i')";
        //Kiểm tra khi thêm bản ghi
        if (mysqli_query($connect, $sql)) {
            $msg = '^^ Bạn đã thêm thành công ^^';
        } else {
            $msg = '!!__Bạn đã thêm thất bại__!!';
        }
        mysqli_close($connect); // Đóng kết nối 
    } else {
        $msg = "Thất Bại ! Hãy điền đủ đầy đủ thông tin sách !";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Thêm thông tin Sách</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <style>
        .all {
            margin: 0px auto;
            max-width: 500px;
        }
    </style>
</head>

<body style="background-color: grey; background-size:cover; ">
    <div class="panel panel-primary" style="width:500px; margin:0px auto; margin-top:5px; background-color:azure; padding: 10px; border-radius:5px;box-shadow: 10px 10px #badef7">
        <div class="panel-heading">
            <h2 class="text-center">_Thêm thông tin Sách_</h2>
            <h6 class="text-center" style="color: red"> <?= $msg ?> </h6>
            <button class="btn-success"><a href="index.php" style="color: white;"> Trở về trang Danh sách thông tin sách</a> </button><br><br>
        </div>

        <form class="form-inline" method="POST">
            <div>
                Nhập vào mã sách: <input class="form-control" type="text" name="masach" placeholder="nhập mã Mã sách">
                <br><br>
                Nhập vào tên sách: <input class="form-control" type="text" name="tensach" placeholder="nhập Tên sách">
                <br><br>
                Nhập vào Nhà XB: <input class="form-control" type="text" name="nhaxb" placeholder="nhập Nhà xuất bản">
                <br><br>
                Nhập vào Năm XB: <input class="form-control" type="text" name="namxb" placeholder="nhập Năm xuất bản">
                <br><br>
                Nhập vào chủ biên: <input class="form-control" type="text" name="chubien" placeholder="nhập Tác giả chính (chủ biên)">
                <br><br>
                Nhập vào mô tả: <input class="form-control" type="text" name="mota" placeholder="nhập Mô tả nội dung sách">
                <br><br>
                Nhập vào số trang: <input class="form-control" type="text" name="sotrang" placeholder="nhập Số trang">
                <br><br>
                Số lần tái bản: <input class="form-control" type="text" name="taiban" placeholder=" Số lần tái bản ">
                <br><br>
                D.sach Tác giả <input class="form-control" type="text" name="tacgia2" placeholder="nhập Danh sách các tác giả">
                <br><br>
                <input class="btn-info " type="submit" name="click" value="Thêm và Lưu">
            </div>
        </form>
    </div>
</body>

</html>