<?php
if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $gender = $_POST['gender'];
        $position = $_POST['position'];
        $status = $_POST['status'];
 
        $host = "localhost";
        $username = "user";
        $password = "";
        $dbname = "praktikum_11";
 
        $conn = mysqli_connect($host, $username, $password, $dbname);
        if (!$conn)
        {
            die("Connection failed!" . mysqli_connect_error());
        }
        $sql = "INSERT INTO karyawan VALUES('', '$name', '$email', '$address', '$gender', '$position', '$status')";
        $rs = mysqli_query($conn, $sql);
        if($rs)
        {
            echo "Berhasil di input!";
        }
      	else{
         	echo "Error, data tidak bisa di input"; 
        }
        mysqli_close($conn);
        header("location: index.php");
    }
?>