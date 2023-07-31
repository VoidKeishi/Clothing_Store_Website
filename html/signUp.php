<?php

$serverName = "MSI\SQLEXPRESS";
$database = "ClothingStore";
$uid = "";
$pass = "";

$connection = [
    "Database" => $database,
    "Uid" => $uid,
    "PWD" => $pass,
    "CharacterSet" => "UTF-8"
];

$conn = sqlsrv_connect($serverName, $connection);

if (!$conn) {
    exit();
}

$userNationalID = '';
$userName = '';
$userDisplayName = '';
$userPhoneNumber = '';
$userEmail = '';
$userBirthday = '';
$userGender = '';
$userPassword = '';
$confirmPassword = '';

$error = "";
$passwordError = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userNationalID = $_POST["userNationalID"];
    $userName = $_POST["userName"];
    $userDisplayName = $_POST["userDisplayName"];
    $userPhoneNumber = $_POST["userPhoneNumber"];
    $userEmail = $_POST["userEmail"];
    $userBirthday = $_POST["userBirthday"];
    $userGender = $_POST["userGender"];
    $userPassword = $_POST["userPassword"];
    $confirmPassword = $_POST["confirmPassword"];

    if(empty($userNationalID) || empty($userName) || empty($userDisplayName) || empty($userPhoneNumber) || empty($userEmail) || empty($userBirthday) || empty($userGender) || 
       empty($userPassword) || empty($confirmPassword)) {
            $error = "Please fill all field !";
    } else {
        if ($userPassword !== $confirmPassword) {
            $passwordError = "Confirm Password is not matched !";
        }
        else {
            $query = "INSERT INTO [CUSTOMERS]([NationalID], [NameCus], [Username], [Pword], [Email], [PhoneNumber], [DOB], [Sex]) VALUES(?, ?, ?, ?, ?, ?, ?, ?)";
            $params = array($userNationalID, $userName, $userDisplayName, $userPassword, $userEmail, $userPhoneNumber, $userBirthday, $userGender);
            $startQuery = sqlsrv_query($conn, $query, $params);
            if($startQuery === false) {
                die( print_r( sqlsrv_errors(), true));
            } else {
                header("Location: login.php");
            }
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="../css/signUp.css">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css" rel="stylesheet" />
</head>

<body>
    <section class="vh-100" style="background-color: #eee; height: 120vh !important;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                                    <div class="text-center">
                                        <a href="../html/home.php">
                                            <img src="../img/Logo.svg" style="width: 185px" alt="logo" />
                                        </a>
                                    </div>
                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                                    <p><?php if($error) echo $error; ?></p>
                                    <form method="post" class="mx-1 mx-md-4">

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="text" id="form3Example1c" name="userNationalID" class="form-control" />
                                                <label class="form-label" for="form3Example1c">National ID</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="text" id="form3Example1c" name="userName" class="form-control" />
                                                <label class="form-label" for="form3Example1c">Your Name</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="text" id="form3Example1c" name="userDisplayName" class="form-control" />
                                                <label class="form-label" for="form3Example1c">Your User Name</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-phone-alt fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="text" id="form3Example1c" name="userPhoneNumber" class="form-control" />
                                                <label class="form-label" for="form3Example1c">Phone Number</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="email" id="form3Example3c" name="userEmail" class="form-control" />
                                                <label class="form-label" for="form3Example3c">Your Email</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-calendar-alt fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="date" id="form3Example3c" name="userBirthday" class="form-control" />
                                                <label class="form-label" for="form3Example3c">Your Birthday</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-venus-mars fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="text" id="form3Example3c" name="userGender" class="form-control" />
                                                <label class="form-label" for="form3Example3c">Your Gender</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="password" id="form3Example4c" name="userPassword" class="form-control" />
                                                <label class="form-label" for="form3Example4c">Password</label>
                                            </div>
                                        </div>

                                        <p><?php if($passwordError) echo $passwordError; ?></p>
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="password" id="form3Example4cd" name="confirmPassword" class="form-control" />
                                                <label class="form-label" for="form3Example4cd">Repeat your password</label>
                                            </div>
                                        </div>

                                        <div class="form-check d-flex justify-content-center mb-5">
                                            <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
                                            <label class="form-check-label" for="form2Example3">
                                                I agree all statements in <a href="#!">Terms of service</a>
                                            </label>
                                        </div>

                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <button type="submit" class="btn btn-primary btn-lg">Register</button>
                                        </div>

                                    </form>

                                </div>
                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                    <img src="../img/signUp.png" class="img-fluid" alt="Sample image" style="width: 100%;">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"></script>
</body>

</html>