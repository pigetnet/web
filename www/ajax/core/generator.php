<?php

function button($text,$command,$color="btn-default",$state="",$interval="1000"){
	if ($state == ""){
		$tocheck = "";
	}else{
		$tocheck = "tocheck";
	}
	echo '
	<button onclick=\'send("'.$command.'")\' data-interval="'.$interval.'" data-command="'.$state.'" class="'.$tocheck.' '.$state.' btn btn-'.$color.'" type="button">'.$text.'</button>
	';
}

function title($text){
	echo '
	<h1>'.$text.'</h1>
	';
}

?>