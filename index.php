<!DOCTYPE html>
<html>
<head>
	<title>Upload Image</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="image.css">
	</head>
<body>
<div class="image">

<form action="upload.php" method="post" enctype="multipart/form-data">
     <p>Upload Here</p>
    <input type="file" name="fileToUpload" id="fileToUpload"><br>
    <input type="submit" value="Upload Image" name="submit">
</form>
</div>
</body>
</html>