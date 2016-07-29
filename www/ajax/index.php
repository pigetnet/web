<?php
include 'core/generator.php'; //Optional

//Header
include 'core/header.php';

//Body
title("Samba");
button("Samba ON","sambaon","success");
button("Samba OFF","sambaoff","danger");
button("","","","sambastate","10000");
title("Led (pin 21)");
button("Led ON","ledon","success");
button("Led OFF","ledoff","danger");
button("","","","ledstate","3000");

//Footer
include 'core/footer.php'; //JS;
