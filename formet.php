<?php
$userInput=$_POST['Data'];
for($i=1;$i<=$userInput;$i++){
    for($j=1;$j<=$i;$j++){
        echo'*' ;
    }
    echo"<br>";
}
for($i=$userInput;$i>=1;$i--){
    for($j=1;$j<=$i;$j++){
        echo'*';
    }
    echo"<br>";
}
?>