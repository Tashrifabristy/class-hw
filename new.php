//function and foreach at a time

<?php
function markProcess($marksArr){
    $sum=0;
    foreach($marksArr as $value){
        $sum += $value;
    }
    return $sum;
}
$Denial=[34,98,45,12,98,93];
$sumMarks=markProcess($Denial);
echo"<br> total marks scored by Denial out of 600 is $sumMarks";
?>