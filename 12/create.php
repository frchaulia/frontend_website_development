
<?php
session_start();
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
                        <h4>Add New Customer
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">

                            <div class="mb-3">
                                <label>CustomerID</label>
                                <input type="text" name="CustomerID" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>CustomerName</label>
                                <input type="text" name="CustomerName" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>ContactName</label>
                                <input type="text" name="ContactName" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Address</label>
                                <input type="text" name="Address" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>City</label>
                                <input type="text" name="City" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>PostalCode</label>
                                <input type="text" name="PostalCode" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Country</label>
                                <input type="text" name="Country" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save" class="btn btn-primary">Save Customer</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>