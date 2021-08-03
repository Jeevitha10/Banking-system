<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <title>Banking System</title>
    
</head>


<body>
    <?php
  include 'navbar.php';
  ?>
  
    <main class="index">
        <h1 class="index__title">Welcome to Banking System</h1>
        <div class="cards">
            <div class="card">
                <img src="img/users.png" alt="card-1" class="card__img" />
                <a href="allusers.php" class="card__btn">All users</a>
            </div>
            <div class="card">
                <img src="img/moneytransfer1.png" alt="card-1" class="card__img" />
                <a href="transfermoney.php" class="card__btn">Transfer money</a>
            </div>
            <div class="card">
                <img src="img/file-manager.png" alt="card-1" class="card__img" />
                <a href="transactionhistory.php" class="card__btn">Transaction history</a>
            </div>
        </div>
    </main>

    <footer class="footer">
        <span class="footer__text">&copy 2021. Made by <b>J.Jeevitha</b> For the Project of <b>The Sparks
                Foundation</b></span>
    </footer>

    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>
