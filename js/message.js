$(document).ready( function(){


	$("#write").hide();
$("#changeprofil").hide();
	$("#inbox").hide();
	$("#outbox").hide();
		 		$("#kotaksearch").hide();
		 		$("#menuleft").hide();
				$("#friendlist").hide();
				$("#myytrip").hide();
				$("#posthistor").hide();

				$("#inboxopen").hide();
				$("#outboxopen").hide();

		
		 $("#btn1").click(function(){
		
		 			$(".panelmessage2").hide();
		 		$(".panelmessage").hide();
		 		$("#inbox").hide();
				$("#outbox").hide();
				$("#write").show();
						$("#inboxopen").hide();
				$("#outboxopen").hide();
		})

		 $(".panelmessage2").click(function(){
				$("#inboxopen").show();
				$("#outboxopen").hide();
		 		$(".panelmessage2").hide();
		 		$(".panelmessage").hide();
		})
		  $(".panelmessage").click(function(){
				$("#inboxopen").hide();
				$("#outboxopen").show();
		 		$(".panelmessage").hide()
		 		$(".panelmessage2").hide();
		 		$(".panelmessage").hide();

		})
		 		 $("#btn2").click(function(){
		
		 		$("#write").hide();
		 		$(".panelmessage2").show();
		 		$(".panelmessage").hide();
		 		
				$("#outbox").hide();
				$("#inbox").show();
						$("#inboxopen").hide();
				$("#outboxopen").hide();

		})
			 $("#btn3").click(function(){
				$(".panelmessage2").hide();
		 		$(".panelmessage").show();
		 		$("#write").hide();
		 		$("#inbox").hide();
				$("#outbox").show();
						$("#inboxopen").hide();
				$("#outboxopen").hide();

		})
			 $("#messa").click(function(){
		
		 		$("#kotaksearch").show();
		 		$("#menuleft").show();
				$("#profil").hide();
				$("#friendlist").hide();
				$("#myytrip").hide();
				$("#posthistor").hide();
				
				$("#changeprofil").hide();


		})
		 $("#prof").click(function(){
	
		 		$("#kotaksearch").hide();
		 		$("#menuleft").hide();
				$("#profil").show();
				$("#friendlist").hide();
				$("#myytrip").hide();
				$("#posthistor").hide();
							$("#changeprofil").hide();

		}) 
			 $("#mytripa").click(function(){
	
		 		$("#kotaksearch").hide();
		 		$("#menuleft").hide();
				$("#profil").hide();
				$("#friendlist").hide();
				$("#myytrip").show();
				$("#posthistor").hide();

				$("#changeprofil").hide();
		}) 
			 $("#friendMen").click(function(){
	
		 		$("#kotaksearch").hide();
		 		$("#menuleft").hide();
				$("#profil").hide();
				$("#friendlist").show();
				$("#myytrip").hide();
				$("#posthistor").hide();

				$("#changeprofil").hide();
		}) 
			 $("#postMen").click(function(){
	
		 		$("#kotaksearch").hide();
		 		$("#menuleft").hide();
				$("#profil").hide();
				$("#friendlist").hide();
				$("#myytrip").hide();
				$("#posthistor").show();

				$("#changeprofil").hide();
		})  
			 $("#bedit").click(function(){
	
		 	
				$("#profil").hide();
					$("#changeprofil").show();
				

		})  
}); 
