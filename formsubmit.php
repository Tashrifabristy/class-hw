<?php
$userInput=$_POST['Data'];
for($i=1;$i<=10;$i++)
{
    echo("<p style='text-align: center;'>$userInput"."X" . "$i" . "=" . $userInput*$i . "</p>");
}
?>