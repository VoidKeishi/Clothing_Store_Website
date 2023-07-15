<?php
$serverName = "MSI\SQLEXPRESS";
$database = "ClothingStore";
$uid = "";
$pass = "";

$connection = [
    "Database" => $database,
    "Uid" => $uid,
    "PWD" => $pass
];

$conn = sqlsrv_connect($serverName, $connection);

if (!$conn) {
    exit();
}

$userEmail = "";
$userPassword = "";
$error = "";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form values
    $userEmail = $_POST["userEmail"];
    $userPassword = $_POST["userPassword"];

    // Validate form data
    if (empty($userEmail) || empty($userPassword)) {
        $error = "Please fill in all fields.";
    } else {
        $query1 = "SELECT Email, Pword FROM dbo.CUSTOMERS WHERE Email = ? AND Pword = ?";
        $params = array($userEmail, $userPassword);
        $startQuery = sqlsrv_query($conn, $query1, $params);
        $obj = sqlsrv_fetch_array($startQuery, SQLSRV_FETCH_ASSOC);
        if ($obj) {
            // Input is valid, redirect to new page
            header("Location: home.php");
        } else {
            $error = 'Email or Password is incorrect !';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css" rel="stylesheet" />
</head>

<body>
    <section class="h-100 gradient-form" style="background-color: white">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black" style="border: 1px solid #dadada">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">
                                    <div class="text-center">
                                        <a href="../html/home.php">
                                            <img src="../img/Logo.svg" style="width: 185px" alt="logo" />
                                        </a>
                                        <h4 class="mt-1 mb-5 pb-1">RAKU VIET NAM</h4>
                                    </div>

                                    <form method="post">
                                        <p>Đăng nhập bằng Email hoặc SĐT</p>
                                        <p><?php if ($error) {
                                                echo $error;
                                            } ?></p>

                                        <div class="form-outline mb-4">
                                            <input type="email" id="form2Example11" name="userEmail" class="form-control login-input" placeholder="Phone number or email address" />
                                            <label class="form-label lable-input" for="form2Example11">Username</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" id="form2Example22" name="userPassword" class="form-control login-input" />
                                            <label class="form-label lable-input" for="form2Example22">Password</label>
                                        </div>

                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <input class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit" value="Log in" style="
                                            background-color: rgb(77, 77, 77);
                                            border: 1px solid #535353;
                                            ">
                                            <a class="text-muted" href="../html/ForgotPassword.php">Forgot password?</a>
                                        </div>

                                        <div class="d-flex align-items-center justify-content-center pb-4">
                                            <p class="mb-0 me-2">Don't have an account?</p>
                                            <a href="../html/signUp.php">
                                                <button type="button" class="btn btn-outline-danger">
                                                    Create new
                                                </button>
                                            </a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <img src="../img/login.png" alt="" style="width: 100%; height: 595px" />
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