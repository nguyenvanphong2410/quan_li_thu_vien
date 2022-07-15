<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tìm kiếm sách</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <style>
    </style>
</head>

<body>
    <div class="container">
        <h1 class="text-center text-success">__Tìm Khách Sách__</h1>
        <button class="btn-success  "><a href="index.php" style="color: white;"> Trở về trang Thông tin sách</a> </button>
        <table class="table table-bordered table-hover">
            <tr class="table-success">
                <th>STT</th>
                <th>Mã KH</th>
                <th>Tên sách</th>
                <th>Nhà xuất bản,</th>
                <th>Năm xuất bản</th>
                <th>Tác giả chính</th>
                <th>Mô tả nội dung sách</th>
                <th>Số trang</th>
                <th>Số lần tái bản</th>
                <th>Các tác giả</th>
            </tr>
            <?php
            require_once("kiemtraconnect.php"); //Kiểm tra kết nối SQL
            //Tìm số bản ghi
            $result = mysqli_query($connect, 'SELECT count(id) AS total FROM tbl_sach');
            $row = mysqli_fetch_assoc($result);
            $total_records = $row['total'];

            if (isset($_REQUEST['tim'])) {
                $tim = $_GET['tk'];
                if (empty($tim)) {
                    echo "Bạn phải nhập tên sách thì mới có thể tìm kiếm sách ! ";
                } else {

                    $query = "SELECT * FROM tbl_sach WHERE tensach LIKE '%$tim%'";
                    $sql = mysqli_query($connect, $query);
                    $num = mysqli_num_rows($sql);
                    $stt = 1; //Biến số stt tăng dần
                    if ($num > 0 && $tim != "") {
                        echo "<h5 > Tìm được $num sách trong số $total_records sách có trên cơ sở dữ liệu </h5>";
                        while ($row = mysqli_fetch_assoc($sql)) {
                            echo "<tr>
                        <td>" . ($stt++) .  "</td>
                        <td>" . $row['masach'] .  "</td>
                        <td>" . $row['tensach'] . "</td>
                        <td>" . $row['nhaxb'] . "</td>
                        <td>" . $row['namxb'] . "</td>
                        <td>" . $row['chubien'] . "</td>
                        <td>" . $row['mota'] . "</td>
                        <td>" . $row['sotrang'] . "</td>
                        <td>" . $row['taiban'] . "</td>     
                        <td>" . $row['tacgia2'] . "</td>                
                    </tr>";
                        }
                    } else {
                        echo "Không tìm thấy sách !! ";
                    }
                }
            }
            ?>
        </table>
</body>

</html>