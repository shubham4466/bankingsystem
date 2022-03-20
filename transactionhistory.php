<?php
require_once "pdo.php";

$stmt = $pdo->query("SELECT s_no,sender, reciever, amount,date  FROM transaction");
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<head>
    <title>Banking System | Transaction History</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
</head>
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
            <h1>Transaction History</h1>
        </center>
    </div>
    <div class="container my-5">
        <table class="table table-striped table-hover">
            <thead>
                <th>S No</th>
                <th>Sender Acc</th>
                <th>Reciever Acc</th>
                <th>Amount</th>
                <th>Date</th>

            </thead>
            <?php
                foreach ( $rows as $row ) {
                    echo "<tr><td>";
                    echo($row['s_no']);
                    echo("</td><td>");
                    echo($row['sender']);
                    echo("</td><td>");
                    echo($row['reciever']);
                    echo("</td><td>");
                    echo($row['amount']);
                    echo("</td><td>");
                    echo($row['date']);
                    echo("</td></tr>");
                }
            ?>
        </table>
    </div>
    <footer class="bg-light text-center text-lg-start">
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0,0.8);">
            <div class="text-light">© 2022 Copyright</div>
        </div>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>