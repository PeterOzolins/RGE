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
});
