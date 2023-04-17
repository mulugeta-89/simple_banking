<?php
    include("connection.php");
    include("navbar.html");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Crud-operation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

</head>
<body>
    <div class="container">
            <!-- <button class="btn btn-primary my-5"><a class="text-light" href="user.php">Add User</a></button>
            <button class="btn btn-primary my-5"><a class="text-light" href="transfer.php">Transfer</a></button>
            <button class="btn btn-primary my-5"><a class="text-light" href="display.php">All Users</a></button> -->


            <table class="table">
  <thead>
    <tr>
      <th scope="col">Account-Number 1</th>
      <th scope="col">Name</th>
      <th scope="col">Account-Number 2</th>
      <th scope="col">Name 2</th>
      <th scope="col">Amount</th>
      <th scope="col">Operation</th>

    </tr>
  </thead>

  <?php
    $query = "select * from `transactions` order by id DESC";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0){
        while($row=mysqli_fetch_assoc($result)){
            $id = $row["id"];
            $account    = $row["Account_No"];
            $name   = $row["Name"];
            $account2  = $row["Account_No2"];
            $name2 = $row["Name2"];
            $amount = $row["Amount"];
            echo '<tr>
                    <th scope="row">'.$account.'</th>
                    <td>'.$name.'</td>
                    <td>'.$account2.'</td>
                    <td>'.$name2.'</td>
                    <td>'.$amount.'</td>
                    <td>
                        <button class="btn btn-danger"><a  href="deleteTransaction.php?deletedTra='.$id.'" class="text-light">Delete</a></button>
                    </td>
                    </tr>';
        }
    }
  ?>
        
</table>
    </div>
</body>
</html>