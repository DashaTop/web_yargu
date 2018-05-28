<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="styles/main-style.css">
</head>
<body>
	<div class="head">
		<div class="menu">
			<ul class="menu">
				<li>
					<a href="#">Главная</a>
				</li>
				<li>
					<a href="./biogr.php">Биография</a>
				</li>
			</ul>
		</div>
		<div class="citatka">
			<p>«Жизнь, как маленькое одеяльце: потянешь наверх — мерзнут ноги, потянешь вниз — голова. Жить умеет тот, кто сворачивается калачиком.»
		</div>
	</div>
	<div class = "content">
		<?php
		$connection_string = new mysqli("localhost", "dashatop", "", "Books");
        $query = ("SELECT id, pic_url, name FROM main");
	    $connection_string -> query("Set names 'utf8'");
	    $result = $connection_string -> query($query);
	    while($row = $result->fetch_array(MYSQLI_ASSOC))
	    {
	    	$column = "<div class='column'>
							<div class=''>				
							<img src='".$row[pic_url]."'/>
							<div class='text'> 
								<div>
									".$row[name]."
								</div>
							<a href='./page.php?id=".$row[id]."'>Читать подробнее</a>
							</div>
						</div>
						</div>";
	    	echo $column;
	    }
		?>
	</div>
</body>
</html>