// We get which objects need to check their states
function getPolledObj(){
	obj = $(".tocheck");
	polledObj = [];
	$(obj).each(function(){
		polledObj.push(this);
	});
	pollState = true;
	return polledObj;	
	
}

// We start an infinite loop for each required state
// Source: http://stackoverflow.com/questions/6835835/jquery-simple-polling-example
function startPoll(toPoll){
	$.each(toPoll, function(index, value){
		interval = this.dataset.interval;
		command = this.dataset.state;
		command = "do.php?name=" + command
		console.log("==========> Polling "+interval+"ms : "+ command)
		pool(command,interval);
	});
}


//Poll a state and restart it when done.
// When an interval is done , we call pollCallBack(), where you can the gui depending on the result
// of the state command.
function pool(command,interval){
	if(pollState){
		console.log("======> Crushing data " + interval +" ms : " + command)
		$.getJSON(command, function(json){
				pollCallback(json);
				setTimeout(pool,interval,command,interval);
		});
	}
}

//We can stopped polling with this command.
function stopPoll(toPoll){
	pollState = false;
	console.log("===================> Pooling stopped !");
}

if(pollState){
	toPoll = getPolledObj();
	startPoll(toPoll);
}