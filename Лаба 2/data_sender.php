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
					<a href="./mainpage.php">Главная</a>
				</li>
				<li>
					<a href="./biogr.php">Биография</a>
				</li>
			</ul>
		</div>
	</div>
        <?php
            $connection_string = new mysqli("localhost", "dashatop", "", "Books");
            $query = ("INSERT INTO otzyvy (book_id ,otzyv)
                        VALUES ('".$_POST[book_id]."' ,'".$_POST[mesto]."')");
            echo $query;
            if ($connection_string -> query($query))
                echo("Данные добавлены");
            else 
                echo("Произошла ошибка");            
        ?>
    </body>
</html>