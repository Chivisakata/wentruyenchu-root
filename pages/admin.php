<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin's page</title>
        <link rel="stylesheet" a href="../css/admin.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    </head>
    <body>
        <!--Kiểm tra role-->
        <?php
        session_start();//gọi session để lấy biến session 
        if (!isset($_SESSION['Role']) || $_SESSION['Role'] !== 'admin') {
        // không phải admin từ chối truy cập
        header("Location: /403.php"); 
        exit();
        }
        ?>

        
        <div class="topBar">    <!--LOGO stand for HOME-->
            <a href="home.php"><img src="../images/homeIcon.png"></a>      
        </div>
        <div style="display:flex; flex-direction: row;">
            <div class="leftMenu">
                <div class="btnGroup">
                    <button>Chuong</button>
                    <button>Comment</button>
                    <button>Rating</button>
                    <button>Truyen</button>
                    <button>Users</button>
                    <button>Yeu Thich</button>
                </div>
            </div>
            <div class="main">
                <table class="infoInput">
                    <thead>
                        <th>Id_truyen</th>
                        <th>Ten</th>
                        <th>TacGia</th>
                        <th>TheLoai</th>
                        <th>TongSoChuong</th>
                        <th>TrangThai</th>
                        <th>GioiThieu</th>
                        <th>NgayTao</th>
                        <th>AnhBia</th>
                        <th></th>
                        <th></th>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="text-align: center;">1</td>
                            <td><div>Kiếm Lai</div></td>
                            <td><div>Phong Hỏa Hí Chư Hầu</div></td>
                            <td><div>Huyền Huyễn, Tiên Hiệp, Kiếm Hiệp</div></td>
                            <td>NULL</td>
                            <td>Đang ra</td>
                            <td><div>Thiên địa mênh mông, vạn vật tồn tại. Ta - Trần Bình An - chỉ với một kiếm, phá thành, chắn sông, hái sao, lấp biển, hàng yêu, diệt ma, phong thần, khai thiên, làm nên tất cả! </div></td>
                            <td>2026-03-11 20:33:07</td>
                            <td><div>kiemlai.jpg</div></td>
                            <td><a href="#">Edit</a></td>
                            <td><a href="#">Delete</a></td>
                        </tr>
                        <tr>
                            <td style="text-align: center;">2</td>
                            <td><div>Mao Sơn Tróc Quỷ Nhân</div></td>
                            <td><div>Thanh Tử</div></td>
                            <td><div>Linh Dị, Đô Thị, Huyền Huyễn</div></td>
                            <td>3665</td>
                            <td>Hoàn Thành</td>
                            <td><div>Diệp Thiếu Dương vốn là một Mao Sơn tróc quỷ nhân, dũng cảm tiến vào đô thị, gặp người đấu người, gặp quỷ đấu quỷ, gặp yêu đấu yêu, gặp hồ đấu hồ...<br><br>Tương tây Thi vương, Tà Thần bất tử, điệp tiên hung linh, tứ phương quỷ khấu.<br><br>Nữ minh tinh nuôi tiểu quỷ, công chúa hoàng thất hút máu, nữ giám đốc là hồ yêu,...<br><br>Thi triển Mao Sơn thần thuật, đánh lui tất cả!
                                </div></td>
                            <td>2026-03-11 20:36:58</td>
                            <td><div>maosontrocquynhan.jpg</div></td>
                            <td><a href="#">Edit</a></td>
                            <td><a href="#">Delete</a></td>
                        </tr>
                        <tr>
                            <td style="text-align: center;">1</td>
                            <td><div>Mao Sơn Tróc Quỷ Nhân</div></td>
                            <td><div>Thanh Tử</div></td>
                            <td><div>Linh Dị, Đô Thị, Huyền Huyễn</div></td>
                            <td>3665</td>
                            <td>Hoàn Thành</td>
                            <td><div>Diệp Thiếu Dương vốn là một Mao Sơn tróc quỷ nhân, dũng cảm tiến vào đô thị, gặp người đấu người, gặp quỷ đấu quỷ, gặp yêu đấu yêu, gặp hồ đấu hồ...<br><br>Tương tây Thi vương, Tà Thần bất tử, điệp tiên hung linh, tứ phương quỷ khấu.<br><br>Nữ minh tinh nuôi tiểu quỷ, công chúa hoàng thất hút máu, nữ giám đốc là hồ yêu,...<br><br>Thi triển Mao Sơn thần thuật, đánh lui tất cả!
                                </div></td>
                            <td>2026-03-11 20:36:58</td>
                            <td><div>maosontrocquynhan.jpg</div></td>
                            <td><a href="#">Edit</a></td>
                            <td><a href="#">Delete</a></td>
                        </tr>
                        <tr>
                            <td style="text-align: center;">1</td>
                            <td><div>Mao Sơn Tróc Quỷ Nhân</div></td>
                            <td><div>Thanh Tử</div></td>
                            <td><div>Linh Dị, Đô Thị, Huyền Huyễn</div></td>
                            <td>3665</td>
                            <td>Hoàn Thành</td>
                            <td><div>Diệp Thiếu Dương vốn là một Mao Sơn tróc quỷ nhân, dũng cảm tiến vào đô thị, gặp người đấu người, gặp quỷ đấu quỷ, gặp yêu đấu yêu, gặp hồ đấu hồ...<br><br>Tương tây Thi vương, Tà Thần bất tử, điệp tiên hung linh, tứ phương quỷ khấu.<br><br>Nữ minh tinh nuôi tiểu quỷ, công chúa hoàng thất hút máu, nữ giám đốc là hồ yêu,...<br><br>Thi triển Mao Sơn thần thuật, đánh lui tất cả!
                                </div></td>
                            <td>2026-03-11 20:36:58</td>
                            <td><div>maosontrocquynhan.jpg</div></td>
                            <td><a href="#">Edit</a></td>
                            <td><a href="#">Delete</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>