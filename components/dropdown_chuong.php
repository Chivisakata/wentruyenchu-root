<select onchange="window.location.search='?id_truyen=<?=$_GET['id_truyen']?>&id_chuong=' + this.value">
<option value="">Chương</option>
<?php
    $chuong = mysqli_query($conn, "SELECT * FROM chuong WHERE Id_truyen = " . $_GET['id_truyen']);
    $count = 0;
    while($row = mysqli_fetch_assoc($chuong)) {
    ?> 
            <option value=<?php echo $row['Id_chuong'] ?>><?php echo $row['TenChuong'] ?></option>
    <?php
    $count = $count + 1;
    }
?>
</select>