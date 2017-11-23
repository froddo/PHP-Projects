<?php
session_start();

include "header.php";
if (isset($_POST['submit'])){

    if (count($_FILES)> 0){
        if (move_uploaded_file($_FILES['add-files']['tmp_name'],'files'.DIRECTORY_SEPARATOR.$_FILES['add-files']['name'])){
            echo "file is upload";
        }
        else{
            echo "error uploaded";
        }
    }
}


?>

<a href="files.php">See Uploaded Files</a>
<form method="post" enctype="multipart/form-data">
<input type="file" name="add-files"><br />
    <input type="submit" name="submit" value="Upload Files">
</form>
<?php
include "footer.php";
?>
