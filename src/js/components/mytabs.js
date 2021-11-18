
	
	var divs = ["Menu1", "Menu2", "Menu3", "Menu4", "Menu5", "Menu6", "Menu7"];
	var visibleDivId = null;

	function toggleVisibility(divId) {
		if (visibleDivId === divId) {
			//visibleDivId = null;
		} else {
			visibleDivId = divId;
		}
		hideNonVisibleDivs();
	}

	function hideNonVisibleDivs() {
		var i, divId, div;
		for (i = 0; i < divs.length; i++) {
			divId = divs[i];
			div = document.getElementById(divId);
			if (visibleDivId === divId) {
				div.style.display = "block";
			} else {
				div.style.display = "none";
			}
		}
}
	
$(".myTab").click(function() {
		$('.myTab').removeClass('active');
		$('.myTab').removeClass('current'); ////Clear all checked class on .size
		$(this).addClass('current') //Add checked class to current clicked .size
	})