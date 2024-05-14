<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="insert.php" method="post" enctype="multipart/form-data">
        <input type="file" limit="5" name="image[]" multiple >
        
        <input type="hidden" value="<?	$image_name[0]; ?>">
        <input type="submit" name="submit" value="upload">
</form>
</body>
</html>