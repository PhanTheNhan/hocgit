<!DOCTYPE html>
<html class="tranh"> 
        <head> 
        	    <meta charset="utf-8">
			    <meta http-equiv="X-UA-Compatible" content="IE=edge">
			    <meta name="viewport" content="width=device-width, initial-scale=1">
              <title>Cửa hàng Thế Nhân</title> <!--Tiêu đề của trang-->
              <link rel="stylesheet" type="text/css" href="css/chinh.css"> 
              <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
              <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"><!--Tạo menu bootstrap-->
              <link rel="stylesheet" type="text/css" href="css/all.css">
              <link rel="stylesheet" href="css/owl.carousel.css" />
              <link rel="stylesheet" href="css/owl.carousel.min.css" />
              <script src="js/jquery-3.6.0.min.js"></script>
              <script src = "js/owl.carousel.js " > </script>
              <script src = "js/owl.carousel.min.js " > </script>

        </head> 
        <body style="position: relative;"> 
<!--Header-->
                  <a href="" style="position: fixed;top: 200px;"><img style="width: 70%" src="hinhanh/nav17.png"></a>
                  <a href="" style="position: fixed;top: 200px;right: -25px;"><img style="width: 70%" src="hinhanh/nav18.png"></a>
            <header class="tranh">
<!--Phần Header1-->              
              <div id="header1" style="background-color: #004CC6; ">
              <div class="container-fluid" style="max-width: 1250px; min-width: 900px;position: relative;">
                <div class="row banner" >
                  <div id="trinhchieuheader" class="carousel slide" data-ride="carousel" style="width: 100%;">
                <div class="carousel-inner">
                <div class="carousel-item active">
                <a href="..."><img class="d-block w-100" style="width: 100%" src="hinhanh/header.png" ></a>
                </div>
                <div class="carousel-item">
                  <a href="..."><img class="d-block w-100" style="width: 100%" src="hinhanh/header1.png" ></a>
                </div>
                <div class="carousel-item">
                  <a href="..."><img class="d-block w-100" style="width: 100%" src="hinhanh/header2.png" ></a>
                </div>
                </div>
              </div>
              </div> 
                <a href="#trinhchieuheader" class="carousel-control-prev" role="button" data-slide="prev">
                <ion-icon name="chevron-back" style="font-size: 35px;position: absolute;top:5px; left: 5px;" data-bs-target="#carouselExampleControls" data-bs-slide="prev"></ion-icon>
                </a>
                <a href="#trinhchieuheader" class="carousel-control-next" role="button" data-slide="next">
                <ion-icon name="chevron-forward" style="font-size: 35px;position: absolute;top: 5px; right: 5px;" data-bs-target="#carouselExampleControls" data-bs-slide="next"></ion-icon>
                </a>              
            </div>
            </div>
<!--Phần Header2-->
            <div id="header2"  style="background-color: #7485DC;" >
              <div class="container-fluid" style="max-width: 1250px;">
                <div class="row">
                  <table style="background-color: #7485DC; ">
                    <tr>
                      <td width="10%" style="border-right: 1px solid #7270D3;">
                        <div >
                          <a href="http://localhost/Tongdienmayxanh/Dienmayxanh/trangchuchinh.php"><img src="hinhanh/header3.png"></a>
                        </div>
                      </td>
                      <td width="12%"><!--Có hiện modal-->
                        <div class="dieuhuong" id="thanhdieuhuong">
                          <button id="nut"  style="border:none; background-color:#7485DC; color: white; ">
                          <span style="font-size: 11px;">Xem giá, tồn kho tại:</span><br>
                            <table>
                              <tr>
                                <td width="80%"><b>Hồ Chí Minh</b></td>
                                <td width="20%">
                                  <div class="len">
                                  <ion-icon name="caret-up"></ion-icon>
                                </div>
                                </td>
                              </tr>
                            </table>
                            </button>                                              
                        <div class="modal" id="myModal" style="border-radius: 20px!important;"><!--Chú ý-->
                          <div class="modal-dialog">
                            <div  class="modal-content" style="height: 550px; max-width: 500px; margin: 0px;border-radius: 20px!important;">
                              <div class="modal-header" style="height: 70px;">
                                <table border="0" width="100%" style="height: 30px; margin-top: 0px; ">
                                  <tr>
                                    <td width="70%">
                                      <h1 class="modal-title" style="color: black; font-size: 18px; padding-left: 110px;"><b>Chọn địa chỉ nhận hàng</b></h1></td>
                                    <td width="30%"><button id="dong" style="font-size: 18px; color: black; background-color: white; float: right; border: 1px solid #F3CEDC; border-radius: 5px; padding: 8px; font-weight: 100;">&times; Đóng</button>
                                      <script type="text/javascript">
                                        $(document).ready(function(){
                                          $('#dong').click(function(){
                                            $('#anhien2').hide();
                                            $('#anhien').hide();
                                            $('#anhien1').hide();})
                                          })
                                      </script>
                                    </td>
                                  </tr>
                                </table>
                              </div>
                              <div class="modal-body" style="font-size: 15px; color: black;width: 90%; margin-left: 30px; position: relative;z-index: 0;">
                                <div style="text-align: left ;border: none!important; line-height: 25px; margin-bottom: 10px;">
                                  <p>Do ảnh hưởng của dịch, một số tỉnh/thành tạm ngưng phục vụ tại siêu thị, chỉ kinh doanh online.<a href="...." style="color:  #4E59E8;">Xem danh sách</a><br><b>Chọn đầy đủ địa chỉ nhận hàng</b> để biết chính xác thời gian giao.</p>
                                </div>
                                <div id="chon-modal-body">  
                                            <div id="chon-modal-body1" class="chon-modal-body" style="cursor: pointer;">
                                          <table>
                                            <tr>
                                              <td width="90%"><div id="nhapvao"></div></td>
                                              <td width="10%"><ion-icon name="caret-down"></ion-icon></td>
                                            </tr>
                                          </table>
                                           </div>
                                          <!--Chú thích Tỉnh-->
                                          <div  id="anhien" style="position: absolute; top:190px;width: 91%;background-color: white;z-index: 1;cursor: pointer;">
                                          <div class="hienthi" style=" height: 180px; border: 1px solid #F3CEDC; overflow: auto; border-radius: 5px; background-color: white;">                     
                                             <div style="border:1px solid #F3CEDC; border-radius: 5px;;margin: 10px;">
                                                <table width="100%">
                                                  <tr>
                                                    <td width="10%"><ion-icon style="color: black; font-size: 20px;" name="search-outline"></ion-icon></td>
                                                    <td width="90%" style="text-align: left;"><input type="text" name="" placeholder="Nhập Tỉnh/Thành để tìm..." style="border: none; outline: none"></td>
                                                  </tr>
                                                </table>                                                
                                              </div> 
                                              <div id="tinh"><?php require "tinh.php";?></div>
                                              </div></div>
                                              <script type="text/javascript" src="js/scriptinh.js"></script>
                                        <div id="chon-modal-body2" class="chon-modal-body" style="cursor: pointer;">
                                          <table> 
                                            <tr>
                                              <td width="90%"><div id="nhapvao1"></div></td>
                                              <td width="10%"><ion-icon name="caret-down"></ion-icon></td>
                                            </tr>
                                          </table>
                                        </div>
                                        <!--Chọn Quận-->
                                        <div  id="anhien1" style="position: absolute; top:260px;width: 91%;background-color: white;z-index: 1;cursor: pointer;">
                                          <div class="hienthi" style=" height: 180px; border: 1px solid #F3CEDC; overflow: auto; border-radius: 5px; background-color: white;">                     
                                             <div style="border:1px solid #F3CEDC; border-radius: 5px;;margin: 10px;">
                                                <table width="100%">
                                                  <tr>
                                                    <td width="10%"><ion-icon style="color: black; font-size: 20px;" name="search-outline"></ion-icon></td>
                                                    <td width="90%" style="text-align: left;"><input type="text" name="" placeholder="Nhập Quận/Huyện để tìm..." style="border: none; outline: none"></td>
                                                  </tr>
                                                </table>
                                              </div>
                                              <div id="huyen"><?php require "huyen.php";?></div>
                                          </div>
                                          </div>
                                        <script type="text/javascript" src="js/scripthuyen.js"></script>
                                        <div id="chon-modal-body3" class="chon-modal-body" style="cursor: pointer;">
                                          <table>
                                            <tr>
                                              <td width="90%"><div id="nhapvao2"></div></td>
                                              <td width="10%"><ion-icon name="caret-down"></ion-icon></td>
                                            </tr>
                                          </table>
                                        </div>
                                        <!--Chọn phường xã-->
                                        <div  id="anhien2" style="position: absolute; top:330px;width: 91%;background-color: white;z-index: 1;cursor: pointer;">
                                          <div class="hienthi" style=" height: 180px; border: 1px solid #F3CEDC; overflow: auto; border-radius: 5px; background-color: white;">                     
                                             <div style="border:1px solid #F3CEDC; border-radius: 5px;;margin: 10px;">
                                                <table width="100%">
                                                  <tr>
                                                    <td width="10%"><ion-icon style="color: black; font-size: 20px;" name="search-outline"></ion-icon></td>
                                                    <td width="90%" style="text-align: left;"><input type="text" name="" placeholder="Nhập Phường/Xã để tìm..." style="border: none; outline: none"></td>
                                                  </tr>
                                                </table>
                                              </div>
                                              <div id="xa"><?php require "xa.php";?></div>
                                          </div>
                                        </div>
                                        <script type="text/javascript" src="js/scriptxa.js">
                                        </script>
                                        <div class="chon-modal-body">
                                          <table>
                                            <tr>
                                              <td width="90%" colspan="2">
                                                <input style="width: 100%; border: none; outline: none;" type="text" name="" placeholder="Số nhà, tên đường..." >
                                              </td>
                                            </tr>
                                          </table>
                                        </div>
                                    <div class="btn btn-success" style="background-color: #E7B839!important; width:80%; border: none;">Xác nhận thành công</div>
                                </div>                 
                              </div>
                            </div>   
                          </div>
                        </div>
                      </td>                 
                      <td width="18%">
                        <div class="dieuhuong" style="border: 0px solid; border-radius: 5px; background-color: white;">
                          <table width="100%">
                            <tr>
                              <td width="80%"><input type="text" name="seach" class="seach" placeholder="Seach.."></td>
                              <td width="20%"><ion-icon style="color: black; font-size: 20px;" name="search-outline"></ion-icon></td>
                            </tr>
                          </table>
                        </div>
                      </td>
                      <td width="8%">
                        <div class="dieuhuong" style="border: 1px solid white; margin-left: 10px; border-radius: 5px;">
                          <a href="http://localhost/Tongdienmayxanh/Giohang/Giohang.php">
                            <div style="padding-top: 1px; padding-bottom: 1px;">
                              <table>
                                <tr>
                                  <td><ion-icon name="bag-handle"></ion-icon></td>
                                  <td style="padding-left: 3px;">Giỏ hàng</td>
                                </tr>
                              </table>
                            </div></a>
                        </div>
                      </td>
                      <td width="8%" style="border-right: 1px solid #7270D3;">
                        <div class="dieuhuong">
                          <a href="http://localhost/Tongdienmayxanh/Lichsumuahang/lichsumuahang.php" style="text-align: center;">Lịch sử<br>đơn hàng</a>
                        </div>
                      </td>
                      <td width="2%" style="position: relative;">
                        <div class="dieuhuong">
                          <div id="hieuunglantoa"></div>
                        </div>
                      </td>
                      <td width="18%" style="border-right: 1px solid #7270D3;">
                        <div class="dieuhuong">
                          <a href="..." style="color: yellow;">Viettel trả sau đến hạn thanh toán. Mua thẻ nạp ngay!</a>
                        </div>
                      </td>
                      <td width="8%" style="border-right: 1px solid #7270D3;">
                        <div class="dieuhuong">
                          <a href="...">Tư vấn<br>chọn mua</a>
                        </div>
                      </td>
                      <td width="8%" style="border-right: 1px solid #7270D3;">
                        <div class="dieuhuong">
                          <a href="...">Khuyến mãi</a>
                        </div>
                      </td>
                      <td width="8%">
                        <div class="dieuhuong">
                          <a href="...">Vào bếp</a>
                        </div>
                      </td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
<!--Header phần 3-->
              <div id="header3" style="background-color: ##FFFFFF; box-shadow: 0px/*top*/ 5px/*bottom*/ 5px/*Mờ*/ #D7D2D2;">
              <div class="container-fluid" style="max-width: 1250px;">
                <div class="row">      
                <!--Bảng 1 trong header3-->            
                  <table width="100%" style="font-size: 15px; ">
                    <tr style="box-shadow: -2px 0px 5px #D2BABA;">
                      <td width="20%" style="box-shadow: 2px 0px 5px #D2BABA;">
                        <div>
                          <table width="100%" style="height: 100%">
                            <tr >
                              <td width="40%" ><a href="..." style="text-decoration: none;color: black;"><b>Danh mục</b> <ion-icon name="caret-down"></ion-icon></a></td>
                              <td width="60%"><a href="..." style="text-decoration: none;"> Tất cả nhóm hàng</a></td>
                            </tr>
                          </table>
                        </div>
                      </td>
                      <td width="22%" >
                        <div style="border-right: 1px solid #B3AFEB; height: 25px;">
                        <a href="..." class="header3a" style="text-decoration: none;"> Tủ lạnh mua Online giảm đến 30%</a>
                        </div>
                      </td>
                      <td width="18%">
                        <div style="border-right: 1px solid #B3AFEB;height: 25px;">
                          <a href="..." class="header3a" style="text-decoration: none;"> Tủ đông giảm sâu đến 27%</a>
                        </div></td>
                      <td width="25%"><a href="..." class="header3a" style="text-decoration: none;"> Chỉ bán Online - gia dụng giảm đến 24%</a></td>
                      <td width="15%"></td>
                    </tr>
                  </table>
                </div>
                </div>
              </div>            
            </header>
<!--Nav-->
            <nav>
<!--Nav1-->
              <div id="nav1" style="margin-top: 10px;">
              <div class="container-fluid" style="max-width:1250px;">
                <div class="row">
                  <table width="100%" style="position: relative;z-index: 0;">
                    <tr>
                      <td width="22%" class="tranh">
                        <div style="width:100%;cursor: pointer;">
                          <table class="bangnav1" >
                            <tr class="bangnav11">
                               <td width="10%"><img src="hinhanh/tivi.png"></td>
                               <td width="85%"><a href="" style="text-decoration: none;">Tivi</a>, <a href="" style="text-decoration: none;"> Loa, Dàn Karaoke</a></td>
                               <td width="5%"><ion-icon name="chevron-forward-outline"></ion-icon></td>
                           </tr>
                            <tr class="bangnav12">
                                <td><img src="hinhanh/tulanh.png"></td>
                                <td><a href="" style="text-decoration: none;">Tủ lạnh</a> , <a href="" style="text-decoration: none;">Tủ đông</a> , <a href="" style="text-decoration: none;">Tủ mát</a></td>
                                <td><ion-icon name="chevron-forward-outline"></ion-icon></td></tr>
                            <tr class="bangnav13">
                                <td><img src="hinhanh/maygiat.png"></td>
                                <td><a href="" style="text-decoration: none;">Máy giặt</a> , <a href="" style="text-decoration: none;">Sấy quần áo</a></td>
                                <td><ion-icon name="chevron-forward-outline"></ion-icon></td></tr>
                            <tr class="bangnav14">
                                <td><img src="hinhanh/dieuhoa.png"></td>
                                <td><a href="" style="text-decoration: none;">Máy lạnh</a> , <a href="" style="text-decoration: none;">Quạt điều hòa</a></td>
                                <td><ion-icon name="chevron-forward-outline"></ion-icon></td></tr>
                            <tr class="bangnav15">
                                <td><img src="hinhanh/diengiadung.png"></td>
                                <td><a href="" style="text-decoration: none;">Điện gia dụng</a> , <a href="" style="text-decoration: none;">Dụng cụ</a></td>
                                <td><ion-icon name="chevron-forward-outline"></ion-icon></td></tr>
                            <tr class="bangnav16">
                                <td><img src="hinhanh/dobep.png"></td>
                                <td><a href="" style="text-decoration: none;">Đồ dùng nhà bếp</a> , <a href="" style="text-decoration: none;">Mẹ và bé</a> </td>
                                <td><ion-icon name="chevron-forward-outline"></ion-icon></td></tr>
                            <tr class="bangnav17">
                                <td><img src="hinhanh/mevabe.png"></td>
                                <td><a href="" style="text-decoration: none;">Lọc nước</a> ,<a href="" style="text-decoration: none;">Máy nước nóng</a></td>
                                <td><ion-icon name="chevron-forward-outline"></ion-icon></td></tr>
                            <tr class="bangnav18">
                                <td><img src="hinhanh/dienthoai.png"></td>
                                <td><a href="" style="text-decoration: none;">Điện thoại</a>,<a href="" style="text-decoration: none;">Laptop</a> ,<a href="" style="text-decoration: none;">Tablet</a></td>
                                <td><ion-icon name="chevron-forward-outline"></ion-icon></td></tr>
                            <tr class="bangnav19">
                                <td><img src="hinhanh/tainghe.png"></td>
                                <td><a href="" style="text-decoration: none;">Phụ kiện</a> ,<a href="" style="text-decoration: none;">Đồng hồ</a> ,<a href="" style="text-decoration: none;">Vali</a></td>
                                <td><ion-icon name="chevron-forward-outline"></ion-icon></td></tr>
                            <tr class="bangnav110">
                                <td><img src="hinhanh/maycu.png"></td>
                                <td><a href="" style="text-decoration: none;">Máy cũ, Trưng bày</a></td>
                                <td><ion-icon name="chevron-forward-outline"></ion-icon></td></tr>
                            <tr class="bangnav111">
                                <td><img src="hinhanh/xedap.png"></td>
                                <td><a href="..." style="text-decoration: none;"> Xe đạp</a> ,<a href="" style="text-decoration: none;">Phụ kiện xe đạp</a></td>
                                <td><ion-icon name="chevron-forward-outline"></ion-icon></td></tr>
                            <tr class="bangnav112">
                              <td><img src="hinhanh/dichvuhuuich.png"></td>
                              <td><a href="..." style="text-decoration: none;"> Dịch vụ hữu ích</a></td>
                              <td><ion-icon name="chevron-forward-outline"></ion-icon></td></tr>
                          </table>
                        </div>
                      </td>
                      <td width="58%"  align="center"  id="navgiua" style="">
                        <div style="width: 100%;height: 378px;" id="trinhchieu">                                                     
                              <div class="fadeOut  owl-carousel owl-theme owl-loaded" style="position: relative;overflow: hidden;height: 300px;width:720px;">
                              <div class="owl-stage-outer" >
                                  <div class="owl-stage">
                                      <div class="owl-item">
                                        <div class="item"><a href=""><img style="width:720px;height: 300px;" src="hinhanh/nav.png"></a></div></div>
                                      <div class="owl-item">
                                        <div class="item"><a href=""><img style="width:720px;height: 300px;" src="hinhanh/nav2.png"></a></div></div>
                                      <div class="owl-item">
                                        <div class="item"><a href=""><img style="width:720px;height: 300px;" src="hinhanh/nav3.png"></a></div></div>
                                      <div class="owl-item">
                                        <div class="item"><a href=""><img style="width:720px;height: 300px;" src="hinhanh/nav4.png"></a></div></div>
                                      <div class="owl-item">
                                        <div class="item"><a href=""><img style="width:720px;height: 300px" src="hinhanh/nav5.png"></a></div></div>
                                      <div class="owl-item">
                                        <div class="item"><a href=""><img style="width:720px;height: 300px;" src="hinhanh/nav6.png"></a></div></div>
                                      <div class="owl-item">
                                        <div class="item"><a href=""><img style="width:720px;height: 300px;" src="hinhanh/nav7.png"></a></div></div>
                                      <div class="owl-item">
                                        <div class="item"><a href=""><img style="width:720px;height: 300px;" src="hinhanh/nav8.png"></a></div></div>
                                      <div class="owl-item">
                                        <div class="item"><a href=""><img style="width:720px;height: 300px;" src="hinhanh/nav9.png"></a></div></div>
                                      <div class="owl-item">
                                        <div class="item"><a href=""><img style="width:720px;height: 300px;" src="hinhanh/nav10.png"></a></div></div>
                                      <div class="owl-item">
                                        <div class="item"><a href=""><img style="width:720px;height: 300px;" src="hinhanh/nenbanhkeo.png"></a></div></div>
                                  </div>
                              </div>
                              <div class="owl-nav" id="icon">
                                  <div class="owl-prev" style="position: absolute;top:120px;left: 0px; width: 35px; height: 60px;background-color: white;opacity: 0.7; border-radius: 0px 5px 5px 0px;">
                                    <ion-icon name="chevron-back" style="font-size: 58px;width: 33px;"></ion-icon>
                                  </div>
                                  <div class="owl-next" style="position: absolute;top:120px;right: 0px; width: 35px;background-color: white;opacity: 0.7;border-radius: 5px 0px 0px 5px;">
                                    <ion-icon name="chevron-forward" style="font-size: 58px;width: 33px;"></ion-icon>
                                    </div>
                                  </div>
                              </div> 
                              <div style="box-shadow: 2px 0px 3px #AEACED">
                             <div class="fadeOut1  owl-carousel owl-theme owl-loaded" style="overflow: hidden;box-shadow: -2px 2px 3px #AEACED;height: 78px;width: 720px;cursor: pointer;">
                              <div class="owl-stage-outer" style="">
                                  <div class="owl-stage" id="dongduoi">
                                      <div class="owl-item hiddennnn" id="so1">
                                        <div class="item trinhchieu2">Số1</div></div>
                                      <div class="owl-item" id="so2">
                                        <div class="item trinhchieu2">Số2</div></div>
                                      <div class="owl-item" id="so3">
                                        <div class="item trinhchieu2">Số3</div></div>
                                      <div class="owl-item" id="so4">
                                        <div class="item trinhchieu2">Số4</div></div>
                                      <div class="owl-item" id="so5">
                                        <div class="item trinhchieu2">Số5</div></div>
                                      <div class="owl-item" id="so6">
                                        <div class="item trinhchieu2">Số6</div></div>
                                      <div class="owl-item" id="so7">
                                        <div class="item trinhchieu2">Số7</div></div>
                                      <div class="owl-item" id="so8">
                                        <div class="item trinhchieu2">Số8</div></div>
                                      <div class="owl-item" id="so9">
                                        <div class="item trinhchieu2">Số9</div></div>
                                      <div class="owl-item" id="so10">
                                        <div class="item trinhchieu2">Số10</div></div>
                                      <div class="owl-item" id="so11">
                                        <div class="item trinhchieu2">Số11</div></div>
                                  </div></div>
                                </div>
                              </div>                                                      
                            </div>
                     </td>
                      <td width="20%" class="tranh">
                        <div class="bangnav3">
                          <table width="100%" style="height: 378px;background-color:white;border-radius: 10px;">
                            <tr style="height:90px">
                              <td><a href=""><img src="hinhanh/nav12.png"></a></td>
                              <td><a href=""><img src="hinhanh/nav13.png"></a></td>
                            </tr>
                            <tr style="">
                              <td><a href=""><img src="hinhanh/nav14.png"></a></td>
                              <td><a href=""><img src="hinhanh/nav15.png"></a></td>
                            </tr>
                            <tr style="height: 90px;">
                              <td colspan="2"><a href=""><img src="hinhanh/nav16.png"></a></td>
                            </tr>
                          </table>
                        </div>
                      <div class="bangnav11hover" style="width: 800px; height:400px;cursor: pointer; ">
                      <div style="margin-left: 20px;">
                      <table >
                        <tr style="height: 50px;">
                          <td width="30%">
                            <div style="width: 95%;border-bottom: 1px solid #4D79D2;">
                            <table width="100%">
                              <tr>
                                <td width="20%"><a href="" style="color: black;">TIVI</a> </td>
                                <td width="35%"><a href="" >Xem tất cả</a></td>
                                <td width="45%" style="position: relative;"><a href="" ><ion-icon style="color: #7681E9;position: absolute;top: 4px;" name="caret-forward"></ion-icon></a> </td>
                              </tr>
                            </table></div></td>
                          <td width="40%">
                            <div style="width: 95%;border-bottom: 1px solid #4D79D2;">
                          <table width="100%">
                              <tr>
                                <td width="50%"><a href="" style="color: black;" > LOA,ÂM THANH</a></td>
                                <td width="28%"><a href="">Xem tất cả</a></td>
                                <td width="22%" style="position: relative;"><a href="" ><ion-icon style="color: #7681E9;position: absolute;top: 4px;" name="caret-forward"></ion-icon></a> </td>
                              </tr>
                            </table></div></td>
                          <td width="30%" >
                            <div style="width: 95%;border-bottom: 1px solid #4D79D2;">
                            <table width="100%">
                            <tr>
                              <td>PHỤ KIỆN TIVI</td>
                            </tr>
                          </table>
                        </div>
                        </td>
                        </tr>
                        <tr >
                          <td><a href="" class="chinhsua">Tivi trả góp 0-1%</a></td>
                          <td><a href="" class="chinhsua">Loa kéo</a></td>
                          <td><a href="" class="chinhsua">Cáp HDMI, cáp Tivi</a></td>
                        </tr>
                        <tr >
                          <td><a href="" class="chinhsua">Sony</a></td>
                          <td><a href="" class="chinhsua">Loa Bluetooth</a></td>
                          <td><a href="" class="chinhsua">Khung treo Tivi</a></td>
                        </tr>
                        <tr >
                          <td><a href="" class="chinhsua">Samsung</a></td>
                          <td><a href="" class="chinhsua">Loa thanh(Soundbar)</a></td>
                          <td><a href="" class="chinhsua">Điều khiển TV</a></td>
                        </tr>
                        <tr >
                          <td><a href="" class="chinhsua">LG</a></td>
                          <td><a href="" class="chinhsua">Dàn âm thanh</a></td>
                          <td><a href="" class="chinhsua">Android TV Box</a></td>
                        </tr>
                        <tr >
                          <td><a href="" class="chinhsua">TCL</a></td>
                          <td><a href="" class="chinhsua">Dàn Karaoke,Amply</a></td>
                          <td></td>
                        </tr>
                        <tr >
                          <td><a href="" class="chinhsua">Từ 32-42 inch</a></td>
                          <td><a href="" class="chinhsua">Micro</a></td>
                          <td></td>
                        </tr>
                        <tr >
                          <td><a href="" class="chinhsua">Từ 43-55 inch</a></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr >
                          <td><a href="" class="chinhsua">Dưới 7 triệu</a></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr >
                          <td><a href="" class="chinhsua">Tivi cao cấp</a></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr >
                          <td><a href="" class="chinhsua">Máy chiếu</a></td>
                          <td></td>
                          <td></td>
                        </tr>
                      </table> 
                      </div>        
                      </div>
                      <div class="bangnav12hover">
                              dsvsdvsdvdsvdsvsdvsd            
                      </div>
                      <div class="bangnav13hover">
                              dsvsdvsdvdsvdsvsdvsd            
                      </div>
                      <div class="bangnav14hover">
                              dsvsdvsdvdsvdsvsdvsd            
                      </div>
                      <div class="bangnav15hover">
                              dsvsdvsdvdsvdsvsdvsd            
                      </div>
                      <div class="bangnav16hover">
                              dsvsdvsdvdsvdsvsdvsd            
                      </div>
                      <div class="bangnav17hover">
                              dsvsdvsdvdsvdsvsdvsd            
                      </div>
                      <div class="bangnav18hover">
                              dsvsdvsdvdsvdsvsdvsd            
                      </div>
                      <div class="bangnav19hover">
                              dsvsdvsdvdsvdsvsdvsd            
                      </div>
                      <div class="bangnav110hover">
                              dsvsdvsdvdsvdsvsdvsd            
                      </div>
                      <div class="bangnav111hover">
                              dsvsdvsdvdsvdsvsdvsd            
                      </div>
                      <div class="bangnav112hover" >
                              dsvsdvsdvdsvdsvsdvsd            
                      </div>
                      </td>
                    </tr>
                  </table>
                </div>
                </div>
              </div>
<!--Nav 2-->
            <div class="container-fluid" id="nav2" style="max-width: 1250px;">
              <div class="row" style="margin-top:15px;margin-bottom: 15px;">
              <div style="padding-left: 0px;">
              <a href=""><img style="width: 1250px;height: 60px;" src="hinhanh/nav19.png"></a>
            </div>
            </div>
            </div>
<!--Nav 3-->
            <div class="container-fluid" id="nav3"  style="max-width: 1250px;">
              <div class="row" style="">
                <div style="width: 1250px;height: 600px;background-color: #4D90E0;border-radius:10px;position: relative;z-index: 0;">
                  <div style="height: 50px;font-size: 30px;font-weight: bold;color: white;font-family: Arial;background-color:#4D90E0 ">Săn Sale Online Mỗi Ngày</div>
                  <div style="margin-left: -17px;width: 1250px;" id="trinhchieu1">
                  <div class="chieusp  owl-carousel owl-theme owl-loaded" style="overflow: hidden;width: 1220px;z-index: 1;margin-left: 17px;" >
                  <div class="owl-stage-outer" style="">
                  <div class="owl-stage">
                    <div class="owl-item sanpham" id="hang1">
                      <div class="item" style="position: relative;">
                        <form method="post" id="nhap">
                          <input type="text" id="tensanpham" name="tensanpham" value="Tủ lạnh" style="display: none;">
                          <input type="text" id="tenhinhanh" name="tenhinhanh" value="hinhanh/tivi1.png" style="display: none;">
                          <input type="text" id="maso" name="maso" value="1" style="display: none;">
                          <input type="text" id="url" name="url" value="http://localhost/Dienmayxanh/tulanh.php" style="display: none;">
                        <a href="" style="text-decoration: none;color: black;" id="click1">                     
                        <div  style="height: 300px;position: relative;">
                          <img  class="hieuung" style="position: absolute;" src="hinhanh/nav20.png">
                        </div>
                        <div style="margin-left: 8px;">
                          <img style="width: 50%;margin-top: 5px;margin-bottom: 5px;transition: all 3s;" src="hinhanh/nav26.png">
                          <div style="font-size: 15px;line-height: 5px;">
                          <p class="tieude"> SamSung Inventer 208 lít</p>
                          <p>Online Giá Rẻ</p>
                           <p><del>7.590.000đ</del> -23%</p>
                           <p><b>5.800.000đ</b></p>
                          <p>Giảm thêm 800.000đ</p>
                          <p><ion-icon name="star" style="color: #F7AF25;"></ion-icon> <ion-icon name="star" style="color: #F7AF25;"></ion-icon> <ion-icon name="star" style="color: #F7AF25;"></ion-icon> <ion-icon name="star" style="color: #F7AF25;"></ion-icon> <ion-icon name="star" style="color: #EDD6D6"></ion-icon></p></div>
                        </div>
                      </a>

                      </form>
                      </div>
                    </div>
                    <div class="owl-item sanpham" id="hang2">
                      <div class="item" style="position: relative;">
                        <div style="position: absolute;top: 5px;left: 10px;font-size: 13px;border-radius: 2px;background-color: #FABDDB;color: red;padding:2px;">Bán chạy</div>
                        <form method="post" id="nhap">
                          <input type="text" id="tensanpham1" name="tensanpham1" value="Tivi" style="display: none;">
                          <input type="text" id="tenhinhanh1" name="tenhinhanh1" value="hinhanh/tivi1.png" style="display: none;">
                          <input type="text" id="maso1" name="maso1" value="2" style="display: none;">
                          <input type="text" id="url1" name="url1" value="http://localhost/Dienmayxanh/tulanh.php" style="display: none;">
                        <a href="" style="text-decoration: none;color: black;" id="click2">
                        <div  style="height: 300px;position: relative;">
                          <img  class="hieuung1" style="position: absolute;" src="hinhanh/nav21.png">
                        </div>
                        <div style="margin-left: 8px;">
                          <img style="width: 50%;margin-top: 5px;margin-bottom: 5px;" src="hinhanh/nav26.png">
                          <div style="font-size: 15px;line-height: 5px;">
                          <p class="tieude1"> SamSung Inventer 208 lít</p>
                          <p>Online Giá Rẻ</p>
                           <p><del>7.590.000đ</del> -23%</p>
                           <p><b>5.800.000đ</b></p>
                          <p>Giảm thêm 800.000đ</p>
                          <p><ion-icon name="star" style="color: #F7AF25;"></ion-icon> <ion-icon name="star" style="color: #F7AF25;"></ion-icon> <ion-icon name="star" style="color: #F7AF25;"></ion-icon> <ion-icon name="star" style="color: #F7AF25;"></ion-icon> <ion-icon name="star" style="color: #EDD6D6"></ion-icon></p></div>
                        </div></a></form>
                      </div>
                    </div>
                    <div class="owl-item sanpham" id="hang3">
                      <div class="item">
                        <form method="post" id="nhap">
                          <input type="text" id="tensanpham2" name="tensanpham2" value="Tủ lạnh" style="display: none;">
                          <input type="text" id="tenhinhanh2" name="tenhinhanh2" value="hinhanh/tivi1.png" style="display: none;">
                          <input type="text" id="maso2" name="maso2" value="3" style="display: none;">
                          <input type="text" id="url2" name="url2" value="https://www.youtube.com/watch?v=qWG5bfnok1Y" style="display: none;">
                        <a href="" style="text-decoration: none;color: black;" id="click3">
                        <div  style="height: 300px;position: relative;">
                          <img  class="hieuung2" style="position: absolute;" src="hinhanh/nav22.png">
                        </div>
                        <div style="margin-left: 8px;">
                          <img style="width: 50%;margin-top: 5px;margin-bottom: 5px;transition: all 3s;" src="hinhanh/nav26.png">
                          <div style="font-size: 15px;line-height: 5px;">
                          <p class="tieude2"> SamSung Inventer 208 lít</p>
                          <p>Online Giá Rẻ</p>
                           <p><del>7.590.000đ</del> -23%</p>
                           <p><b>5.800.000đ</b></p>
                          <p>Giảm thêm 800.000đ</p>
                          <p><ion-icon name="star" style="color: #F7AF25;"></ion-icon> <ion-icon name="star" style="color: #F7AF25;"></ion-icon> <ion-icon name="star" style="color: #F7AF25;"></ion-icon> <ion-icon name="star" style="color: #F7AF25;"></ion-icon> <ion-icon name="star" style="color: #EDD6D6"></ion-icon></p></div>
                        </div></a></form>
                      </div>
                    </div>
                    <div class="owl-item sanpham" id="hang4">
                      <div class="item">
                        <form method="post" id="nhap">
                          <input type="text" id="tensanpham2" name="tensanpham2" value="Tủ lạnh" style="display: none;">
                          <input type="text" id="tenhinhanh2" name="tenhinhanh2" value="hinhanh/tivi1.png" style="display: none;">
                          <input type="text" id="maso2" name="maso2" value="3" style="display: none;">
                          <input type="text" id="url2" name="url2" value="https://www.youtube.com/watch?v=qWG5bfnok1Y" style="display: none;">
                        <a href="" style="text-decoration: none;color: black;" id="click3">
                        <div  style="height: 300px;position: relative;">
                          <img  class="hieuung3" style="position: absolute;" src="hinhanh/nav23.png">
                        </div>
                        <div style="margin-left: 8px;">
                          <img style="width: 50%;margin-top: 5px;margin-bottom: 5px;transition: all 3s;" src="hinhanh/nav26.png">
                          <div style="font-size: 15px;line-height: 5px;">
                          <p class="tieude3"> SamSung Inventer 208 lít</p>
                          <p>Online Giá Rẻ</p>
                           <p><del>7.590.000đ</del> -23%</p>
                           <p><b>5.800.000đ</b></p>
                          <p>Giảm thêm 800.000đ</p>
                          <p><ion-icon name="star" style="color: #F7AF25;"></ion-icon> <ion-icon name="star" style="color: #F7AF25;"></ion-icon> <ion-icon name="star" style="color: #F7AF25;"></ion-icon> <ion-icon name="star" style="color: #F7AF25;"></ion-icon> <ion-icon name="star" style="color: #EDD6D6"></ion-icon></p></div>
                        </div></a>
                      </form></div>
                    </div>
                    <div class="owl-item sanpham" id="hang5">
                      <div class="item"><a href="" style="text-decoration: none;color: black;">
                        <div  style="height: 300px;position: relative;">
                          <img  class="hieuung4" style="position: absolute;" src="hinhanh/nav24.png">
                        </div>
                        <div style="margin-left: 8px;">
                          <img style="width: 50%;margin-top: 5px;margin-bottom: 5px;transition: all 3s;" src="hinhanh/nav26.png">
                          <div style="font-size: 15px;line-height: 5px;">
                          <p class="tieude4"> SamSung Inventer 208 lít</p>
                          <p>Online Giá Rẻ</p>
                           <p><del>7.590.000đ</del> -23%</p>
                           <p><b>5.800.000đ</b></p>
                          <p>Giảm thêm 800.000đ</p>
                          <p><ion-icon name="star" style="color: #F7AF25;"></ion-icon> <ion-icon name="star" style="color: #F7AF25;"></ion-icon> <ion-icon name="star" style="color: #F7AF25;"></ion-icon> <ion-icon name="star" style="color: #F7AF25;"></ion-icon> <ion-icon name="star" style="color: #EDD6D6"></ion-icon></p></div>
                        </div></a></div>
                    </div>
                    <div class="owl-item sanpham" id="hang6">
                      <div class="item"><a href="" style="text-decoration: none;color: black;">
                        <div  style="height: 300px;position: relative;">
                          <img  class="hieuung5" style="position: absolute;" src="hinhanh/nav25.png">
                        </div>
                        <div style="margin-left: 8px;">
                          <img style="width: 50%;margin-top: 5px;margin-bottom: 5px;transition: all 3s;" src="hinhanh/nav26.png">
                          <div style="font-size: 15px;line-height: 5px;">
                          <p class="tieude5"> SamSung Inventer 208 lít</p>
                          <p>Online Giá Rẻ</p>
                           <p><del>7.590.000đ</del> -23%</p>
                           <p><b>5.800.000đ</b></p>
                          <p>Giảm thêm 800.000đ</p>
                          <p><ion-icon name="star" style="color: #F7AF25;"></ion-icon> <ion-icon name="star" style="color: #F7AF25;"></ion-icon> <ion-icon name="star" style="color: #F7AF25;"></ion-icon> <ion-icon name="star" style="color: #F7AF25;"></ion-icon> <ion-icon name="star" style="color: #EDD6D6"></ion-icon></p></div>
                        </div></a></div>
                    </div>
                    <div class="owl-item sanpham" id="hang7">
                      <div class="item"><a href="" style="text-decoration: none;color: black;">
                        <div  style="height: 300px;position: relative;">
                          <img  class="hieuung6" style="position: absolute;" src="hinhanh/nav28.png">
                        </div>
                        <div style="margin-left: 8px;">
                          <img style="width: 50%;margin-top: 5px;margin-bottom: 5px;transition: all 3s;" src="hinhanh/nav26.png">
                          <div style="font-size: 15px;line-height: 5px;">
                          <p class="tieude6"> SamSung Inventer 208 lít</p>
                          <p>Online Giá Rẻ</p>
                           <p><del>7.590.000đ</del> -23%</p>
                           <p><b>5.800.000đ</b></p>
                          <p>Giảm thêm 800.000đ</p>
                          <p><ion-icon name="star" style="color: #F7AF25;"></ion-icon> <ion-icon name="star" style="color: #F7AF25;"></ion-icon> <ion-icon name="star" style="color: #F7AF25;"></ion-icon> <ion-icon name="star" style="color: #F7AF25;"></ion-icon> <ion-icon name="star" style="color: #EDD6D6"></ion-icon></p></div>
                        </div></a></div>
                    </div>
                    <div class="owl-item sanpham" id="hang8">
                      <div class="item"><a href="" style="text-decoration: none;color: black;">
                        <div  style="height: 300px;position: relative;">
                          <img  class="hieuung7" style="position: absolute;" src="hinhanh/nav29.png">
                        </div>
                        <div style="margin-left: 8px;">
                          <img style="width: 50%;margin-top: 5px;margin-bottom: 5px;transition: all 3s;" src="hinhanh/nav26.png">
                          <div style="font-size: 15px;line-height: 5px;">
                          <p class="tieude7"> SamSung Inventer 208 lít</p>
                          <p>Online Giá Rẻ</p>
                           <p><del>7.590.000đ</del> -23%</p>
                           <p><b>5.800.000đ</b></p>
                          <p>Giảm thêm 800.000đ</p>
                          <p><ion-icon name="star" style="color: #F7AF25;"></ion-icon> <ion-icon name="star" style="color: #F7AF25;"></ion-icon> <ion-icon name="star" style="color: #F7AF25;"></ion-icon> <ion-icon name="star" style="color: #F7AF25;"></ion-icon> <ion-icon name="star" style="color: #EDD6D6"></ion-icon></p></div>
                        </div></a></div>
                    </div>
                    <div class="owl-item sanpham" id="hang9">
                      <div class="item"><a href="" style="text-decoration: none;color: black;">
                        <div  style="height: 300px;position: relative;">
                          <img  class="hieuung8" style="position: absolute;" src="hinhanh/nav30.png">
                        </div>
                        <div style="margin-left: 8px;">
                          <img style="width: 50%;margin-top: 5px;margin-bottom: 5px;transition: all 3s;" src="hinhanh/nav26.png">
                          <div style="font-size: 15px;line-height: 5px;">
                          <p class="tieude8"> SamSung Inventer 208 lít</p>
                          <p>Online Giá Rẻ</p>
                           <p><del>7.590.000đ</del> -23%</p>
                           <p><b>5.800.000đ</b></p>
                          <p>Giảm thêm 800.000đ</p>
                          <p><ion-icon name="star" style="color: #F7AF25;"></ion-icon> <ion-icon name="star" style="color: #F7AF25;"></ion-icon> <ion-icon name="star" style="color: #F7AF25;"></ion-icon> <ion-icon name="star" style="color: #F7AF25;"></ion-icon> <ion-icon name="star" style="color: #EDD6D6"></ion-icon></p></div>
                        </div></a></div>
                    </div>
                    <div class="owl-item sanpham" id="hang10">
                      <div class="item"><a href="" style="text-decoration: none;color: black;">
                        <div  style="height: 300px;position: relative;">
                          <img  class="hieuung9" style="position: absolute;" src="hinhanh/nav31.png">
                        </div>
                        <div style="margin-left: 8px;">
                          <img style="width: 50%;margin-top: 5px;margin-bottom: 5px;transition: all 3s;" src="hinhanh/nav26.png">
                          <div style="font-size: 15px;line-height: 5px;">
                          <p class="tieude9"> SamSung Inventer 208 lít</p>
                          <p>Online Giá Rẻ</p>
                           <p><del>7.590.000đ</del> -23%</p>
                           <p><b>5.800.000đ</b></p>
                          <p>Giảm thêm 800.000đ</p>
                          <p><ion-icon name="star" style="color: #F7AF25;"></ion-icon> <ion-icon name="star" style="color: #F7AF25;"></ion-icon> <ion-icon name="star" style="color: #F7AF25;"></ion-icon> <ion-icon name="star" style="color: #F7AF25;"></ion-icon> <ion-icon name="star" style="color: #EDD6D6"></ion-icon></p></div>
                        </div></a></div>
                    </div>
                    <div class="owl-item sanpham" id="hang11">
                      <div class="item"><a href="" style="text-decoration: none;color: black;">
                        <div  style="height: 300px;position: relative;">
                          <img  class="hieuung10" style="position: absolute;" src="hinhanh/nav32.png">
                        </div>
                        <div style="margin-left: 8px;">
                          <img style="width: 50%;margin-top: 5px;margin-bottom: 5px;transition: all 3s;" src="hinhanh/nav26.png">
                          <div style="font-size: 15px;line-height: 5px;">
                          <p class="tieude10"> SamSung Inventer 208 lít</p>
                          <p>Online Giá Rẻ</p>
                           <p><del>7.590.000đ</del> -23%</p>
                           <p><b>5.800.000đ</b></p>
                          <p>Giảm thêm 800.000đ</p>
                          <p><ion-icon name="star" style="color: #F7AF25;"></ion-icon> <ion-icon name="star" style="color: #F7AF25;"></ion-icon> <ion-icon name="star" style="color: #F7AF25;"></ion-icon> <ion-icon name="star" style="color: #F7AF25;"></ion-icon> <ion-icon name="star" style="color: #EDD6D6"></ion-icon></p></div>
                        </div></a></div>
                    </div>
                    <div class="owl-item sanpham" id="hang12">
                      <div class="item"><a href="" style="text-decoration: none;color: black;">
                        <div  style="height: 300px;position: relative;">
                          <img  class="hieuung11" style="position: absolute;" src="hinhanh/nav33.png">
                        </div>
                        <div style="margin-left: 8px;">
                          <img style="width: 50%;margin-top: 5px;margin-bottom: 5px;transition: all 3s;" src="hinhanh/nav26.png">
                          <div style="font-size: 15px;line-height: 5px;">
                          <p class="tieude11"> SamSung Inventer 208 lít</p>
                          <p>Online Giá Rẻ</p>
                           <p><del>7.590.000đ</del> -23%</p>
                           <p><b>5.800.000đ</b></p>
                          <p>Giảm thêm 800.000đ</p>
                          <p><ion-icon name="star" style="color: #F7AF25;"></ion-icon> <ion-icon name="star" style="color: #F7AF25;"></ion-icon> <ion-icon name="star" style="color: #F7AF25;"></ion-icon> <ion-icon name="star" style="color: #F7AF25;"></ion-icon> <ion-icon name="star" style="color: #EDD6D6"></ion-icon></p></div>
                        </div></a></div>
                    </div>
                    <div class="owl-item sanpham" id="hang13">
                      <div class="item"><a href="" style="text-decoration: none;color: black;">
                        <div  style="height: 300px;position: relative;">
                          <img  class="hieuung12" style="position: absolute;" src="hinhanh/nav34.png">
                        </div>
                        <div style="margin-left: 8px;">
                          <img style="width: 50%;margin-top: 5px;margin-bottom: 5px;transition: all 3s;" src="hinhanh/nav26.png">
                          <div style="font-size: 15px;line-height: 5px;">
                          <p class="tieude12"> SamSung Inventer 208 lít</p>
                          <p>Online Giá Rẻ</p>
                           <p><del>7.590.000đ</del> -23%</p>
                           <p><b>5.800.000đ</b></p>
                          <p>Giảm thêm 800.000đ</p>
                          <p><ion-icon name="star" style="color: #F7AF25;"></ion-icon> <ion-icon name="star" style="color: #F7AF25;"></ion-icon> <ion-icon name="star" style="color: #F7AF25;"></ion-icon> <ion-icon name="star" style="color: #F7AF25;"></ion-icon> <ion-icon name="star" style="color: #EDD6D6"></ion-icon></p></div>
                        </div></a></div>
                    </div>
                    <div class="owl-item sanpham" id="hang14">
                      <div class="item"><a href="" style="text-decoration: none;color: black;">
                        <div  style="height: 300px;position: relative;">
                          <img  class="hieuung13" style="position: absolute;" src="hinhanh/nav35.png">
                        </div>
                        <div style="margin-left: 8px;">
                          <img style="width: 50%;margin-top: 5px;margin-bottom: 5px;transition: all 3s;" src="hinhanh/nav26.png">
                          <div style="font-size: 15px;line-height: 5px;">
                          <p class="tieude13"> SamSung Inventer 208 lít</p>
                          <p>Online Giá Rẻ</p>
                           <p><del>7.590.000đ</del> -23%</p>
                           <p><b>5.800.000đ</b></p>
                          <p>Giảm thêm 800.000đ</p>
                          <p><ion-icon name="star" style="color: #F7AF25;"></ion-icon> <ion-icon name="star" style="color: #F7AF25;"></ion-icon> <ion-icon name="star" style="color: #F7AF25;"></ion-icon> <ion-icon name="star" style="color: #F7AF25;"></ion-icon> <ion-icon name="star" style="color: #EDD6D6"></ion-icon></p></div>
                        </div></a></div>
                    </div>
                    <div class="owl-item sanpham" id="hang15">
                      <div class="item"><a href="" style="text-decoration: none;color: black;">
                        <div  style="height: 300px;position: relative;">
                          <img  class="hieuung14" style="position: absolute;" src="hinhanh/nav36.png">
                        </div>
                        <div style="margin-left: 8px;">
                          <img style="width: 50%;margin-top: 5px;margin-bottom: 5px;transition: all 3s;" src="hinhanh/nav26.png">
                          <div style="font-size: 15px;line-height: 5px;">
                          <p class="tieude14"> SamSung Inventer 208 lít</p>
                          <p>Online Giá Rẻ</p>
                           <p><del>7.590.000đ</del> -23%</p>
                           <p><b>5.800.000đ</b></p>
                          <p>Giảm thêm 800.000đ</p>
                          <p><ion-icon name="star" style="color: #F7AF25;"></ion-icon> <ion-icon name="star" style="color: #F7AF25;"></ion-icon> <ion-icon name="star" style="color: #F7AF25;"></ion-icon> <ion-icon name="star" style="color: #F7AF25;"></ion-icon> <ion-icon name="star" style="color: #EDD6D6"></ion-icon></p></div>
                        </div></a></div>
                    </div>
                    <div class="owl-item sanpham" id="hang16">
                      <div class="item"><a href="" style="text-decoration: none;color: black;">
                        <div  style="height: 300px;position: relative;">
                          <img  class="hieuung15" style="position: absolute;" src="hinhanh/nav37.png">
                        </div>
                        <div style="margin-left: 8px;">
                          <img style="width: 50%;margin-top: 5px;margin-bottom: 5px;transition: all 3s;" src="hinhanh/nav26.png">
                          <div style="font-size: 15px;line-height: 5px;">
                          <p class="tieude15"> SamSung Inventer 208 lít</p>
                          <p>Online Giá Rẻ</p>
                           <p><del>7.590.000đ</del> -23%</p>
                           <p><b>5.800.000đ</b></p>
                          <p>Giảm thêm 800.000đ</p>
                          <p><ion-icon name="star" style="color: #F7AF25;"></ion-icon> <ion-icon name="star" style="color: #F7AF25;"></ion-icon> <ion-icon name="star" style="color: #F7AF25;"></ion-icon> <ion-icon name="star" style="color: #F7AF25;"></ion-icon> <ion-icon name="star" style="color: #EDD6D6"></ion-icon></p></div>
                        </div></a></div>
                    </div>
                </div></div></div>
                <div class="owl-nav" id="icon1" style="cursor: pointer;">
                    <div class="owl-prev1" style="position: absolute;top:250px;left: 0px; width: 35px; height: 60px;background-color: white;opacity: 0.9; border-radius: 0px 5px 5px 0px;z-index: 2;">
                    <ion-icon name="chevron-back" style="font-size: 58px;width: 33px;"></ion-icon>
                    </div>
                    <div class="owl-next1" style="position: absolute;top:250px;right: 0px; width: 35px;background-color: white;opacity: 0.9;border-radius: 5px 0px 0px 5px;z-index: 2;">
                    <ion-icon name="chevron-forward" style="font-size: 58px;width: 33px;"></ion-icon>
                    </div>
                  </div>
              </div>
              </div>
            </div></div>  
            <div class="container-fluid" id="nav4"  style="max-width: 1250px;margin-top: 20px;">
              <div class="row" style="">
                <form method="post">
                  <div>
                    <table >
                      <tr>
                        <td width="150px" style='font-size:25px;font-family: Arial;'><?php require 'delete.php' ?></td>
                        <td ><?php require 'show_data1.php' ?></td>
                        <td><?php require 'delete1.php' ?></td>
                      </tr>
                    </table>                    
                  </div>
                  <div>
                    <?php require 'show_data.php' ?>
                  </div>
                </form>
              </div>
              </div>       
            </nav>
<!--Footer-->
            <footer>
              <div id="footer1" style="border-bottom: 1px solid #A8AFF4;">
              <div class="container-fluid" style="max-width: 1250px;">
                <div class="row">
                  <div style="margin-top: 15px;padding-bottom: 5px;"><img style="margin-left: -16px;width: 1250px;" src="hinhanh/nav27.png"></div>
                </div>
              </div></div>
              <div class="footer2" >
                <div class="container-fluid" style="max-width: 1250px;">
                  <div class="row">
                    <table>
                      <tr>
                        <td width="27%">
                          <div style="font-size: 15px;padding-top: 15px; padding-left: 10px;" >
                            <div style="padding-bottom: 6px;"><a href="" class="doimau">DV vệ sinh máy lạnh, máy giặt, quạt</a></div>
                            <div style="padding-bottom: 6px;"><a href="" class="doimau"><b>Dịch vụ Sửa Điện - Nước</b>
                              <span class="badge bg-secondary" style="font-size: 15px;background-color: red!important;color: yellow">Mới</span><br>
                              Dành cho Gia đình, Doanh nghiệp ở TP.HCM</a></div>
                            <div style="padding-bottom: 6px;"><a href="" class="doimau">Lịch sử mua hàng</a></div>
                            <div style="padding-bottom: 6px;"><a href="" class="doimau">Cộng tác bán hàng cùng TGDĐ</a></div>
                            <div style="padding-bottom: 6px;"><a href="" class="doimau">Tìm hiểu về mua trả góp</a></div>
                            <div >
                              <table>
                                <tr class="xemthem" style="cursor: pointer;">
                                  <td>Xem thêm</td>
                                  <td><ion-icon name="caret-down"></ion-icon></td>
                                </tr>
                              </table>
                            </div>
                            <div class="xemthem1" style="padding-bottom: 6px;"><a href="" class="doimau">Chính sách bảo hành</a></div>
                            <div class="xemthem1" style="padding-bottom: 6px;"><a href="" class="doimau">Chính sách đổi trả</a></div>
                            <div class="xemthem1" style="padding-bottom: 6px;"><a href="" class="doimau">Giao hàng, lắp đặt</a></div>
                            <div class="xemthem1" style="padding-bottom: 6px;"><a href="" class="doimau">Hướng dẫn mua online</a></div>
                            <div class="xemthem1" style="padding-bottom: 6px;"><a href="" class="doimau">Bán hàng doanh nghiệp</a></div>
                            <div class="xemthem1" style="padding-bottom: 6px;"><a href="" class="doimau">Phiếu mua hàng</a></div>
                            <div class="xemthem1" style="padding-bottom: 6px;"><a href="" class="doimau">In hóa đơn điện tử</a></div>
                            <div class="xemthem1" style="padding-bottom: 6px;"><a href="" class="doimau">Quy chế hoạt động</a></div>
                            <div class="xemthem1" style="padding-bottom: 6px;"><a href="" class="doimau">Nội quy cửa hàng</a></div>
                            <div class="xemthem1" style="padding-bottom: 6px;"><a href="" class="doimau">Chất lượng phục vụ</a></div>
                            <div class="xemthem1" style="padding-bottom: 6px;"><a href="" class="doimau">Cảnh báo giả mạo</a></div>
                            <div class="xemthem1" style="padding-bottom: 6px;"><a href="" class="doimau">Chính sách khui hộp sản phẩm Apple</a></div>
                          </div>
                        </td>
                        <td width="25%" style="vertical-align:top; ">
                          <div  style="font-size: 15px;height: 100px;padding-top: 15px; padding-left: 10px;">
                            <div style="padding-bottom: 6px;"><a href="" class="doimau">Giới thiệu công ty (MWG.vn)</a></div>
                            <div style="padding-bottom: 6px;"><a href="" class="doimau">Tuyển dụng</a></div>
                            <div style="padding-bottom: 6px;"><a href="" class="doimau">Gửi góp ý, khiếu nại</a></div>
                            <div style="padding-bottom: 6px;"><a href="" class="doimau">Tìm siêu thị (1441 shop)</a></div>
                            <div style="padding-bottom: 6px;"><a href="" class="doimau">Xem bản mobile</a></div>
                          </div>
                        </td>
                        <td width="25%" style="vertical-align:top; ">
                          <div style="font-size: 15px;height: 100px;padding-top: 15px; padding-left: 10px;">
                            <div style="padding-bottom: 6px;"><b>Tổng đài hỗ trợ</b> (Miễn phí gọi)</div>
                            <table>
                              <tr style="height: 28px;">
                                <td width="30%">Gọi mua:</td>
                                <td width="70%"><a href="" style="text-decoration:none;font-weight: bold; ">1800.1061</a> (7:30 - 22:00)</td>
                              </tr>
                              <tr style="height: 28px;">
                                <td>Kỹ thuật:</td>
                                <td><a href="" style="text-decoration:none;font-weight: bold; ">1800.1061</a> (7:30 - 22:00)</td>
                              </tr>
                              <tr style="height: 28px;">
                                <td>Khiếu nại: </td>
                                <td><a href="" style="text-decoration: none;font-weight: bold;">1800.1061</a> (7:30 - 22:00)</td>
                              </tr>
                              <tr style="height: 28px;">
                                <td>Bảo hành:</td>
                                <td><a href="" style="text-decoration:none;font-weight: bold; ">1800.1061</a> (7:30 - 22:00)</td>
                              </tr>
                            </table>
                          </div>
                        </td>
                        <td width="23%" style="vertical-align:top; ">
                          <div style="font-size: 15px;height: 100px;padding-top: 15px; padding-left: 10px;">
                          <div>
                            <table>
                              <tr style="cursor: pointer;">
                                <td width="10%"><a href="" style="text-decoration: none;"><ion-icon name="logo-facebook" style="font-size: 20px;color: #4747D4;"></ion-icon></a></td>
                                <td width="40%"><a href="" style="text-decoration: none;">3.5Tr Fan</a></td>
                                <td width="10%"><a href="" style="text-decoration: none;"><ion-icon name="logo-youtube" style="font-size: 20px;color: red;"></ion-icon></a></td>
                                <td width="40%"><a href="" style="text-decoration: none;">767k Đăng Ký</a></td>
                              </tr>
                            </table>  </div></div>
                        </td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
              <div class="footer3" style="background-color: #F1F1F1;height: 60px;">
                <div  class="container-fluid" style="max-width: 1250px;">
                  <div class="row" style="font-size: 14px; padding-top: 10px;padding-left: 10px;">
                  © 2018. Công ty cổ phần Thế Giới Di Động. GPDKKD: 0303217354 do sở KH & ĐT TP.HCM cấp ngày 02/01/2007. GPMXH: 238/GP-BTTTT do Bộ Thông Tin và Truyền Thông cấp ngày 04/06/2020.<br>Địa chỉ: 128 Trần Quang Khải, P. Tân Định, Q.1, TP.Hồ Chí Minh. Điện thoại: 028 38125960. Email: cskh@thegioididong.com. Chịu trách nhiệm nội dung: Huỳnh Văn Tốt. Xem chính sách sử dụng
                </div>   </div>             
              </div>
            </footer>
                  <!-- Include all compiled plugins (below), or include individual files as needed -->


            <script type="text/javascript" src="js/bootstrap.js"></script>
            <!--Tạo menu bootstrap-->
            <script type="text/javascript" src="js/js/bootstrap.min.js"></script>
            <!--Tạo Slide bootstrap-5.1.0-dist-->
            <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
            <script type="text/javascript" src="js/chinh.js"></script>
            <!-- JQuery -->
            <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        </body>

</html>
<!--var owl = event.owl-carousel;
                                    owl.owlCarousel();
                                    $('.owl-next').click(function() {
                                        owl.trigger('next.owl.carousel');
                                    });
                                    $('.owl-prev').click(function() {
                                        owl.trigger('prev.owl.carousel', [300]);
                                      });
                                    