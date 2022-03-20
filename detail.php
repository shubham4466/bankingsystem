<?php
require_once "pdo.php";
$senderacc='';
$recieveracc='';
$amount='';
$senderbalance;

if(isset($_GET['senderacc']) && isset($_GET['senderbalance'])){
    $senderacc = $_GET['senderacc'];
    $senderbalance = $_GET['senderbalance'];
}
if ( isset($_POST['acc_no']) && isset($_POST['amount'])) {
    $recieveracc = $_POST['acc_no'];
    $amount = $_POST['amount'];

    //add money to reciever account
    $sql = "UPDATE users SET balance = balance + ".$amount." WHERE acc_no=".$recieveracc;
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    //delete money from sender account
    $sql = "UPDATE users SET balance = balance - ".$amount." WHERE acc_no=".$senderacc;
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    //insert record to transaction table
    $sql = "INSERT INTO transaction (sender , reciever, amount, date) 
              VALUES (".$senderacc." ,".$recieveracc." ,".$amount." ,'".date("Y-m-d h:i:sa")."')";
    
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
}
?>
<!DOCTYPE html>

<head>
    <title>Banking System | Transfer Money</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<style>
        .navbar-custom {
            background-color: #056571;
        }

        body {
            background-color: #F8EEE7;
        }

        .btn-color {
            background-color: #FF6A5C;
        }
    </style>

<body>
<div id="navbar">
        <nav class="navbar navbar-expand-lg navbar-light navbar-custom">
            <div class="container-fluid">
                <a class="navbar-brand text-light fw-bold" href="index.php">
                    <img src="images/logo.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
                    National Bank
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item ">
                            <a class="nav-link active text-light" aria-current="page" href="index.php">Home </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link active text-light" aria-current="page" href="createuser.php">Create
                                User</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link active text-light" aria-current="page" href="removeuser.php">Remove
                                User</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-light" aria-current="page" href="transfermoney.php">Transfer
                                Money</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-light" aria-current="page"
                                href="transactionhistory.php">Transaction History</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="row my-4">
        <center>
            <h1>Transfer Money</h1>
        </center>
    </div>
    <div class="container my-5" id="userdetails">
        <div class="card">
            <div class="card-body">
                <h3>Sender Account</h3>
                <h2>
                    <?php
                        echo $senderacc
                    ?>
                </h2>

                <h3>Sender Balance</h3>
                <h2>
                    <?php
                        echo $senderbalance
                    ?>
                </h2>
            </div>
        </div>
    </div>
    <div class="container my-5" id="tranfer-money">
        <div class="card">
            <div class="card-body">
                <h3>Reciever</h3>
                <form method="post">
                    <div class="form-floating mb-3">
                        <input type="text" name="acc_no" class="form-control" id="floatingInput" placeholder="Reciever Acc">
                        <label for="floatingInput">Reciever Acc</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="amount" class="form-control" id="floatingInput" placeholder="Amount">
                        <label for="floatingInput">Amount</label>
                    </div>
                    <input type="submit" onclick="alertmsg()" class="btn btn-primary" value="Transfer">
                </form>
            </div>
        </div>
    </div>
    <footer class="bg-light text-center text-lg-start">
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0,0.8);">
            <div class="text-light">© 2022 Copyright</div>
        </div>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
    <script>
    function alertmsg(){
        window.alert('Money Transferred succsessfully');
    }  
</script>

</html>