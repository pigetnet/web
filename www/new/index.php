<?php
include 'core/generator.php'; //Optional

//Header
include 'core/header.php';

//Body
title("New application (modify index.php/commands.php)");
button("Samba ON","sambaon","success");
button("Samba OFF","sambaoff","danger");
button("Led ON","ledon","success");
button("Led OFF","ledoff","danger");

//Footer
include 'core/footer.php'; //JS;
