<html>
    <head>
        <title>BBN | Donor</title>
        <link rel="stylesheet" type="text/css" href="../Project/CSS/style.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    </head><br>
    
    <body style="background-color: ghostwhite;">
        <form action="donorVal.php" method="post" >
        <header>
            <div class="container">
                <div id="branding">
                   <h1>Bangladesh Blood Network (BBN)</h1>
                </div>
                <nav>
                    <ul>
                      <li><a href="Home.php"><i class="fa-solid fa-house-chimney"></i> Home</a></li>
                      <li class="current"><a href="Donor.php"><i class="fa-solid fa-person-circle-plus"></i> Donor</a></li>
                      <li><a href="DonationRequest.php"><i class="fa-solid fa-bell"></i> Request</a></li>
                      <li><a href="Login.php"><i class="fa-solid fa-backward-fast"></i> Logout</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <h3 align="center">Welcome to Bangladesh Blood Network (BBN)</h3>

<div class="donor">
     <fieldset>
        <legend>Please provide all Information to get donation request</legend>
            <?php
        if(isset($_GET['err']))
            {
                if($_GET['err'] == 'null')
                    {
                        echo ">>>>>Must be filled all info...";
                    }

            }

    ?>
            <fieldset>
                <legend>Personal Info:</legend>

         <table>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name" placeholder="Enter your Name"></td>
            </tr>
            <tr>
                <td>Username:</td>
                <td><input type="text" name="username" placeholder="Enter your Username"></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td><input type="add" name="add" placeholder="Enter your Address"></td>
            </tr>
            <tr>
                <td>Mobile Number:</td>
                <td><input type="text" name="num" placeholder="Enter your Number"></td>
            </tr>
            <tr>
                <td>Blood Group:</td>
                <td><select name="blood">
                    <option value>Select your Blood Group</option>
                    <option value="a+">A+</option>
                    <option value="a-">A-</option>
                    <option value="b+">B+</option>
                    <option value="b-">B-</option>
                    <option value="o+">O+</option>
                    <option value="o-">O-</option>
                    <option value="o+">AB+</option>
                    <option value="o-">AB-</option>
                </select></td>
            </tr>
        </table>
        </fieldset>

        <fieldset>
            <legend>Gender:</legend> 
            <input type="radio" name="gender" value="male"/>Male
            <input type="radio" name="gender" value="female"/>Female
            <input type="radio" name="gender" value="other"/>Other
        </fieldset>

        <fieldset>
            <legend>Date of Birth:</legend>
            <input type="date" name="dob" value="">
        </fieldset> 

        <fieldset>
            <legend>Last Donation:</legend>
            <input type="date" name="lastdonation" value="">
        </fieldset> <br>
 
    <div class="center2"> 
        <input type="submit" name="submit" value="Submit">   
    </div>
 
</fieldset>

</div>
 

</div>
       
  
  <br><br><br>
  
    <footer class="footer">
        <p align="center">"মুমূর্ষু রোগীর প্রাণের টানে, এগিয়ে আসুন রক্তদানে"</p>
    </footer>

</form>
    </body>
</html>
