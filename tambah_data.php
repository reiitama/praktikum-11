<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tambah Data Karyawan</title>
</head>
<body>
    <h1>Tambah Data</h1>
    <form action="functions.php" method="POST">
        <label>
            <input name="name" id="name" type="text" placeholder="Name">
            <span>Name</span>
        </label>
        <label>
            <input name="email" id="email" type="text" placeholder="Email">
            <span>Email</span>
        </label>
        <label>
            <input name="address" id="address" type="text" placeholder="Address">
            <span>Address</span>
        </label>
        <label>
            <select name="gender" id="gender">
                <option value="" selected="selected" hidden="hidden">Gender</option>
                <option value="Male">Male</option>
                <option value="Woman">Woman</option>
            </select>
        </label>
        <label>
            <input name="position" id="position" type="text" placeholder="Position">
            <span>Position</span>
        </label>
        <label>
            <select name="status" id="status">
                <option value="" selected="selected" hidden="hidden">Status</option>
                <option value="Full-time">Full time</option>
                <option value="Part-time">Part time</option>
            </select>
        </label>
        <!-- <input type="submit" value="Submit"> -->
        <button type="submit" name="submit">Submit</button>
    </form>
    <button><a href="index.php">KEMBALI</a></button>
</body>
</html>