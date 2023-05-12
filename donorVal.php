<?php
session_start();
    $name = $_POST['name'];
    $username = $_POST['username'];
    $address = $_POST['add'];
    $mobile = $_POST['num'];
    $blood = $_POST['blood'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $lastdonation = $_POST['lastdonation'];


    if($name == "" || $username == "" || $address == "" || $mobile == "" || $blood == "" || $gender == "" || $dob == "" || $lastdonation == "")
    {
        header('location: Donor.php?err=null');
    }

    else
    {
        $con = mysqli_connect('localhost', 'root', '', 'blood_bank');
        $sql = "insert into donor values('','{$name}','{$username}','{$address}','{$mobile}','{$blood}','{$gender}','{$dob}','{$lastdonation}')";
        $status = mysqli_query($con, $sql);
        
        if($status)
        {
            header('location: DonorP2.php');
        }
        else{
           		echo "DB error";
    		}
    }

?>