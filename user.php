<?php
    include("connection.php");
    include("navbar.html");
    if(isset($_POST["submit"])){
        $name    = $_POST["name"];
        $email   = $_POST["email"];
        $mobile  = $_POST["mobile"];
        $account = $_POST["account"];
        $balance= $_POST["balance"];
        $query = "insert into customer(name, email, mobile, account, balance) values('$name', '$email', '$mobile','$account', '$balance')";

        try {
            mysqli_query($conn, $query);
            header("location: display.php");
        } catch(mysqli_sql_exception){
            // echo "user didn't created";
            die(mysqli_error($conn));
        }
    }

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>Sparks Bank</title>
  </head>
  <body>
    <div class="container mb-5">
        <!-- <button class="btn btn-primary my-5"><a class="text-light" href="transactions.php">Transactions</a></button>
        <button class="btn btn-primary my-5"><a class="text-light" href="transfer.php">Transfer</a></button>
        <button class="btn btn-primary my-5"><a class="text-light" href="display.php">All Users</a></button> -->
        <form method="post">
            <div class="form-group">
                <label >Name</label>
                <input type="text" class="form-control" placeholder="Enter Your Name" name="name" autocomplete="off">
            </div>
            <div class="form-group">
                <label >Email</label>
                <input type="email" class="form-control" name="email"  placeholder="Enter Your Email" autocomplete="off">
            </div>
            <div class="form-group">
                <label >mobile</label>
                <input type="tel" class="form-control"  placeholder="Enter Your Mobiel Number" name="mobile" autocomplete="off">
            </div>
            <div class="form-group">
                <label >Account Number</label>
                <input type="number" class="form-control"  placeholder="Enter The Balance" name="account" autocomplete="off">
            </div>
            <div class="form-group">
                <label >Balance</label>
                <input type="number" class="form-control"  placeholder="Enter The Balance" name="balance" autocomplete="off">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>

  </body>
</html>