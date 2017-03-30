
<?php 
	require('../app/database.php'); 
	$sql = "SELECT * FROM tbl_subscribers";
	$subscribers = $database->query($sql)->fetchAll(PDO::FETCH_ASSOC);


?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP MYSQL</title>
</head>
<body>
	<a href="index.php">naar index</a>
		<ul>
			<?php 

				foreach($subscribers as $subscriber)
				{
					echo '<li>' . $subscriber['email'] . '</li>';
				}

			?>
		</ul>

</body>
</html>