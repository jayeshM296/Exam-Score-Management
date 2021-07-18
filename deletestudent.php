`<?php
$id = $_GET['id'];
require 'connection.php';
$sql = "DELETE FROM student WHERE id = $id";

if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
    header('Location: StudentDetails.php');
    exit;
} else {
    echo "Error deleting record";
}
?>`
