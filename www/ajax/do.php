<?php
include "commands.php";
include "core/curl.php";

if (isset($_GET["name"])){
	$command = strtolower(trim($_GET["name"]));
	if(isset($commands)){
		$commandSent = false;

		foreach ($commands as $name => $value) {
			if (strtolower($name) == $command){
				if(isset($args[$command])){
					$resp = send($value,$args[$command]);

				} else {
					$resp = send($value);
				}
				$commandSent = true;
			}
		}
		//echo $value;
		if (!$commandSent){
			$resp["output"] = "";
			$resp["error"] = "Unknown command, check commands.php";
			$resp["status"] = 67;
			$resp = json_encode($resp);
		}
	}
	else
	{
		$resp["output"] = "";
		$resp["error"] = "No commands available, check commands.php";
		$resp["status"] = 67;
		$resp = json_encode($resp);
	}

	$resp = json_decode($resp);
	$resp->command = $command;
	echo json_encode($resp);

} else {
	echo "Enter commands for example do.php?name=on";
}


?>