<?php
include "config.php";

$id = $_GET['id'];
$name = $_GET['name'];
// Assuming you're passing the new image name via GET parameter

// Fetch the current image names
$r1 = "SELECT * FROM try WHERE id='$id'";
$query = mysqli_query($conn, $r1);

if ($res = mysqli_fetch_array($query)) {
    $imgname = $res['image'];
    
    $img_array = explode(",", $imgname);
    
    // Remove only the first occurrence of the image name
    $key = array_search($name, $img_array);
    if ($key !== false) {
        unset($img_array[$key]);
    }
    
    $new_imgname = implode(",", $img_array);
    
    $update_query = "UPDATE try SET image='$new_imgname' WHERE id='$id'";
    $update_result = mysqli_query($conn, $update_query);
    
    if ($update_result) {
        echo "Image name updated successfully in the database.";
    } else {
        echo "Error updating image name: " . mysqli_error($conn);
    }
}
?>

