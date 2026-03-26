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
        <th>
            <button class="addBtn" id="addstoryBtn">Thêm truyện</button>
            <script>
                document.getElementById("addstoryBtn").onclick = function() {
                    window.location.href = "uploadTruyen.php";
                };
            </script>
        </th>
        <th></th>
    </thead>
    <tbody>
        <?php
        include '../actions/config.php'; // Kết nối đến cơ sở dữ liệu
        $result = mysqli_query($conn, "SELECT * FROM truyen");
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <tr>
                <td style="text-align: center;"><?php echo $row['Id_truyen'] ?></td>
                <td><?php echo $row['Ten'] ?></td>
                <td><?php echo $row['TacGia'] ?></td>
                <td><?php echo $row['TheLoai'] ?></div>
                </td>
                <td style="padding-left: 40px;"><?php echo $row['TongSoChuong'] ?></td>
                <td><?php echo $row['TrangThai'] ?></td>
                <td>
                    <div><?php echo $row['GioiThieu'] ?></div>
                </td>
                <td><?php echo $row['NgayTao'] ?></td>
                <td><?php echo $row['AnhBia'] ?></td>
                <td>
                    <a href="updateTruyen.php?id=<?php echo $row['Id_truyen']; ?>">
                        Edit
                    </a>
                </td>
                <td>
                    <a href="../actions/deleteTruyen.php?id=<?php echo $row['Id_truyen']; ?>">
                        Delete
                    </a>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>