<?php
    include_once('connection.php');
    if(isset($_POST['submit']))
    {
        $gender = "";
        if(isset($_POST['gender']))
        {
            $gender = $_POST['gender'];
        }
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $cityarea = $_POST['city'];

        $query = mysqli_query($con, "INSERT INTO `contact`(`username`, `phone`, `email`, `address`, `city`, `gender`) VALUES ('$name', '$phone', '$email', '$address', '$cityarea', '$gender' )");
        $num = mysqli_fetch_array($query);
        if($num>0)
        {
            echo "success!";
            echo "<script>alert(Sent! Hold on. We will get back to you!);";
        }
        else{
            echo "<script>alert(Oops! Something went wrong.We are on maintenance.Thank you);";
        }
        mysqli_close($con);
        //header('Location: contact.html');
       // exit();
    }
