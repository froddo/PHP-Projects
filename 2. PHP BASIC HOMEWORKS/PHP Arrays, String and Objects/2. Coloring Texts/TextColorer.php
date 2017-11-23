

<?php
include 'header.php';
if (isset($_POST['submit'])){
//"What a wonderful world!"
$text = $_POST['color'];

$string = preg_replace('/\s+/', '', $text);
for ($i=0; $i<strlen($string);$i++){
    $asci= ord($string[$i]);
    $charRes=chr($asci);


    if ($asci % 2==0){?>
        <div class="red"><?= $charRes ?></div>

    <?php } else { ?>
        <div class="blue"><?= $charRes ?></div>

    <?php } ?>
<?php } ?>
<?php }  include 'footer.php'?>











