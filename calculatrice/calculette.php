<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="style.css" />
	</head>
	
	<body>
                   
            <div class="calcule">
                
                <h1>Calculatrice</h1>
                
                <section class="grid-container">
                    <div class="result">
                        <?php
                        include ("traitement.php");
                        ?>
                    </div>
		
		<div class="numero">
			<a href="calculette.php?btn=1">1</a>
			<a href="calculette.php?btn=2">2</a>
			<a href="calculette.php?btn=3">3</a>
			<a href="calculette.php?btn=4">4</a>
			<a href="calculette.php?btn=5">5</a>
			<a href="calculette.php?btn=6">6</a>
			<a href="calculette.php?btn=7">7</a>
			<a href="calculette.php?btn=8">8</a>
			<a href="calculette.php?btn=9">9</a>
			<a href="calculette.php?btn=0">0</a>
                        <a href="calculette.php?btn=on">C</a>
                        <a href="calculette.php?btn=egal">=</a>

		</div>
                
                <div class="symb">
                    <a href="calculette.php?btn=multip">&times;</a>
                    <a href="calculette.php?btn=moins">-</a>
                    <a href="calculette.php?btn=plus">+</a>
                    <a href="calculette.php?btn=div">&divide;</a>	
                </div>
            </div>
       
	</body>
</html>