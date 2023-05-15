<!DOCTYPE html>
<html>
    <head>
        <title>BBN | Login</title>
         <link rel="stylesheet" type="text/css" href="../Project/CSS/style.css">
         <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    </head><br>
    
    <body class="login">
        <form action="LoginPHP.php" method="post">
        <header>
            <div class="container">
                <div id="branding">
                   <h1> Bangladesh Blood Network (BBN)</h1>
                </div>
                <nav>
                    <ul>
                      <li><a href="Home.php"><i class="fa-solid fa-house-chimney"></i> Home</a></li>
                      <li class="current"><a href="Login.php"><i class="fa-solid fa-right-to-bracket"></i> Login</a></li> 
                    </ul>
                </nav>
            </div>
        </header>
        
    <div class="center">
        <h1><i class="fa-solid fa-user"></i> User</h1>

        <?php

            if(isset($_GET['err']))
            {
                if($_GET['err'] == 'null')
                    {
                        echo "Username & Password Rquired.";
                    }

                    if($_GET['err'] == 'notMatch')
                    {
                        echo "Invalid Username or password ";
                    }
                    
            }

        ?>
            
        <form method="post">
            <div class="text_field">
                <input type="text" name="username" required>
                <label class="icon"><i class="fa-solid fa-user-tie"></i></label>
                <label>Username</label>
            </div>
            <div class="text_field">
                <input type="password" name="password" required>
                <label class="icon"><i class="fa-solid fa-lock"></i></label>
                <label>Password</label>
            </div>

            <div class="remember-forgot">
            <label><input type="checkbox">Remember Me</label><a href="forgottenpass.php">Forgotten Password?</a>
            </div>
            
            
            <input type="submit" value="Log in">

            <div class="Signup_link">
                New member? <a href="Signup.php">Signup</a>
            </div>
        </form>
    </div>
  
  
    <footer class="footer">
        <p align="center">"মুমূর্ষু রোগীর প্রাণের টানে, এগিয়ে আসুন রক্তদানে"</p>
    </footer>

        </form>
    </body>
</html>
