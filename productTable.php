<?php
$keyword = $_GET["keyword"];
$conn = mysql_connect("localhost", "root", "1234");
if ($conn) {
    mysql_select_db("blueshop");
    mysql_query("SET NAMES utf8");
} else {
    echo mysql_errno();
}
$sql = "SELECT * FROM member WHERE username LIKE '%$keyword%'";
$objQuery = mysql_query($sql);
?>
<table border="1">
    <?php while ($row = mysql_fetch_array($objQuery)) : ?>
        <tr>
            <td><?php echo $row["name"] ?></a></td>
            <td><?php echo $row["address"] ?></td>
            <td><?php echo $row["mobile"] ?></td>
            <td><?php echo $row["email"] ?></td>
        </tr>
    <?php endwhile; ?>
</table>