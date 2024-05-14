<?php
include "config.php";

if(isset($_POST['submit'])){
	$image=$_FILES['image'];
	$file_name=$_FILES['image']['name'];
	$location="./upload/.";
	$image_name=implode(",",$file_name);

	if(!empty($file_name)){
		foreach($file_name as $file => $path){
                $targetpath=$location.$path;
				move_uploaded_file($_FILES["image"]["tmp_name"][$file], $targetpath);
		}     
		$insert="INSERT INTO try values (null,'$image_name')";  
		$run =mysqli_query($conn,$insert);
		if($run == true){
			
			echo"<script>alert('multiple image uploaded');window.location.href='fetch.php';</script>";
	
	}
}
}

?>