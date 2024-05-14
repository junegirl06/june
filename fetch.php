<?php
include "config.php";
$sql="SELECT * FROM try group by id";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result)){
    $id=$row['id'];
$imagename=$row['image'];
$image=explode(",",$imagename);
foreach($image as $img){
    echo"<img src='upload/.$img' height='120' width='120'>";
 
    echo" <a href='f2.php?id=$id&name=$img'>remove</a>";
}
    ?>
    <h2><?php echo  "$imagename ";?></h2>
    <button> <a href='update.php?id=<?php echo$id;?> & name=<?php echo $img;?>'>update</a></button>
    <br>
    <?php

}  



?>

