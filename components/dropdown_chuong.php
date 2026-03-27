<style>
option
{
    font-size:18px;
}

</style>
<select onchange="window.location.search='?id_truyen=<?=(int)$_GET['id_truyen']?>&id_chuong=' + this.value">
<option value="">Chương</option>
<?php
    $id_truyen = (int)$_GET['id_truyen'];
    $sql = "SELECT * FROM chuong WHERE Id_truyen = ?";
    $stmt = $conn->prepare($sql);   
    $stmt->bind_param("i", $id_truyen);
    $stmt->execute();
    $chuong = $stmt->get_result();
    $count = 0;
    while($row = mysqli_fetch_assoc($chuong)) {
    ?> 
            <option value=<?php echo $row['Id_chuong'] ?>><?php echo $row['TenChuong'] ?></option>
    <?php
    $count = $count + 1;
    }
?>
</select>  