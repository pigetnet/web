<?php

function button($text,$command,$color="btn-default",$state="",$interval="1000"){
	if ($state == ""){
		$tocheck = "";
	}else{
		$tocheck = "tocheck";
	}
	echo '
	<button onclick=\'send(this,"'.$command.'")\' data-interval="'.$interval.'" data-locked="0" data-command="'.$command.'" data-state="'.$state.'" class="'.$tocheck.' '.$command.' '.$state.' btn btn-'.$color.'" type="button">'.$text.'</button>
	';
}

function title($text){
	echo '
	<h1>'.$text.'</h1>
	';
}

?>