<?php
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

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Customer View Details 
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
                        
                            <div class="mb-3">
                                <label>CustomerName</label>
                                <p class="form-control">
                                    <?=$tbl_customer['CustomerName'];?>
                                </p>
                            </div>
                            <div class="mb-3">
                                <label>ContactName</label>
                                <p class="form-control">
                                    <?=$tbl_customer['ContactName'];?>
                                </p>
                            </div>
                            <div class="mb-3">
                                <label>Address</label>
                                <p class="form-control">
                                    <?=$tbl_customer['City'];?>
                                </p>
                            </div>
                            <div class="mb-3">
                                <label>PostalCode</label>
                                <p class="form-control">
                                    <?=$tbl_customer['PostalCode'];?>
                                </p>
                            </div>
                            <div class="mb-3">
                                <label>Country</label>
                                <p class="form-control">
                                    <?=$tbl_customer['Country'];?>
                                </p>
                            </div>

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