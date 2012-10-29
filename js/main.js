$(document).ready(function() {
	var pagePath = window.location.pathname;
	var pageName = pagePath.substr(pagePath.lastIndexOf("/")+1);
	console.log(pageName, "<+++ LOGGED");

		//$("#topMenu a").removeClass(".active");
	if(pageName != ""){

		$("a.active").removeClass("active");

		switch(pageName){
			case "wedding.php":
				console.log("make wedding active");
				$("a.pgWedding").addClass("active");
		}

	}

	


/*
	$("#topMenu a").each(function(i) {
		
		if($(this).hasClass("active")){
			alert($(this));
			$(this).removeClass("active");
		}
		//if ($(this).hasClass(".active")) {
		//	alert(this);
		//}
	});
*/

});
