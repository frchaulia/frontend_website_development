<?php
session_start();
require 'connection.php';

if(isset($_POST['delete']))
{
    $CustomerID = mysqli_real_escape_string($con, $_POST['delete']);

    $query = "DELETE FROM tbl_customer WHERE CustomerID='$CustomerID' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Deleted Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Not Deleted";
        header("Location: index.php");
        exit(0);
    }
}

if(isset($_POST['update']))
{
    $CustomerID = mysqli_real_escape_string($con, $_POST['CustomerID']);

    $CustomerName = mysqli_real_escape_string($con, $_POST['CustomerName']);
    $ContactName = mysqli_real_escape_string($con, $_POST['ContactName']);
    $Address = mysqli_real_escape_string($con, $_POST['Address']);
    $City = mysqli_real_escape_string($con, $_POST['City']);
    $PostalCode = mysqli_real_escape_string($con, $_POST['PostalCode']);
    $Country = mysqli_real_escape_string($con, $_POST['Country']);

    $query = "UPDATE tbl_customer SET CustomerName='$CustomerName', ContactName='$ContactName', Address='$Address', City='$City', PostalCode='$PostalCode', Country='$Country' WHERE CustomerID='$CustomerID'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Updated Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Not Updated";
        header("Location: index.php");
        exit(0);
    }

}


if(isset($_POST['save']))
{
    $CustomerName = mysqli_real_escape_string($con, $_POST['CustomerName']);
    $ContactName = mysqli_real_escape_string($con, $_POST['ContactName']);
    $Address = mysqli_real_escape_string($con, $_POST['Address']);
    $City = mysqli_real_escape_string($con, $_POST['City']);
    $PostalCode = mysqli_real_escape_string($con, $_POST['PostalCode']);
    $Country = mysqli_real_escape_string($con, $_POST['Country']);

    $query = "INSERT INTO tbl_customer (CustomerName,ContactName,Address,City,PostalCode,Country) VALUES ('$CustomerName','$ContactName','$Address','$City','$PostalCode','$Country')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Added Successfully";
        header("Location: create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Not Created";
        header("Location: create.php");
        exit(0);
    }
}

?>