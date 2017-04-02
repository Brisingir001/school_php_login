<?php require('header.php');?>

<header class="page-header">
    <h2>Login</h2>
</header>
<section>
    <form action="../app/account_manager.php" method="POST">
        <div class="form-group">
            <label for="">Email:</label>
            <input type="email" name="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Password:</label>
            <input type="password" name="password" class="form-control">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary">
        </div>
    </form>
</section>

<?php require('footer.php');?>
