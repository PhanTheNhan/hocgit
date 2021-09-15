<?php
header('Content-Type: text/html; charset=utf-8');
// Kết nối cơ sở dữ liệu
$conn = mysqli_connect('localhost', 'root', '', 'truycap') or die ('Lỗi kết nối'); mysqli_set_charset($conn, "utf8");
// Dùng isset để kiểm tra Form
if(isset($_POST['tensanpham'])){
	$Tensanpham= $_POST['tensanpham'];
  $Tenhinhanh= $_POST['tenhinhanh'];
  $maso = $_POST['maso'];
  $url = $_POST['url'];
  // Kiểm tra username hoặc email có bị trùng hay không
	$sql = "SELECT * FROM lienket WHERE maso = '$maso'";
	// Thực thi câu truy vấn
	$result = mysqli_query($conn, $sql);

	// Nếu kết quả trả về lớn hơn 1 thì nghĩa là username hoặc email đã tồn tại trong CSDL
	if (mysqli_num_rows($result) > 0)
	{
	echo '<script language="javascript">alert("Bị trùng tên hoặc chưa nhập tên!"); window.location="register.php";</script>';

	// Dừng chương trình
	die ();
	}

  $sql = "INSERT INTO lienket (tensanpham, maten, maso, url) VALUES ('$Tensanpham','$Tenhinhanh','$maso','$url')";
  mysqli_query($conn,$sql);
  mysqli_close($conn);
};
?>