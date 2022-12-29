<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Edit Data Karyawan</title>
</head>
<body>
    <h1>Edit Data</h1>
    <?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($conn,"SELECT * FROM karyawan where id='$id'");
	while($d = mysqli_fetch_array($data)){
	?>
    <form action="koneksi.php" method="POST">
        <label>
            <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
		    <input type="text" name="name" value="<?php echo $d['name']; ?>">
            <span>Name</span>
        </label>
        <label>
            <input type="text" name="email" value="<?php echo $d['email']; ?>">
            <span>Email</span>
        </label>
        <label>
            <input type="text" name="address" value="<?php echo $d['address']; ?>">
            <span>Address</span>
        </label>
        <label>
            <select name="gender" id="gender">
                <option value="" selected="selected" hidden="hidden">Gender</option>
                <option value="<?php echo $d['male']; ?>">Male</option>
                <option value="<?php echo $d['woman']; ?>">Woman</option>
            </select>
        </label>
        <label>
            <input type="text" name="position" value="<?php echo $d['position']; ?>">
            <span>Position</span>
        </label>
        <label>
            <select name="status" id="status">
                <option value="" selected="selected" hidden="hidden">Status</option>
                <option value="<?php echo $d['fulltime']; ?>">Full time</option>
                <option value="<?php echo $d['parttime']; ?>">>Part time</option>
            </select>
        </label>
        <!-- <input type="submit" value="Submit"> -->
        <button type="submit" name="submit">Submit</button>
    </form>
    <?php 
	}
	?>
    <button><a href="index.php">KEMBALI</a></button>
</body>
</html>