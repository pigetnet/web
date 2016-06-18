/* You can customize how you want to be notified here */

//Callback when a command is sent
//You can customize how the response is displayed
function notify(json){
	//console.log(json);
	notification = json2message(json); //Convert error message into readable message
	notification.message = prettyPiget(notification.message); //Prettify piget
	display_alert(notification.message, notification.type); //Display notifications
}
