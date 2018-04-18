</div>
</div>
</div>
<div class="col-md-4">
    <div class="sidebar">
        <div class="block">
            <h3>Login Form</h3>
            <?php if (isLoggedIn()) : ?>
                <div class="userdata">
                    Welcome, <?php echo getUser()['username']; ?>
                </div>
                <br>
                <form action="logout.php" method="post">
                    <input type="submit" name="do_logout" value="Logout" class="btn btn-primary">
                </form>
            <?php else:  ?>
            <form method="post" action="login.php">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Enter Username">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Enter Password">
                </div>
                <button type="submit" name="do_login" class="btn btn-primary">Login</button>
                <a href="register.php" class="btn btn-default">Create An Account</a>
            </form>
            <?php endif;  ?>
        </div>
        <div class="block">
            <h3>Categories</h3>
            <div class="list-group">
                <a href="topics.php" class="list-group-item <?php echo is_active(null); ?>">All Topics <span class="badge pull-right"></span></a>
                <?php foreach (getCategories() as $category) : ?>
                    <a href="topics.php?category=<?php echo $category->id; ?>" class="list-group-item <?php echo is_active($category->id); ?>"><?php echo $category->name; ?></a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
</div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php echo BASE_URI; ?>templates/js/bootstrap.js"></script>

</body>
</html>