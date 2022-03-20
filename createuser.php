<?php
require_once "pdo.php";

if ( isset($_POST['name']) && isset($_POST['email']) 
     && isset($_POST['pan']) && isset($_POST['gender']) && isset($_POST['balance'])) {
    $sql = "INSERT INTO users (name, email, pan,gender,balance) 
              VALUES (:name, :email, :pan,:gender,:balance)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(
        ':name' => $_POST['name'],
        ':email' => $_POST['email'],
        ':pan' => $_POST['pan'],
        ':gender' => $_POST['gender'],
        ':balance' => $_POST['balance']));
}
?>

<!DOCTYPE html>

<head>
    <title>Banking System | Create User</title>
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
            <h1>Create User</h1>
        </center>
    </div>
    <div id="section1">
        <div class="row my-5">
            <div class="col-1">
            </div>
            <div class="col-4 mb-5">
                <div class="card">
                    <div class="card-body">
                        <div id="img">
                            <center><img src="images/profile.png" style="width:250px;"></center>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 mb-5">
                <div class="card">
                    <div class="card-body">
                        <div id="details">
                            <form method="post" name="myForm">
                                <div class="form-floating mb-3">
                                    <input type="text" name="name" id="name" class="form-control" id="floatingInput"
                                        placeholder="First Name + Last Name" required>
                                    <label for="floatingInput">Full Name</label>
                                    <small id="namevalid" class="form-text text-muted invalid-feedback">
                                        Your username must be 2-10 characters long and should not start with a number
                                      </small>

                                </div>
                                <div class="form-floating mb-3">
                                    <input type="email" name="email" id="email" class="form-control"
                                        id="floatingPassword" placeholder="abc@xyz.com" required>
                                    <label for="floatingPassword">Email</label>

                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" name="pan" id="pan" class="form-control" id="floatingPassword"
                                        placeholder="PAN Card Number" required>
                                    <label for="floatingPassword">PAN</label>

                                </div>
                                <div class="row mb-2 p-2">
                                    <div class="col-6 form-check ">
                                        <input name="gender" value="male" class="form-check-input" type="radio"
                                            name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Male
                                        </label>
                                    </div>
                                    <div class="col-6 form-check ">
                                        <input name="gender" value="female" class="form-check-input" type="radio"
                                            name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Female
                                        </label>
                                    </div>

                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" name="balance" id="balance" class="form-control"
                                        id="floatingPassword" placeholder="INR" required>
                                    <label for="floatingPassword">Opening Balance</label>
                                    <b><span class="formerror"> </span></b>
                                </div>
                                <div id="submit button">
                                    <input type="submit" onclick="msg()" class="btn btn-primary"
                                        value="Create User"></input>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-1">
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
    function msg(){
        window.alert("User Created Successfully");
    }
</script>
</html>