/* You can customize how you want to be notified here */

//Callback when a command is sent
//You can customize how the response is displayed
function sendCallback(json){
	//console.log(json);
	notification = json2message(json); //Convert error message into readable message
	notification.message = prettyPiget(notification.message); //Prettify piget
	display_alert(notification.message, notification.type); //Display notifications
}

// Each time poll is started we launch this command.
function pollCallback(json){
	//console.log(json)
	state = json.output.trim();
	id = json.command;
	obj = $("."+id);

	if(state == 0){
		changeButtonColor(obj,"black");
	}

	if(state == 1){
		changeButtonColor(obj,"red");
	}

	console.log("==> "+ id + " : " + state);

}


function changeButtonColor(obj,color){
	//console.log(obj);
	obj.css("background-color", color)
}
