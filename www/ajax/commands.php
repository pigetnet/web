<?php
$commands["sambaon"] = '/samba/start';
$commands["sambaoff"] = '/samba/stop';

$commands["sambastate"] = "/samba/isNameOnly";

$commands["ledon"] = '/led/on';
$args["ledon"] = "21";
$commands["ledoff"] = '/led/off';
$args["ledoff"] = $args["ledon"];

$commands["ledstate"] = "/led/state";
$args["ledstate"] = "21";
?>
