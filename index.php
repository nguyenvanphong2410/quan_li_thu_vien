<!DOCTYPE html>
<html>

<head>
	<title>Quản lí Sách</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<style>
		h1 {
			margin-top: 15px;

		}

		table {
			margin-top: -70px;
		}

		.btn-success {
			position: absolute;
			right: 215px;
			margin-top: 30px;
		}

		.pagination li a {
			color: green;
		}

		.page-item.active .page-link {
			background-color: green;
		}
	</style>
</head>

<body>
	<div class="container">
		<h1 class="text-center text-success">__Quản Lí Sách__</h1>
		<a href="them.php"><button class="btn-success">Thêm sách</button></a>
		<div>
			<form id="tkform" action="timkiem.php" method="get">
				<h6 style="color: blue;">Tìm kiếm sách: </h6>
				<input type="text" name="tk" placeholder="nhập tên sách để tìm ">
				<input class="btn-secondary" type="submit" name="tim" value="Tìm">
			</form>
		</div>
		<table class="table table-bordered table-hover text-center">
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
				<th>Xóa</th>
			</tr>

			<?php
			require_once("kiemtraconnect.php"); //Kiểm tra kết nối SQL

			//tìm số bản ghi
			$result = mysqli_query($connect, 'SELECT count(id) AS total FROM tbl_sach');
			$row = mysqli_fetch_assoc($result);
			$total_records = $row['total'];

			// trang hiện tại và tìm limit 
			$current_page = isset($_GET['page']) ? $_GET['page'] : 1; //Trang hiện tại
			$limit = 3;

			//Tổng số trang 
			$total_page = ceil($total_records / $limit);

			if ($current_page > $total_page) {
				$current_page = $total_page;
			}
			if ($current_page < 1) {
				$current_page = 1;
			}

			//tìm start
			$start = ($current_page - 1) * $limit; //trang hiện tại trừ 1 nhân limit

			//lấy ra danh sách khi đã có limit
			$result = mysqli_query($connect, "SELECT * FROM tbl_sach LIMIT $start,$limit");
			if (mysqli_num_rows($result) > 0) {
				while ($ds = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
			?><br>
					<tr>
						<td><?php echo ++$start; ?></td>
						<td><?php echo $ds['masach']; ?></td>
						<td><?php echo $ds['tensach']; ?></td>
						<td><?php echo $ds['nhaxb']; ?></td>
						<td><?php echo $ds['namxb']; ?></td>
						<td><?php echo $ds['chubien']; ?></td>
						<td><?php echo $ds['mota']; ?></td>
						<td><?php echo $ds['sotrang']; ?></td>
						<td><?php echo $ds['taiban']; ?></td>
						<td><?php echo $ds['tacgia2']; ?></td>
						<td>
							<button class="btn-danger"><a style="color: white;" id="xoa" href="xoa.php?id=<?php echo $ds['id']; ?>" onclick="return confirm('Bạn có muốn xóa không.')">Xóa</button>
						</td>
					</tr>
			<?php }
			} ?>

		</table>

		<ul class="pagination">
			<?php
			// Xử lí nút trang đầu
			if ($total_page > 1) {
				if ($current_page > 1) {
					echo '<li class="page-item"><a class="page-link" href="?page=' . ($current_page - 1) . '">Trang đầu</a></li>';
				}

				for ($i = 0; $i < $total_page; $i++) {
					if ($current_page == ($i + 1)) {
						echo '<li class="page-item active"><a class="page-link" href="#">' . ($i + 1) . '</a></li>';
					} else {
						echo '<li class="page-item"><a class="page-link" href="?page=' . ($i + 1) . '">' . ($i + 1) . '</a></li>';
					}
				}
				// Xử lí nút chuyển tiếp trang
				if ($current_page < $total_page) {
					echo '<li class="page-item"><a class="page-link" href="?page=' . ($current_page + 1) . '"> >>> </a></li>';
				}
			}
			?>

		</ul>
	</div>
</body>

</html>