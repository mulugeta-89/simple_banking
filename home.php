<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css" type="text/css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">

    <title>Sparks Bank</title>
</head>
<body>
    <div class="container">
        <nav id="navs" style="display: flex; flex-direction: row; align-items: center; justify-content: space-between;">
                <h4><a href="home.php">Home</a></h4>
                <div style="display: flex; flex-direction: row; align-items: center; justify-content: space-between; gap: 40px;" >
                    <h4 ><a href="display.php" >All Users</a></h4>
                    <h4><a  href="transactions.php" >All Transaction</a></h4>
                    <h4><a  href="user.php" >Add Customer</a></h4>
                    <h4><a href="transfer.php">Transfer</a></h4>
                </div>
        </nav>
        <div >
            <img src="bank1.png" class="img-fluid" alt="Responsive image">
        </div>
        <div class="hero">
            <div class="content">
                <p>Welcome to our bank's website! We're here to provide you with exceptional financial services and help you reach your financial goals. We offer a variety of banking products and services to suit your needs, including checking and savings accounts, loans, and investment opportunities. Our friendly and knowledgeable staff is here to assist you every step of the way, and we take security seriously to protect your data. Thank you for choosing our bank, and we look forward to serving you!</p>
            </div>
            <div class="options">
                <h3>What do You want?</h3>
                <h2>Create Account</h2>
                <button><a href="user.php" style="text-decoration: none; color: white;">Create Account</a></button>

                <h3>Transfer Money</h3>
                <button><a href="transfer.php" style="text-decoration: none; color: white;">Transfer</a></button>
            </div>
        </div>
        
        
        <div style="height:70px; background-color: #0d6efd; text-align: center; display: flex; align-items: center; justify-content: center; color: white; margin-bottom: 20px;">
            <h3>Sparks International Bank</h3>
        </div>
    </div>
    
</body>
</html>
