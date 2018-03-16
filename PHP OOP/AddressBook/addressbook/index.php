<?php  include('core/init.php'); ?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ajax Address Book</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/custom.css" />
    <script src="js/vendor/modernizr.js"></script>
</head>
<body>
<div class="row">
    <div class="large-6 columns">
        <h1>Ajax Address Book</h1>
    </div>
    <div class="large-6 columns">
        <a class="add-btn button right small" data-reveal-id="addModal">Add Contact</a>
        <div id="addModal" class="reveal-modal" data-reveal>
            <h2>Add Contact</h2>
            <form id="addContact" action="#" method="post">
                <div class="row">
                    <div class="large-6 columns">
                        <label>First Name
                            <input name="first_name" type="text" placeholder="Enter First Name" required>
                        </label>
                    </div>
                    <div class="large-6 columns">
                        <label>Last Name
                            <input name="last_name" type="text" placeholder="Enter Last Name" required>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="large-4 columns">
                        <label>Email
                            <input name="email" type="email" placeholder="Enter Email Address" required>
                        </label>
                    </div>
                    <div class="large-4 columns">
                        <label>Phone Number
                            <input name="phone" type="text" placeholder="Enter Phone Number" required>
                        </label>
                    </div>
                    <div class="large-4 columns">
                        <label>Contact Group
                            <select name="contact_group">
                                <option value="Family">Family</option>
                                <option value="Friends">Friends</option>
                                <option value="Business">Business</option>
                            </select>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="large-6 columns">
                        <label>Address 1
                            <input name="address1" type="text" placeholder="Enter Address 1" required>
                        </label>
                    </div>
                    <div class="large-6 columns">
                        <label>Address 2
                            <input name="address2" type="text" placeholder="Enter Address 2">
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="large-4 columns">
                        <label>City
                            <input name="city" type="text" placeholder="Enter City" required>
                        </label>
                    </div>
                    <div class="large-4 columns">
                        <label>State
                            <select name="state">
                                <option value="Select State">Select State</option>
                                <?php foreach ($states as $key => $value) : ?>
                                    <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </label>
                    </div>
                    <div class="large-4 columns">
                        <label>ZipCode
                            <input name="zipcode" type="text" placeholder="Enter ZipCode" required>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="large-12 columns">
                        <label>Notes
                            <textarea name="notes" placeholder="Enter Optional Notes"></textarea>
                        </label>
                    </div>
                </div>
                <input name="submit" type="submit" class="add-btn button right small" value="Submit">
                <a class="close-reveal-modal">&#215;</a>
            </form>
        </div>
    </div>
</div>

<div id="loaderImage">
    <img src="img/ajax-loader.gif">
</div>

<div id="pageContent">

</div>

<script src="js/vendor/jquery.js"></script>
<script src="js/script.js"></script>
<script src="js/foundation.min.js"></script>
<script>
    $(document).foundation();
</script>
</body>
</html>
