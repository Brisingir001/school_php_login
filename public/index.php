<?php
    require('header.php');
?>
<a href="subscriber-list.php">view subscribers</a>
<?php
    if(isset($_GET['message']))
    {
        echo "<p class=\"message\">{$_GET['message']}</p>";
    }
?>
    <form action="../app/newsletter_manager.php">
        <div class="form-group">
            <label for="usermail">E-mail adres:</label>
            <input type="email" name="email" id="usermail" required>
        </div>
        <div class="form-group">
            <input type="submit" value="Verstuur">
        </div>
    </form>
<?php require('footer.php'); ?>