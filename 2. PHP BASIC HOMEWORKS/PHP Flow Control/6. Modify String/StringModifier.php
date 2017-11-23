<?php
include "data.php";
//Palindrome
function checkPalindrome($palindrome){

    $reverse=strrev($palindrome);

    if ($palindrome==$reverse){
        return $palindrome."\n"."is palindrome!";
    } else {
        return $palindrome."\n"."is not a palindrome!";
    }
}
//reverse

function reverseString($checkString){

    $reverse=strrev($checkString);
    return $reverse;
}
//split

function splitString($splitStr){
    $splitResult=str_split($splitStr);

    $splitImpload= implode(" ", $splitResult);
    return $splitImpload;

}

//hash string

function hashString($hashCheck){
    //echo $password_hash = crypt($password);

    $hash=crypt($hashCheck, '$1$TDdTOrBm$');//I use that
    return $hash;
}

//shuffle string

function shuffleString($name){
    $shuffleStr=str_shuffle($name);
    return $shuffleStr;
}
if (isset($_POST['submit'])){

    if (($_POST['name'] == "")){
        echo "Please chose name in the text field!";
        exit();
    }


    if (($_POST['modifystrings'] == "1")) {
      $palindrome=$_POST['name'];
     echo checkPalindrome($palindrome);

  } elseif ($_POST['modifystrings'] == "2"){
      $checkString=$_POST['name'];
      echo reverseString($checkString);
  } elseif ($_POST['modifystrings'] == "3"){
      $splitStr=$_POST['name'];
    echo splitString($splitStr);
  } elseif ($_POST['modifystrings'] == "4"){
      $hashCheck=$_POST['name'];
      echo hashString($hashCheck);
  } elseif ($_POST['modifystrings'] == "5"){
      $name=$_POST['name'];
      echo shuffleString($name);
  }

}













