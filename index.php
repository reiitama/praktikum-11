<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Karyawan</title>
    <style>
        body {
            font-family: 'lato', sans-serif;
        }

        .container {
            max-width: 1000px;
            margin-left: auto;
            margin-right: auto;
            padding-left: 10px;
            padding-right: 10px;
        }

        h2 {
            font-size: 26px;
            margin: 20px 0;
            text-align: center;
        }

        h2 small {
            font-size: 0.5em;
        }

        .responsive-table li {
            border-radius: 3px;
            padding: 25px 30px;
            display: flex;
            justify-content: space-between;
            margin-bottom: 25px;
        }

        .responsive-table .table-header {
            background-color: #95A5A6;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.03em;
        }

        .responsive-table .table-row {
            background-color: #ffffff;
            box-shadow: 0px 0px 9px 0px rgba(0, 0, 0, 0.1);
        }

        .responsive-table .col-1 {
            flex-basis: 10%;
        }

        .responsive-table .col-2 {
            flex-basis: 40%;
        }

        .responsive-table .col-3 {
            flex-basis: 25%;
        }

        .responsive-table .col-4 {
            flex-basis: 25%;
        }

        @media all and (max-width: 767px) {
            .responsive-table .table-header {
                display: none;
            }

            .responsive-table li {
                display: block;
            }

            .responsive-table .col {
                flex-basis: 100%;
            }

            .responsive-table .col {
                display: flex;
                padding: 10px 0;
            }

            .responsive-table .col:before {
                color: #6C7A89;
                padding-right: 10px;
                content: attr(data-label);
                flex-basis: 50%;
                text-align: right;
            }
        }
    </style>
</head>
<body>
    <h1>Data Karyawan</h1>
    <a href="tambah_data.php">Tambah data</a>
    <br><br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <td>No.</td>
            <td>Name</td>
            <td>Email</td>
            <td>Address</td>
            <td>Gender</td>
            <td>Position</td>
            <td>Status</td>
            <td>Action</td>
        </tr>
        <?php
        include 'koneksi.php';
        $query = mysqli_query($conn, "SELECT * FROM karyawan");
        $no = 1;
        while($hasil = mysqli_fetch_array($query)){
        ?>
         <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $hasil['name']; ?></td>
        <td><?php echo $hasil['email']; ?></td>
        <td><?php echo $hasil['address']; ?></td>
        <td><?php echo $hasil['gender']; ?></td>
        <td><?php echo $hasil['position']; ?></td>
        <td><?php echo $hasil['status']; ?></td>
        <td>
            <a href="delete.php">Delete</a> |
            <a href="update.php">Edit</a>
        </td>
    </tr>
    <?php
        }
    ?>
</body>
</html>