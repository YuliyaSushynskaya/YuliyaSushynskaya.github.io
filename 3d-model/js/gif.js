$("#printer").bind("click", function() {
			  var src = ($(this).attr("src") === "images/printer.jpg")
							? "images/printer2.gif" 
							: "images/printer.jpg";
			  $(this).attr("src", src);
		});
		