<?php
session_start();
require 'connection.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Worksheet 4.4 Faricha Aulia</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('msg.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Manage Customer 
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['CustomerID']))
                        {
                            $CustomerID = mysqli_real_escape_string($con, $_GET['CustomerID']);
                            $query = "SELECT * FROM tbl_customer WHERE CustomerID='$CustomerID' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $tbl_customer = mysqli_fetch_array($query_run);
                                ?>
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="CustomerID" value="<?= $tbl_customer['CustomerID']; ?>">

                                    <div class="mb-3">
                                        <label>CustomerName</label>
                                        <input type="text" name="CustomerName" value="<?=$tbl_customer['CustomerName'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>ContactName</label>
                                        <input type="text" name="ContactName" value="<?=$tbl_customer['ContactName'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Address</label>
                                        <input type="text" name="Address" value="<?=$tbl_customer['Address'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>City</label>
                                        <input type="text" name="City" value="<?=$tbl_customer['City'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>PostalCode</label>
                                        <input type="text" name="PostalCode" value="<?=$tbl_customer['PostalCode'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Country</label>
                                        <input type="text" name="Country" value="<?=$tbl_customer['Country'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update" class="btn btn-primary">
                                            Update
                                        </button>
                                    </div>

                                </form>
                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>