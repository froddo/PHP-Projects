<!DOCTYPE html>
<head>
    <title></title>
    <meta charset="utf-8" />
    <style type="text/css">
div{



}

    </style>
</head>
<body>

</body>
</html>
<?php
$year=2017;
$nameMonth=["","Януари","Февруари","Март","Април","Май","Юни","Юли","Август","Септември","Октомври","Ноември","Декември"];
$nameDay=["пн","вт","ср","чт","пт","сб","нд"];


$calendar = "<div>";

foreach ($nameDay as $v){
    $calendar .= "<div class='$v'>$v</div>";
}

echo $calendar;

;?>
