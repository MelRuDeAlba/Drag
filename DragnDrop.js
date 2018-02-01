$( document ).ready(function() {
	$("li").draggable({
		scroll: false,
		helper: 'clone', /* show new element while draggin*/
		start: function(e, ui) {
			$(this).addClass("hide-drag"); /*hide element while draggin*/
			$(ui.helper).addClass("clone-drag");
		},
		revert: function(event, ui) {
			return !event;
		},
		stop: function( event, ui ) {
			$(this).removeClass("hide-drag"); /* show element again*/
		}
	});

	$(".droppable").droppable({
		drop: function(event, ui) {
			ui.draggable[0].style.top = 0;
			ui.draggable[0].style.left = 0;
			$( this ).append(ui.draggable[0]);
		}
	});
});
