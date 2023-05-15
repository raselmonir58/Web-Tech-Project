<?php
    session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];


    $con = mysqli_connect('localhost', 'root', '', 'blood_bank');
    $sql = "select * from signup where username='{$username}' and password='{$password}'";
    $result = mysqli_query($con, $sql);
    
    if($username == "" || $password == "")
        {
            header('location: Login.php?err=null');
        }

    elseif(mysqli_num_rows($result)>0){
        $user = mysqli_fetch_assoc($result);

        if ($user['role']=='donor') {
            header('location: Donor.php');
        }
        elseif ($user['role']=='reciever') {
            header('location: Reciever.php');
        }
        elseif ($user['role']=='hospital') {
            header('location: Hospital.php');
        }
        elseif ($user['role']=='admin') {
            header('location: Admin/view/adminhome.php');
        }
        else
        {
            header('location: Login.php?err=error');
        }
    }
    else{
        header('location: Login.php?err=notMatch');
    }


?>
