<?php
    session_start();
    require 'connection.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="wCustomerIDth=device-wCustomerIDth, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Worksheet 4.4 Faricha Aulia</title>
</head>
<body>
  
    <div class="container mt-4">

        <?php include('msg.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Manage Customer
                            <a href="create.php" class="btn btn-primary float-end">Add New Customer</a>
                        </h2>
                        <h4> Submitted by: Putri, Faradisha Aldina </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>CustomerCustomerID</th>
                                    <th>CustomerName</th>
                                    <th>ContactName</th>
                                    <th>Address</th>
                                    <th>City</th>
                                    <th>PostalCode</th>
                                    <th>Country</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM tbl_customer";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $tbl_customer)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $tbl_customer['CustomerID']; ?></td>
                                                <td><?= $tbl_customer['CustomerName']; ?></td>
                                                <td><?= $tbl_customer['ContactName']; ?></td>
                                                <td><?= $tbl_customer['Address']; ?></td>
                                                <td><?= $tbl_customer['City']; ?></td>
                                                <td><?= $tbl_customer['PostalCode']; ?></td>
                                                <td><?= $tbl_customer['Country']; ?></td>
                                                <td>
                                                    <a href="view.php?CustomerID=<?= $tbl_customer['CustomerID']; ?>" class="btn btn-info btn-sm">View</a>
                                                    <a href="edit.php?CustomerID=<?= $tbl_customer['CustomerID']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                    <form action="code.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete" value="<?=$tbl_customer['CustomerID'];?>" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> No Record Found </h5>";
                                    }
                                ?>
                                
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>