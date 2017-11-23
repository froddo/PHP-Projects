<?php
session_start();
$file = basename($_GET['file']);
// Specify file path.
$file = 'C:\\xampp\\htdocs\\files\\'.$file; // '/uploads/'

if(!$file){ // file does not exist
    die('file not found');
} else {
    header("Cache-Control: public");
    header("Content-Description: File Transfer");
    header("Content-Disposition: attachment; filename=$file");
    header("Content-Type: image/jpeg");
    header("Content-Transfer-Encoding: binary");

    // read the file from disk
    readfile($file);
}