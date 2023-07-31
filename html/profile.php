<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css"
    rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="../css/style.css">
    <style>
        header ul {
          padding-left: 0;
        }
        #search-button {
          height: 45.4px !important;
          display: flex;
          align-items: center;
          justify-content: center;
        }
        footer #ul1, #social-network {
          padding-left: 0;
        }
        footer .phone-link {
          margin-bottom: 0;
        }
      </style>
</head>
<body>

    <header>
        <?php include 'navbar.php' ?>
    </header>

    <div class="container rounded bg-white mt-5 mb-5" style="border: 1px solid rgb(204, 204, 204); margin-top: 86px !important">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                    <span class="font-weight-bold">Hiew Tram Cam</span>
                    <span class="text-black-50">khongTraLoi@gmail.com</span>
                </div>
                <div class="mt-5 text-center" style="margin-top: 0 !important">
                    <a href="">
                        <button class="btn btn-primary profile-button" type="button" style="background-color: rgb(132, 73, 6);
                            border: 1px solid #535353;;">Lịch Sử Mua Hàng</button>
                    </a>
                </div>
            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control" placeholder="full name" value=""></div>
                        <div class="col-md-6"><label class="labels">Phone Number</label><input type="text" class="form-control" placeholder="enter phone number" value=""></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Email</label><input type="text" class="form-control" placeholder="enter email" value=""></div>
                        <div class="col-md-12"><label class="labels">Address</label><input type="text" class="form-control" placeholder="enter address" value=""></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6"><label class="labels">Date of Birth</label><input type="text" class="form-control" placeholder="dd/mm/yyyy" value=""></div>
                        <div class="col-md-6"><label class="labels">Country</label><input type="text" class="form-control" value="" placeholder="country"></div>
                    </div>
                    <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button" style="background-color: rgb(77, 77, 77);
                        border: 1px solid #535353;;">Save Profile</button></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center experience">
                        <span>Change Password</span>
                    </div>
                    <br>
                    <div class="col-md-12"><label class="labels">Old Passworld</label><input type="password" class="form-control" placeholder="enter old password" value=""></div> <br>
                    <div class="col-md-12"><label class="labels">New Passworld</label><input type="password" class="form-control" placeholder="enter new password" value=""></div> <br>
                    <div class="col-md-12"><label class="labels">Confirm New Password</label><input type="password" class="form-control" placeholder="confirm new password" value=""></div>
                    <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button" style="background-color: rgb(77, 77, 77);
                        border: 1px solid #535353;;">Save Passowrd</button></div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <?php include 'footer.php' ?>
    </footer>
    <script src="../js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
</body>
</html>