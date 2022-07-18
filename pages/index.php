<!DOCTYPE html>
<html>
    <head>
        <title>SAILCEYLON</title>
        <link rel="stylesheet" href="../css/stylelog.css">
    </head>
    <body>
        <section>
            <div class="container">
                <div class="left"></div>
                <div class="right">
                    <form action="logins.php" method="POST">
                        <h2>Log In</h2><br>
                        <?php if (isset($_GET['error'])){ ?>
                            <p class="error"><?php echo $_GET['error'];?></p>
                        <?php }?>
                        <label>Log in as:</label>
                        <select id="role" name="role" required>
                        <option value="receptionist">receptionist</option>
                        <option value="manager">Manager</option>
                        <option value="staff">Admin</option>
                        </select><br>
                        <label>Username</label>
                        <input type="text" name="uname" placeholder="" required><br>
                        <label>Password</label><br>
                        <input type="Password" name="password" placeholder="" required><br><br>
                        <hr>
                        <div class="btn"><button type="submit">Log In</button></div>
                    </form>
                </div>
            </div>
      </section>
    </body>
</html>