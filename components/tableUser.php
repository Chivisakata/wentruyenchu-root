<table class="infoInput">
    <thead>
        <th>Id_User</th>
        <th>User_name</th>
        <th>NgayDangKy</th>
        <th>Role</th>
    </thead>
    <tbody>
        <?php
        include '../actions/connect.php'; // Kết nối đến cơ sở dữ liệu
        $result = mysqli_query($conn, "SELECT * FROM users");
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <tr>
                <td style="text-align: center;"><?php echo $row['Id_user'] ?></td>
                <td style="padding-left: 80px;"><?php echo $row['User_name'] ?></td>
                <td style="padding-left: 40px;"><?php echo $row['NgayDangKy'] ?></td>
                <td style="padding-left: 110px;"><?php echo $row['Role'] ?></td>
                <td>
                    <a href="../actions/deleteUser.php?Id_user=<?php echo $row['Id_user']; ?>">
                        Delete
                    </a>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>