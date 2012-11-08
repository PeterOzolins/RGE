$(document).ready(function() {

	//####### SHOW ACTIVE LINK IN MENU ####### 
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
				$("a.subWedding").addClass("subMenuActive");
				break;
			case "mitzvah.php":
				$("a.pgWedding").addClass("active");
				$("a.subMitzvah").addClass("subMenuActive");
				break;
			case "performers.php":
				$("a.pgPerformers").addClass("active");
				break;
			case "enhancements.php":
				$("a.pgEnhancements").addClass("active");
		}

	//###### CUSTOM SMALLCAPS FOR HEADINGS ######
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

	//######## START THE FORM VALIDATION ########
	$("#requestQuoteForm").validate({
		//for debug, so the form is not actually submitted ...for testing
		debug: flase, 
		//what will be displayed when these fields are invalid
		messages: {
			fname: "*",
			lname: "*",
			phone1: "*",
			phone2: "*",
			phone3: "*"
		},
		//rules for how to validate the phone number fields
		rules: {
			phone1: { digits: true, maxlength: 3, minlength: 3 },
			phone2: { digits: true, maxlength: 3, minlength: 3 },
			phone3: { digits: true, maxlength: 4, minlength: 4 }
		},
		//to highlight the textbox when invalid
		highlight: function(element, errorClass, validClass) {
			$(element).addClass(errorClass).removeClass(validClass);
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).removeClass(errorClass).addClass(validClass);
		}

	});
	
});
