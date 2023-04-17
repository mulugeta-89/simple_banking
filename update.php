<?php
    include("connection.php");
    $id = $_GET["updated"];
    $sql = "select * from customer where id=$id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $name=$row["name"];
    $email = $row["email"];
    $mobile= $row["mobile"];
    $account = $row["account"];
    $balance=$row["balance"];


    if(isset($_POST["submit"])){
        $name    = $_POST["name"];
        $email   = $_POST["email"];
        $mobile  = $_POST["mobile"];
        $account = $_POST["account"];
        $balance= $_POST["balance"];

        $query = "update `customer` set id=$id, name='$name', email='$email', mobile='$mobile',account='$account', balance='$balance' where id=$id";

        try {
            mysqli_query($conn, $query);
            header("location: display.php");
        } catch(mysqli_sql_exception){
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
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label >Name</label>
                <input type="text" class="form-control" placeholder="Enter Your Name" name="name" autocomplete="off" value="<?php echo $name
                ?>">
            </div>
            <div class="form-group">
                <label >Email</label>
                <input type="email" class="form-control" name="email"  placeholder="Enter Your Email" autocomplete="off" value="<?php echo $email
                ?>">
            </div>
            <div class="form-group">
                <label >mobile</label>
                <input type="tel" class="form-control"  placeholder="Enter Your Mobiel Number" name="mobile" autocomplete="off" value="<?php echo $mobile
                ?>">
            </div>
            <div class="form-group">
                <label >Account Number</label>
                <input type="number" class="form-control"  placeholder="Enter Your Account Number" name="account" autocomplete="off" value="<?php echo $account
                ?>">
            </div>
            <div class="form-group">
                <label >Balance</label>
                <input type="number" class="form-control"  placeholder="Enter The Balance" name="balance" autocomplete="off" value="<?php echo $balance
                ?>">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>

  </body>
</html>

