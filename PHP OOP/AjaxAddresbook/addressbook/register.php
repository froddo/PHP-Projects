<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ajax Address Book</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/style.css" />
    <script src="js/vendor/modernizr.js"></script>
</head>
<body>
    <div class="row">
        <?php include ('inc/navbar.php'); ?>
        <?php if (isset($_GET['error'])) : ?>
            <br>
            <div><small class="error"><?php echo $_GET['error']; ?></small></div>
        <?php endif; ?>
        <form class="custom" action="db_register.php" method="post">
        <fieldset>
            <legend>Register</legend>
            <div class="row collapse">
                <div class="small-3 large-2 columns">
                    <a href="#" class="button postfix">Username</a>

                </div>
                <div class="small-9 large-10 columns">
                    <input type="text" name="username" required>
                </div>
            </div>
            <div class="row collapse">
                <div class="small-3 large-2 columns">
                    <a href="#" class="button postfix">Email</a>
                </div>
                <div class="small-9 large-10 columns">
                    <input type="email" name="email" required>
                </div>
            </div>
            <div class="row collapse">
                <div class="small-3 large-2 columns">
                    <a href="#" class="button postfix">Password</a>
                </div>
                <div class="small-9 large-10 columns">
                    <input type="password" name="password" required>
                </div>
            </div>
            <input type="submit" name="submit" value="Submit" class="button expand">
        </fieldset>
        </form>
    </div>
<script src="js/vendor/jquery.js"></script>
<script src="js/foundation.min.js"></script>
<script>
    $(document).foundation();
</script>
</body>
</html>