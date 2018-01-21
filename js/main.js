/*

The only thing stopping this from being used in older browsers is the "~" selector in the last CSS rule, but since replacing it results in messy code I left it as it is.
Setovanje filtera
*/

        function toggleChevron(e) {
		$(e.target)
				.prev('.panel-heading')
				.find("i.indicator")
				.toggleClass('fa-caret-down fa-caret-right');
	}
	$('#accordion').on('hidden.bs.collapse', toggleChevron);
	$('#accordion').on('shown.bs.collapse', toggleChevron);


$("window").load(function() {
  $("#body").removeClass("preload");
});

		$(".share-btn").mouseenter(function() {
			setTimeout(function() {
			$(".item-menu").addClass("visible")
			}, 500);
		});
		$(".share-btn").mouseleave(function() {
			setTimeout(function() {
			$(".item-menu").removeClass("visible")
			}, 500);
		});
		$(".item-menu").hover(function() {
			$(".item-menu").addClass("visible")
		});
		$(".item-menu").mouseleave(function() {
			setTimeout(function() {
			$(".item-menu").removeClass("visible")
			}, 500);
		});
		$(".container-item").hover(function() {
			setTimeout(function() {
			$(".container-item").css("z-index","1000")
			}, 500);
		});
