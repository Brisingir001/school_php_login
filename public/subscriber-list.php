<?php
    session_start();

    if(!isset($_SESSION['logedIn'])) {
        header('Location: login.php');
        die();
    }

	require('../app/database.php'); 
	$sql = "SELECT * FROM tbl_subscribers";
	$subscribers = $database->query($sql)->fetchAll(PDO::FETCH_ASSOC);

	require('header.php');
?>
	<a href="index.php">naar index</a>
		<ul class="list-group">
			<?php 

				foreach($subscribers as $subscriber)
				{
					echo '<li class="list-group-item">' . $subscriber['email'] . '</li>';
				}

			?>
		</ul>
<?php require('footer.php');