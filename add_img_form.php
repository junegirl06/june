<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Image</title>
</head>
<body>
    <h2>Add New Image</h2>
    <form action="f1.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
        <label for="new_image_name">New Image Name:</label>
        <input type="file" id="new_image_name" name="new_image_name">
        <input type="submit" value="Add Image">
    </form>
</body>
</html>
