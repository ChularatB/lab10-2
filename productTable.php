<?php
$keyword = $_GET["keyword"];
$conn = mysqli_connect("localhost", "root", "");
if ($conn) {
    mysqli_select_db($conn,"blueshop");
} 
$sql = "SELECT * FROM member WHERE username LIKE '%$keyword%'";
$objQuery = mysqli_query($conn,$sql);
?>
<table border="1">
    <?php while ($row = mysqli_fetch_array($objQuery)) : ?>
        <tr>
            <td><?php echo $row["name"] ?></a></td>
            <td><?php echo $row["address"] ?></td>
            <td><?php echo $row["mobile"] ?></td>
            <td><?php echo $row["email"] ?></td>
        </tr>
    <?php endwhile; ?>
</table>
