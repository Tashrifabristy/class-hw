<?php
$userInput=$_POST['Data'];
 $factorial=1;
 for($i=1;$i<=$userInput;$i++){
    $factorial=$factorial* $i;
 }
 echo"<br> Factorial of $userInput is : $factorial";
?>