<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home Page</title>
</head>
<body>
	<h1><?php echo $title; ?></h1>
	<h2><?php echo $second_title; ?></h2>
	<?php foreach($blogs as $blog) { ?>
		<h2><?php echo $blog["title"]; ?></h2>
		<p><?php echo $blog['body']; ?></p>
	<?php } ?>
</body>
</html>