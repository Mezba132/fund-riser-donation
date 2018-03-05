<!DOCTYPE html>
<html>
<head>
    <title>File Uploading Script</title>
</head>
<body>
<form action="<?php $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data"> 
    <input type="file" name="fileToUpload" id="fileToUpload"/><br>
    <input type="submit" name="upload" value="Upload">
</form>
</body>
<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
	/*$sourceFile=$_FILES['fileToUpload']['tmp_name'];
	$destination=$_FILES['fileToUpload']['name'];
	if(move_uploaded_file($sourceFile,$destination))
	{
		echo "File Uploaded";
	}*/
	echo "<pre>";
	var_dump($GLOBALS);
	//$target_dir="uploades/";
	$destination=$_FILES['fileToUpload']['name'];
	$sizeInByte=$_FILES["fileToUpload"]["size"];
	$sizeInKB=$sizeInByte*0.001;
	$typeArray = array("jpeg","png"); //edit file types from here.. or add your extra file type
	if($sizeInByte!=null)
	{
		if($sizeInKB>250)
		{
			echo '<h1><font color="red">File Is Too Large</font></h1>';
		}
		else
		{
			$flag=false;
			$fileType=$_FILES['fileToUpload']['type'];
			$fileType=explode('/',$fileType);
			$fileType=$fileType[1];
			//var_dump($GLOBALS);
			foreach ($typeArray as $type) 
			{
				if($fileType==$type)
				{
					//echo "File Can Be Uploaded";
					$flag=true;
					break;
				}
				else
				{
					$flag=false;
				}
				//echo $type."__";
					# code...
			}
			if($flag)
			{
				echo "<pre>";
				//var_dump($GLOBALS);
				$sourceFile=$_FILES["fileToUpload"]["tmp_name"];
				if(move_uploaded_file($sourceFile, $destination))
				{
					echo '<h1><font color="lime">File Uploaded Successfully</font></h1>';
				}
				else
				{
					//var_dump($GLOBALS);
					echo '<h1><font color="red">File is Not Uploaded</font></h1>';
					
					
				}
			}
			else
			{
				echo '<h1><font color="red">Invalid File Type/Extention</font></h1>';
				?>
				<html>
				<style>
				#ext
				{
					text-align: center;
					width: 50%;
					background-color:#42f4ad;
					color:black;
				}
				</style>
					<br><center><h1 id="ext">Only JPG < JGEG & PNG Files Are Allowed</h1></center>
				</html>
				<?php 
			}
			//echo "FILE TYPE : ".$fileType;
		}
	}
	else
	{
		echo '<h1><font color="red">No File Selected</font></h1><br>';
	}
	
}
?>
</html>