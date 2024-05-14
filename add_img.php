<?php
include "config.php";

$id = $_POST['id'];
$new_image_name = $_POST['new_image_name'];

// Insert the new image name into the database
$insert_query = "SELECT * FROM try WHERE id='$id'";
$query = mysqli_query($conn, $insert_query);

if ($res = mysqli_fetch_array($query)) {
    $imgname = $res['image'];
    $img_array = explode(",", $imgname);
    $img_array[] = $new_image_name;
    $new_imgname = implode(",", $img_array);
    
    $update_query = "UPDATE try SET image='$new_imgname' WHERE id='$id'";
    $update_result = mysqli_query($conn, $update_query);
    
    if ($update_result) {
        echo "<script>alert('New image added successfully to the database');window.location.href='fetch.php';</script>";
    } else {
        echo "Error adding new image: " . mysqli_error($conn);
    }
} else {
    echo "Invalid ID.";
}
?>
