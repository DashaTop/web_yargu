<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="./styles/style.css">
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
	<h1>Сладкая соль Босфора</h1>	
	<div class = "content">
		<?php
			$id = $_GET["id"];
			$connection_string = new mysqli("localhost", "dashatop", "", "Books");
    		$query = "SELECT id, book_citata, 
    					book_annotacia, book_id, book_opisanie, 
    					pic_url FROM AboutBook 
    					WHERE book_id = $id";
    		$connection_string->query("Set names 'utf8'");
    		$result = $connection_string->query($query);
    		while($row = $result->fetch_array(MYSQLI_ASSOC))
    		{
    			$picture = "<img src='".$row['pic_url']."'/>";
				$anotacia = "<div class='annotacia'>".$row[book_annotacia]."</div>";
				$opisanie = "<div class='opisanie'>".$row[book_opisanie]."</div></div>";
				$citata = "<div class='citata'>".$row[book_citata]."</div>";
				$otziv = "<div class='otziv'><form action='data_sender.php' method='post'>
				<input type='hidden' name='book_id' value=\".$row[book_id].\">
				<p><input class='shtuchka' placeholder='Оставить отзыв' name= 'mesto'/></p>
				<p><input type='submit' value='Отправить'>
				</form></div>";
				echo $picture.$citata.$anotacia.$opisanie.$otziv;
    		}
		?>
</body>
</html>

