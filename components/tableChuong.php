<table class="infoInput">
    <thead>
        <th>Id_truyen</th>
        <th>TenTruyen</th>
        <th>Id_Chuong</th>
        <th>TenChuong</th>
        <th>SoChuong</th>
        <th>
            <button class="addBtn" id="addChuong">Thêm chương</button>
            <script>
                document.getElementById("addChuong").onclick = function() {
                    window.location.href = "uploadChuong.php";
                };
            </script>
        </th>
        <th></th>
    </thead>
    <tbody>
        <?php
        include '../actions/connect.php'; // Kết nối đến cơ sở dữ liệu
        $result = mysqli_query($conn, "SELECT truyen.*, chuong.* FROM truyen JOIN chuong ON truyen.Id_truyen = chuong.Id_truyen");
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <tr>
                <td style="text-align: center;"><?php echo $row['Id_truyen'] ?></td>
                <td><?php echo $row['Ten'] ?></td>
                <td><?php echo $row['Id_chuong'] ?></td>
                <td><?php echo $row['TenChuong'] ?></div>
                </td>
                <td><?php echo $row['SoChuong'] ?></td>
                <td>
                    <a href="updateChuong.php?Id_chuong=<?php echo $row['Id_chuong']; ?>">
                        Edit
                    </a>
                </td>
                <td>
                    <a href="../actions/deleteChuong.php?Id_chuong=<?php echo $row['Id_chuong']; ?>">
                        Delete
                    </a>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>