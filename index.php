<?php
	
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>droppable demo</title>
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
		<link rel="stylesheet" href="main.css">
		<script src="http://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="http://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.2/jquery.ui.touch-punch.min.js"></script>
		 <script src="DragnDrop.js"></script>
	</head>
	<body>
		<div class="container-sended">
			<h3>ENVIADOS</h3>
			<ul class="droppable">
				<li id="1" class="draggable">
					<img id="img1" src="https://s7d1.scene7.com/is/image/PETCO/dog-category-090617-369w-269h-hero-cutout-d?fmt=png-alpha" alt="" width="80px" height="80px">
					Chilaquiles
				</li>
				<li id="2" class="draggable">
					<img id="img2" src="http://www.dogster.com/wp-content/uploads/2017/11/A-dog-looking-up-confused-nervous-anxious.jpg" alt="" width="80px" height="80px">
					Tacos
				</li>
				<li id="3" class="draggable">
					<img id="img3" src="https://static.pexels.com/photos/159541/wildlife-photography-pet-photography-dog-animal-159541.jpeg" alt="" width="80px" height="80px">
					Hamburguesa
				</li>
			</ul>
		</div>
		<div class="container-served">
			<h3>SERVIDOS</h3>
			<ul class="droppable"></ul>
		</div>
	</body>
</html>
