<?php
session_start();
include "form.php";

if(isset($_POST['submit'])){
    $tags=$_POST['name'];
    $validCounter=0;
    $invalidCounter=0;
    $counter=0;


    $getFile=(file("tags.txt"));
    foreach ($getFile as $v){
        $exFile[]=preg_replace('/[\s,]+/', "", $v);
    }
    $check=count($exFile);
    if (!array_key_exists('countV',$_SESSION)){
        $_SESSION['countV']=0;
    }
    if (!array_key_exists('countIn', $_SESSION)){
        $_SESSION['countIn']=0;
    }

    for ($i=0;$i<count($exFile);$i++){
        if ($exFile[$i] == $tags){
            $_SESSION['countV']+=1;
            $counter=1;
            echo "Valid HTML tag!".'<br>'."Score: ".$_SESSION['countV'].'<br>';
        }else if($counter<=0 && $i == $check-1){
            $_SESSION['countIn']+=1;

            echo "Invalid HTML tag!".'<br>'."Score: ".$_SESSION['countIn'];
        }
    }
}
