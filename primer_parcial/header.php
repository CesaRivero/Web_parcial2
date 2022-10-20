	<head>
		<title>CesarCode</title>
		<link rel="stylesheet" href="css/estilos.css"><!--css-->

		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&family=Roboto:wght@900&display=swap" rel="stylesheet">
		
	</head>
	
	<body>
		<header>
			<nav>
				<ul>
				<?php
				print "<li>
				 <a href='https://www.fcbarcelona.es/es/' target='_blank'> <img  src='img/barcelona.png' alt='logo barlecona' height='64' width='64'></a>
				</li>";
				$menu = array();
				//$botones      $links
			 
				$menu['CesarCode'] = "index.php";
				$menu['Intereses'] = "pag1.php";
				$menu['Contacto'] = "pag2.php";
				
				foreach($menu as $botones=>$links){
					
					print "<li><a href=$links>$botones</a></li>";
					
				}
				
				?>
				</ul>
			</nav>
		
		</header>
	</body>