<?php
    include("connection.php");
    include("navbar.html");
?>

<?php
    function function_alert($msg) {
        echo "<script type='text/javascript'>alert('$msg');</script>";
    }
    if(isset($_POST["submit"])){
        $account = $_POST["account"];
        $amount = $_POST["amount"];
        $account2 = $_POST["account2"];

        $query = "select name,balance from customer where account='$account'";
        $query2 = "select name, balance from customer where account='$account2'";

        try {
            $result = mysqli_query($conn, $query);
            $result2 = mysqli_query($conn, $query2);

            $row = mysqli_fetch_assoc($result);
            $row2 = mysqli_fetch_assoc($result2);

            $balance = $row["balance"];
            $name = $row["name"];
            $balance2 = $row2["balance"];
            $name2 = $row2["name"];

            $balance = $balance - $amount;
            $balance2 = $balance2 + $amount;

            $sql = "update customer set balance='$balance' where account='$account'";
            $sql2 = "update customer set balance='$balance2' where account='$account2'";
            $sql3 = "insert into transactions(Account_No, Name, Account_No2, Name2, Amount) values('$account', '$name', '$account2', '$name2', '$amount')";

            mysqli_query($conn, $sql);
            mysqli_query($conn, $sql2);

            mysqli_query($conn, $sql3);

            function_alert("The Money Transfered Successfully");
            // header("location: display.php");



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
    <div class="container">
        <!-- <button class="btn btn-primary my-5"><a class="text-light" href="transactions.php">Transactions</a></button>
        <button class="btn btn-primary my-5"><a class="text-light" href="user.php">Add User</a></button>
        <button class="btn btn-primary my-5"><a class="text-light" href="display.php">All Users</a></button> -->
        <form method="post">
            <div class="form-group">
                <label >Account Number</label>
                <input type="number" class="form-control" placeholder="Enter Your Account Number" name="account" autocomplete="off">
            </div>
            <div class="form-group">
                <label >Account Number 2</label>
                <input type="number" class="form-control" name="account2"  placeholder="Enter The Account Number Of Receiver" autocomplete="off">
            </div>
            <div class="form-group">
                <label >Amount</label>
                <input type="number" class="form-control" name="amount"  placeholder="Enter The Amount" autocomplete="off">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Send</button>
        </form>
    </div>

  </body>
</html>