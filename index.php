<?php

$firstname = "Janusz";
$lastname = "Kowalski";

echo "$firstname $lastname";
echo "<hr>";

//heredoc
echo <<< DATA
<br>
Imię: $firstname
<hr>
DATA;


//nowdoc
echo <<< 'DATA'
<br>
Imię: $firstname
<hr>
DATA;





?>