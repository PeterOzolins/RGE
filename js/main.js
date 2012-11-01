$(document).ready(function() {
	var pagePath = window.location.pathname;
	var pageName = pagePath.substr(pagePath.lastIndexOf("/")+1);
	console.log(pageName, "<+++ LOGGED");

		//$("a.active").removeClass("active");

		switch(pageName){
			case "":
				$("a.pgHome").addClass("active");
				break;
			case "index.php":
				$("a.pgHome").addClass("active");
				break;
			case "wedding.php":
				$("a.pgWedding").addClass("active");
				break;
			case "performers.php":
				$("a.pgPerformers").addClass("active");
				break;
			case "enhancements.php":
				$("a.pgEnhancements").addClass("active");
		}

	$('h2, h3').each(function(thisElement) {
		
		var heading = $(this).text();
		var headingWords = heading.split(" ");
		var newHeading = "";
		var firstLetterTemp = "";
		var restOfWordTemp = "";
		var i = 0;

		for (i = 0; i <= headingWords.length-1; i++) {
			firstLetterTemp = headingWords[i].substr(0, 1);
			restOfWordTemp = headingWords[i].substr(1,headingWords[i].length);
			newHeading += "<span class='iCaps'>" + firstLetterTemp + "</span>" + restOfWordTemp + " ";
		}

		$(this).html(newHeading);
	});
});
