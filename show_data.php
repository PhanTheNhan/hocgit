                <?php
                    // Kết nối cơ sở dữ liệu
                    $conn = mysqli_connect('localhost', 'root', '', 'truycap') or die ('Lỗi kết nối'); mysqli_set_charset($conn, "utf8");
                    $sql = "SELECT * FROM lienket";
                    $result = mysqli_query($conn,$sql);
                    while ($row = mysqli_fetch_array($result)){ 
                    	echo "<a href='".$row['url']."'>";                                 
                         echo "<img src='".$row['maten']."' width=100px />";
                     	echo "</a>";}
                    mysqli_close($conn);
                ?>