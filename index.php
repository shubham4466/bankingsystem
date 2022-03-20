<!DOCTYPE html>

<head>
    <title>Banking System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
            <h1>Home</h1>
        </center>
    </div>
    <div id="section1" class="container my-5">
        <div class="row">
            <div class="col-2">
            </div>
            <div class="col-4 my-4">
                <div class="card ">
                    <div class="card-body">
                        <center><img src="images/people.png" style="width:200px;"></center>
                    </div>
                    <button type="button" onclick="createuser()" class="btn btn-color">Create User</button>
                </div>
            </div>
            <div class="col-4 my-4">
                <div class="card">
                    <div class="card-body">
                        <center><img src="images/user.png" style="width:200px;"></center>
                    </div>
                    <button type="button" onclick="removeuser()" class="btn btn-color">Remove User</button>
                </div>
            </div>
            <div class="col-2">
            </div>
        </div>
        <div class="row">
            <div class="col-2">
            </div>
            <div class="col-4 my-4">
                <div class="card">
                    <div class="card-body">
                        <center><img src="images/transfer-money.png" style="width:200px;"></center>
                    </div>
                    <button type="button" onclick="transfermoney()" class="btn btn-color">Transfer Money</button>
                </div>
            </div>
            <div class="col-4 my-4">
                <div class="card">
                    <div class="card-body">
                        <center><img src="images/bills.png" style="width:200px;"></center>
                    </div>
                    <button type="button" onclick="transactionhistory()" class="btn btn-color">Transaction History</button>
                </div>
            </div>
            <div class="col-2">
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
        function createuser() {
          location.replace("createuser.php")
        }
        function removeuser() {
          location.replace("removeuser.php")
        }
        function transfermoney() {
          location.replace("transfermoney.php")
        }
        function transactionhistory() {
          location.replace("transactionhistory.php")
        }

    </script>

</html>