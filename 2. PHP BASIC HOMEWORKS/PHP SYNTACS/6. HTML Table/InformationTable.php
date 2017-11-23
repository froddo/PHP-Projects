<?php 
$inputGroup="Gosho 
0882-321-423
24
Hadji Dimitar";
$addArray=[];
$arrayGroup=explode("\n", $inputGroup,4);
$addArray=['Name'=>$arrayGroup[0],
  'Phone number'=>$arrayGroup[1],
  'Age'=>$arrayGroup[2],
  'Address'=>$arrayGroup[3]
];
include 'data.php';




