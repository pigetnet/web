
//Send a command to do
function send(command){
	command = "do.php?name=" + command
	$.getJSON(command, function(json){    
		console.log(json);
		sendCallback(json);
	});
}

//Convert server message to an displayable message
function json2message(command){
	notification = {};
	//If code is defined this is a server-side error
	if (command.code != undefined){
		notification.message = icon("hdd") + command.message
		notification.type = "danger"
	}
	else
	{
		//If output == "" server didn't respond
		if (command.output == ""){
			notification.message = icon("hdd") + command.error
		} else {
			notification.message = command.output
		}

		//If status == null command is successful
		if (command.status == null){
			notification.type = "success"
		} else {
			notification.type = "danger"
		}
	}

	return notification
}

//Prettify piget output
function prettyPiget(message){
	listecho = icon("ok");

	message = message.replace("----->",listecho)
	return message
}

//Generate icon
function icon(icon_name){
	return '<i class="glyphicon glyphicon-' + icon_name + '"></i> ' 
}

//Display an alertbox
function display_alert(message,type){
//type : danger / success ...
	$.notify({
	// options
	message: message
},{
	// settings
	type: type
});
}