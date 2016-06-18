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
					send($value,$args[$command]);
				} else {
					send($value);
				}
				$commandSent = true;
			}
		}
		//echo $value;
		if (!$commandSent){
			$error["output"] = "";
			$error["error"] = "Unknown command, check commands.php";
			$error["status"] = 67;
			echo json_encode($error);
		}
	}
	else
	{
		$error["output"] = "";
		$error["error"] = "No commands available, check commands.php";
		$error["status"] = 67;
		echo json_encode($error);
	}

} else {
	echo "Enter commands for example do.php?name=on";
}


?>