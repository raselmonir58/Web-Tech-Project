<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname="blood_bank";

$conn = new mysqli($servername, $username, $password,$dbname);

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (empty($_GET['name'])) {
        echo "";
    } 
    else {
        $name=$_GET['name'];
    }

$sql ="Select * from requestdonor";
      $result = $conn->query($sql);
   
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>BBN | Donation Request</title>
        <link rel="stylesheet" type="text/css" href="../Project/CSS/style.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  </head><br>
    
    <body style="background-color: ghostwhite;">
        <header>
            <div class="container">
                <div id="branding">
                   <h1>Bangladesh Blood Network (BBN)</h1>
                </div>
                <nav>
                    <ul>
                      <li><a href="Home.php"><i class="fa-solid fa-house-chimney"></i> Home</a></li>
                      <li class="current"><a href="DonationRequest.php"><i class="fa-solid fa-bell"></i> Request</a></li>
                      <li><a href="Donor.php"><i class="fa-sharp fa-solid fa-rotate-left"></i> Go Back</a></li>
                      <li><a href="Login.php"><i class="fa-solid fa-backward-fast"></i> Logout</a></li>    
                    </ul>
                </nav>
            </div>
        </header> <br><br>

        <h2 align="center">Please wait for Donation request</h2>

        <table border="1" align="center">
        <tr>
         <th>Patient Name</th>
         <th>Age</th>
         <th>Gender</th>
         <th>Problem</th>
         <th>Hospital Name</th>
         <th>Hospital Address</th>
         <th>Relatives Number</th>
         <th>Donation Date</th>
         <th>Donation Time</th>
     </tr>
     <?php while ($row=$result->fetch_assoc()) { ?>
     <tr>
         <td><?php echo $row["patientname"]; ?></td>
         <td><?php echo $row["age"]; ?></td>
         <td><?php echo $row["gender"]; ?></td>
         <td><?php echo $row["problem"]; ?></td>
         <td><?php echo $row["hospitalname"]; ?></td>
         <td><?php echo $row["address"]; ?></td>
         <td><?php echo $row["mobile"]; ?></td>
         <td><?php echo $row["date"]; ?></td>
         <td><?php echo $row["time"]; ?></td>

     </tr>
 <?php } ?>

     </table>       

 
</body>
</html>
  
  <br><br><br>
  
    <footer class="footer">
        <p align="center">"মুমূর্ষু রোগীর প্রাণের টানে, এগিয়ে আসুন রক্তদানে"</p>
    </footer>

    </body>
</html>
