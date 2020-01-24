<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Form Upload</title>
</head>
<body>

<form method="post" enctype="multipart/form-data" action="<?php echo base_url('upload/multiple_upload'); ?>">
    <input type="file" name="filename[]"  multiple="true">
    <button type="submit">Upload</button>
</form>
	
</body>
</html>