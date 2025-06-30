<?php
include 'connect.php';

if(isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    // Delete the record from the database
    $sql = "DELETE FROM `sponsor` WHERE  packageID=$packageID"; // Corrected variable name from $songid to $id
    $result = mysqli_query($con, $sql);

    if($result) {
        // Redirect to display.php after successful deletion
        header('location:display.php');
        exit;
    } else {
        die(mysqli_error($con));
    }
}
?>
