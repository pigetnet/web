/* You can customize how you want to perform actions on the gui */
pollState = true;


//When a command is sent
//id is obj who sent command
function loadingCallback(id){
	//Locked click
	lockObject(id);
}

//Callback when a command result is received
//You can customize how the response is displayed
function sendCallback(json){
	//console.log(json);

	//Notification bar
	//systemNotification(json);

	//Enable object
	obj = $("."+json.command);
	unlockObject(obj);

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


/// Helper Functions
/// 

function systemNotification(json){
	//Notification callback
	notification = json2message(json); //Convert error message into readable message
	notification.message = prettyPiget(notification.message); //Prettify piget
	display_alert(notification.message, notification.type); //Display notifications
}

function changeButtonColor(obj,color){
	//console.log(obj);
	obj.css("background-color", color)
}

function lockObject(id){
	$(id).attr("data-locked",1);
	$(id).addClass("disabled");
	//console.log($(id));
}

function unlockObject(id){
	$(id).removeClass("disabled");
	$(id).attr("data-locked",0);
}