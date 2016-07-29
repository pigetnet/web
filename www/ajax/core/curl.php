<?php
function send($command,$args=""){

	include "settings.php";

	$post["password"] = $password;
	$post["args"] = $args;


	if ($command[0] != "/"){
		$command = "/".$command;
	}

	$curl = curl_init();
	curl_setopt($curl, CURLOPT_VERBOSE, true);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($curl, CURLOPT_URL, "https://$ip:$port$command");
	curl_setopt($curl, CURLOPT_POST, count($post));
	curl_setopt($curl, CURLOPT_POSTFIELDS, $post);

	$resp = curl_exec($curl);

	//echo "https://$ip:$port$command/$password";

	curl_close($curl);

	return $resp;
}
?>