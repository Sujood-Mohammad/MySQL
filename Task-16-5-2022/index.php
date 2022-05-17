<?php
include "connect.php";

$aniName = $_POST['name'];
$aniAge = $_POST['age'];
$aniPrice = $_POST['price'];
$aniColor = $_POST['color'];
$aniSound = $_POST['sound'];

$query = "INSERT INTO animal (name, age, price, color, sound)
VALUES ('$aniName','$aniAge','$aniPrice','$aniColor','$aniSound')";

if(mysqli_query($connect,$query)){
    echo "new record in animals";
}
else {
    echo "error :".mysqli_error($connect);
}
$select=mysqli_query( $connect,"SELECT * FROM animal");

?>
<table border=1px>
    <tr>
        <th>Animal Name</th>
        <th>Animal Age</th>
        <th>Animal Price</th>
        <th>Animal Color</th>
        <th>Animal Sound</th>
    </tr>
    <?php while($row= mysqli_fetch_assoc ($select)): ?>
    <tr>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['age']; ?></td>
    <td><?php echo $row['price']; ?></td>
    <td><?php echo $row['color']; ?></td>
    <td><?php echo $row['sound']; ?></td>
    </tr>
    <?php endwhile; ?>
</table>