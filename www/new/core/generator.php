<?php

function button($text,$command,$color="btn-default"){
	echo '
	<button onclick=\'send("'.$command.'")\' class="btn btn-'.$color.'" type="button">'.$text.'</button>
	';
}

function title($text){
	echo '
	<h1>'.$text.'</h1>
	';
}

?>