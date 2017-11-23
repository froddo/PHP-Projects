<?php
session_start();

if (isset($_POST['add-language'])){
    if (!isset($_SESSION['count'])){
        $_SESSION['count']=0;
    }
    $_SESSION['count']+=1;

    header('Location: CVGenerator.php');
}
if (isset($_POST['remove-language'])){
    $_SESSION['count']-=1;

    header('Location: CVGenerator.php');
}
if (isset($_POST['add'])){
    if (!isset($_SESSION['countss'])){
        $_SESSION['countss']=0;
    }
    $_SESSION['countss']+=1;
    header('Location: CVGenerator.php');
}
$counter=1;
$sesCount=$_SESSION['countss'];
if(isset($_POST['remove'])){
    $_SESSION['countss']-=1;
    header('Location: CVGenerator.php');
}
if(isset($_POST['submit'])){
    $cv=[];
    $cv['First Name']=$_POST['firstname'];
    $cv['Last Name']=$_POST['lastname'];
    $cv['Email']=$_POST['email'];
    $cv['Phone Number']=$_POST['phonenumber'];
    $cv['Gender']=$_POST['gender'];
    $cv['Birth Date']=$_POST['birthdate'];
    $cv['Nationality']=$_POST['nationality'];
    $cv1=[];
    $cv1['Company Name']=$_POST['companyname'];
    $cv1['From']=$_POST['from'];
    $cv1['To']=$_POST['to'];


    $language=$_POST['languages'];
    $level=$_POST['degree'];
    $arrayCombine=array_combine($language, $level);

    $languages=$_POST['language'];
    $comprehension=$_POST['level'];

    $reading=$_POST['level1'];
    $writing=$_POST['level2'];

    $licenceDriving=$_POST['license'];

}
?>

<?php if (isset($_POST['submit'])){ ?>

    <table border="3" bordercolor="#c86260" bgcolor="#ffffcc" width="50%" cellspacing="5" cellpadding="3">
        <thead>
        <tr>
            <th colspan="2" width="60%">Personal Information</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($cv as $key=>$value){ ?>
            <tr>
                <td><?= $key; ?></td>
                <td><?= $value; ?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table><br>
    <table border="3" bordercolor="#c86260" bgcolor="#ffffcc" width="50%" cellspacing="5" cellpadding="3">
        <thead>
        <tr>
            <th colspan="2" width="50%">Last Work Position</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($cv1 as $k=>$v){?>
            <tr>
                <td><?= $k; ?></td>
                <td><?= $v; ?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table><br>
    <table border="3" bordercolor="#c86260" bgcolor="#ffffcc" width="50%" cellspacing="5" cellpadding="3">
        <tr>
            <th colspan="3" width="60%">Computer Skills</th>
        </tr>
        <tr>
            <td rowspan="10">Programming Languages</td>
            <th>Language</th>
            <th>Skill Level</th>
        </tr>
        <?php foreach ($arrayCombine as $it=>$val) { ?>
            <tr>
                <td><?= $it; ?></td>
                <td><?= $val; ?></td>
            </tr>
       <?php } ?>
    </table><br>
    <table border="3" bordercolor="#c86260" bgcolor="#ffffcc" width="50%" cellspacing="5" cellpadding="3">
        <tr>
            <th colspan="10">Other Skills</th>
        </tr>
        <tr>
            <td rowspan="20">Languages</td>
        </tr>
        <tr>
            <th>Language</th>
            <th>Comprehension</th>
            <th>Reading</th>
            <th>Writing</th>
        </tr>

        <?php for ($b=0; $b<$sesCount + $counter; $b++) { ?>
            <tr>
                <td><?= $languages[$b]; ?></td>
                <td><?= $comprehension[$b]; ?></td>
                <td><?= $reading[$b]; ?></td>
                <td><?= $writing[$b]; ?></td>
            </tr>
        <?php } ?>


    </table>
    <table border="3" bordercolor="#c86260" bgcolor="#ffffcc" width="50%" cellspacing="5" cellpadding="3">
        <tr>
            <td>Driver's license</td>
          <?php foreach ($licenceDriving as $itemss) {?>
                 <td><?= $itemss; ?></td>
           <?php } ?>

        </tr>
    </table>

<?php } ?>