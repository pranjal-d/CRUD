<!DOCTYPE html>
<html>

<head>
	<title></title>
</head>

<body>
	<form action="file_upload.php" method="POST"
			enctype="multipart/form-data">

		<h2>Upload Files</h2>
		
		<p>
			Select files to upload:
			
			<input type="file" name="pick []" multiple>
			
			<br><br>
			
			<input type="submit" name="submit" value="Upload" >
		</p>
	</form>
</body>

</html>					
	
