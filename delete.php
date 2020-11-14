<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'tonklazz.mysql.database.azure.com', 'tonklazuzu2@tonklazz', 'Kla007as', 'ITFLab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL PLEASE TRY AGAIN: '.mysqli_connect_error());
}


$name = $_POST['name'];
$comment = $_POST['comment'];


$sql = $sql = "DELETE FROM guestbook WHERE Name='$name'";
$sql = "DELETE FROM guestbook WHERE Comment='$comment'";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully! CONGRATULATION!";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>
