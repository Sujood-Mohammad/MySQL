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
?>