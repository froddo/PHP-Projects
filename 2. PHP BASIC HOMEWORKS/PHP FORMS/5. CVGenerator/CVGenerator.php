<?php session_start() ?>

<?php
    if (!isset($_SESSION['count'])){
        $_SESSION['count']=0;
    }
    $inputCount=$_SESSION['count'];
    if (!isset($_SESSION['countss'])){
        $_SESSION['countss']=0;
    }
    $inputCountTwo=$_SESSION['countss'];
?>
<!DOCTYPE html>
<head>
    <title></title>
    <meta charset="UTF-8" />
</head>
<body>
<form action="generator.php" method="post">
    <fieldset>
        <legend>Personal Information</legend>
        <input type="text" name="firstname" placeholder="First Name"><br>
        <input type="text" name="lastname" placeholder="Last Name"><br>
        <input type="text" name="email" placeholder="Email"><br>
        <input type="text" name="phonenumber" placeholder="Phone Number"><br>
        <label for="female">Female</label>
        <input type="radio" name="gender" value="female">
        <label for="male">Male</label>
        <input type="radio" name="gender" value="male"><br>
        <label for="birthdate">Birth Date</label>
        <input type="date" name="birthdate" value="dd/mm/yyyy"><br>
        <label for="nationality">Nationality</label><br>
        <select name="nationality">
            <option value="Bulgarian">Bulgarian</option>
            <option value="Indian">Indian</option>
        </select>
    </fieldset>
    <fieldset>
        <legend>Last Work Position</legend>
        <label for="companyname">Company Name</label>
        <input type="text" name="companyname"><br>
        <label for="from">From</label>
        <input type="date" name="from" value="dd/mm/yyyy"><br>
        <label for="to">To</label>
        <input type="date" name="to" value="dd/mm/yyyy">
    </fieldset>
    <fieldset>
        <legend>Computer Skills</legend>
        <label for="proglanguages">Programing Languages</label><br>
        <input type="text" name="languages[]">

        <select name="degree[]">
            <option value="Beginner">Beginner</option>
            <option value="Programmer">Programmer</option>
            <option value="Ninja">Ninja</option>
        </select><br>
        <?php for($i=0; $i<$inputCount; $i++){ ?>
        <input type="text" name="languages[]">
        <select name="degree[]">
            <option value="Beginner">Beginner</option>
            <option value="Programmer">Programmer</option>
            <option value="Ninja">Ninja</option>
        </select><br>
        <?php } ?>
        <input type="submit" name="remove-language" value="Remove Language">
        <input type="submit" name="add-language" value="Add Language">
    </fieldset>
    <fieldset>
        <legend>Other Skills</legend>
        <label for="languages">Languages</label>
        <input type="text" name="language[]">
        <select name="level[]">
            <option value="Comprehension">Comprehension</option>
            <option value="Intermediate">intermediate</option>
            <option value="Advanced">advanced</option>
        </select>
        <select name="level1[]">
            <option value="Reading">Reading</option>
            <option value="Beginner">beginner</option>
            <option value="Beginner">beginner</option>
        </select>
        <select name="level2[]">
            <option value="Writing">Writing</option>
            <option value="Advanced">advanced</option>
            <option value="Intermediate">intermediate</option>
        </select><br>
        <?php for($a=0; $a<$inputCountTwo; $a++){ ?>
            <label for="languages">Languages</label>
            <input type="text" name="language[]">
        <select name="level[]">
            <option value="Comprehension">Comprehension</option>
            <option value="Intermediate">intermediate</option>
            <option value="Advanced">advanced</option>
        </select>
        <select name="level1[]">
            <option value="Reading">Reading</option>
            <option value="Beginner">beginner</option>
            <option value="Beginner">beginner</option>
        </select>
        <select name="level2[]">
            <option value="Writing">Writing</option>
            <option value="Advanced">advanced</option>
            <option value="Intermediate">intermediate</option>
        </select><br>
       <?php } ?>
        <input type="submit" name="remove" value="Remove Language">
        <input type="submit" name="add" value="Add Language"><br>
        <label for="driverlicense">Driver License</label><br>
        <label for="driver">B</label>
        <input type="checkbox" name="license[]" value="B">
        <label for="driver">A</label>
        <input type="checkbox" name="license[]" value="A">
        <label for="driver">C</label>
        <input type="checkbox" name="license[]" value="C">
    </fieldset>
    <input type="submit" name="submit" value="Generate CV">
</form>
</body>
</html>


