<?php
                      // Kết nối cơ sở dữ liệu
                      $conn = mysqli_connect('localhost', 'root', '', 'truycap') or die ('Lỗi kết nối'); mysqli_set_charset($conn, "utf8");
                      if(isset($_POST['xoa'])){
                        $sql = "DELETE FROM lienket";
                        mysqli_query($conn,$sql);
                        };
                      // Dùng isset để kiểm tra Form

                     	$sql = "SELECT * FROM lienket";
                    	$result = mysqli_query($conn,$sql);
                    	$row = mysqli_fetch_array($result);
                    if ($row != 0) {
                    	echo "Bạn đã xem";
                    	}
                      mysqli_close($conn);
                      ?>