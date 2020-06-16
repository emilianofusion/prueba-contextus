// Wait for notifications
function check_push(){
	$.ajax({
		async:	true,
		type: "GET",
		url: "/api/listen-notifications",
		success: function(data)
		{
			push_me(data.text, data.body);
			setTimeout('check_push()',200);
		}
	});
}

// Create push notification
function push_me(textMe, bodyMe){
 	if(!Push.Permission.has()){
		Push.Permission.request();
	}

	Push.create(
		textMe,
		{
			body:bodyMe,
			icon:"img/contextus.png",
			vibrate: [200, 100, 200, 100, 200, 100, 200],
			onClick: function(){
				window.open('https://www.contextuslatam.com', '_blank');
				this.close();
			}
		}
	);
}

// Initialize
$( document ).ready(function() {
  check_push();
});