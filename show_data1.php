                <?php
                    // Kết nối cơ sở dữ liệu
                    $conn = mysqli_connect('localhost', 'root', '', 'truycap') or die ('Lỗi kết nối'); mysqli_set_charset($conn, "utf8");
                    $tulanh = "SELECT * FROM lienket WHERE tensanpham = 'Tủ lạnh'";
                    $result = mysqli_query($conn,$tulanh);
                    $row = mysqli_fetch_array($result);
                    if ($row != 0) {
                    	echo "<a href='".$row['url']."' style='padding:5px;text-decoration: none;color:#5D5C6A;'>";                                 
                         echo "<span style='padding:3px;border:1px solid #79A3D2;border-radius:5px;font-family: Arial;'>Tủ lạnh</span>";
                     	echo "</a>";}
                    $tivi = "SELECT * FROM lienket WHERE tensanpham = 'Tivi'";
                    $result1 = mysqli_query($conn,$tivi);
                    $row1 = mysqli_fetch_array($result1);
                    if ($row1 != 0) {
                        echo "<a href='".$row1['url']."' style='padding:5px;text-decoration: none;color:#5D5C6A;'>";                                 
                         echo "<span style='padding:3px;border:1px solid #79A3D2;border-radius:5px;font-family: Arial;'>Tivi</span>";
                        echo "</a>";}
                    mysqli_close($conn);
                ?>