<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="styles/biogr-css.css">
</head>
<body>
	<div class="head">
		<div class="menu">
			<ul class="menu">
				<li>
					<a href="./mainpage.php">Главная</a>
				</li>
				<li>
					<a href="./biogr.php">Биография</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="content">
		<?php
			$connection_string = new mysqli("localhost", "dashatop", "", "Books");
    		$query = "SELECT item_block FROM Biogr";
    		$connection_string->query("Set names 'utf8'");
    		$result = $connection_string->query($query);
    		while($row = $result->fetch_array(MYSQLI_ASSOC))
    		{
    			$item = "<div class='item'>$row[item_block]</div>";
    			echo $item;
    		}
		?>
		
	</div>
</body>