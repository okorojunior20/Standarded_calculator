<?php
if (isset($_POST['submit'])) {
    $fistnumber = $_POST['fistnumber'];
    $secnumber = $_POST['secnumber'];
    $operator = $_POST['operator'];
}
if ($operator =="+") {
     echo $fistnumber + $secnumber;
}elseif ($operator =="-") {
    echo $fistnumber - $secnumber;
}elseif  ($operator =="*") {
    echo $fistnumber * $secnumber;
}elseif ($operator =="/") {
    echo $fistnumber / $secnumber;
}
?>
