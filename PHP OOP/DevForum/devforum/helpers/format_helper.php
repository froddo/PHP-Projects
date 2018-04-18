<?php
//Url Format
function urlFormat($str){
    // Strip out all whitespace
    $str = preg_replace('/\s*/', '', $str);

    // Convert the string to all lowercase
    $str = strtolower($str);

    // Url Encode
    $str = urlencode($str);
    return $str;
}

function formatDate($date){
    $date = date("F j, Y, G:i", strtotime($date));

    return $date;
}

function is_active($category){
    if (isset($_GET['category'])){
        if ($_GET['category'] == $category){
            return 'active';
        } else {
            return '';
        }
    } else {
        if ($category == null){
            return 'active';
        }
    }
}