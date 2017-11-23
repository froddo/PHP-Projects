<?php

if (isset($_POST['submit'])) {
    $textMapping = $_POST['mapping'];
    $pattern="/\w+/";
    $result=preg_match_all($pattern, $textMapping, $matches);

//$test=preg_split($pattern,$text); just test-  it is work!
    $tolower = array_map('strtolower', $matches[0]);

    $count=array_count_values($tolower);
}
include "mapper.php";
?>












