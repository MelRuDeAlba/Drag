<?php ?>
<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>droppable demo</title>
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
	<script src="http://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="http://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.2/jquery.ui.touch-punch.min.js"></script>
<style media="screen">
.container-sended {
float:left;
width: 45%;
height: 25em;
margin: 5px;
}

.container-served {
float: right;
width: 45%;
height: 25em;
margin: 5px;
}

.draggable {
display: list-item;
width: 5em; /* debe tener tamaño fija para que el clon tambien lo tenga*/
height: 100px;
background: #ccc;
border: 2px solid #000000;
    border-radius: 8px;
margin: 5px;
padding: 10px;
}
.hide-drag {
	display: none;

}

.droppable {
width: 100%;
height: 20em;
background: #999;
color: #fff;
padding: 10px;
list-style-type: none;
overflow-y: auto;
overflow-x: hidden;
}
</style>


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

		<script>
			$("li").draggable({
                scroll: false,
				 helper: 'clone',
				 start: function(e, ui)
				 {
				  	$(this).addClass("hide-drag"); /*hide element while draggin*/
				},
				revert: function(event, ui) {
					console.log($(this).data);
					//$(this).data("uiDraggable").originalPosition = {
					//	top: 0,
					//	left: 0
					//};
					// return boolean
					return !event;
					// that evaluate like this:
					// return event !== false ? false : true;
				},
				stop: function( event, ui ) {
					$(this).removeClass("hide-drag"); /* show element again*/
				}
			});
			$(".droppable").droppable({
				drop: function(event, ui) {
					console.log(ui.draggable[0]);
					ui.draggable[0].style.top = 0;
					ui.draggable[0].style.left = 0;
					$( this ).append(ui.draggable[0]);
				}
			});
		</script>

</body>

</html>

<?php