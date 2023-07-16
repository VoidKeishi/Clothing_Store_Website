<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order History</title>
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="../css/oderHistory.css">
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
    <div id="oder-frame" style="margin-top: 65px">
        <div id="oder-container">
            <div id="card">
                <div id="card-body">
                    <div id="oderHeader">
                        <h4 id="h4-header">Your Oder</h4>
                        <p id="p-header">Check the status of recent orders, manage returns, and discover similar products</p>
                    </div>
                    <div class="product-container">
                        <div class="oder-detail">
                            <div class="detail-left">
                                <h5 class="oder-code">Oder #0001</h5>
                                <span class="oder-date">15 tháng 7, 2023</span>
                            </div>
                            <div class="detail-right">
                                Total: 100.000 VND
                            </div>
                        </div>
                        <div class="product-row">
                            <div class="product-frame">
                                <div class="product-flex">
                                    <img src="../product_img/test.png" alt="test" style="width: 130px;">
                                    <div class="product-detail">
                                        <h5 class="product-header">
                                            Product Name
                                        </h5>
                                        <span class="product-kind">
                                            Color: <span>Product Color</span>,
                                            Size: <span>Product Size</span>
                                        </span>
                                        <div class="product-price">
                                            <h4 class="price">489.000 VND</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-button">
                                <a href="" class="product-link">Product Detail</a>
                            </div>
                        </div>
                        <hr class="product-hr">
                        <div class="product-row">
                            <div class="product-frame">
                                <div class="product-flex">
                                    <img src="../product_img/test.png" alt="test" style="width: 130px;">
                                    <div class="product-detail">
                                        <h5 class="product-header">
                                            Product Name
                                        </h5>
                                        <span class="product-kind">
                                            Color: <span>Product Color</span>,
                                            Size: <span>Product Size</span>
                                        </span>
                                        <div class="product-price">
                                            <h4 class="price">489.000 VND</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-button">
                                <a href="" class="product-link">Product Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="product-container">
                        <div class="oder-detail">
                            <div class="detail-left">
                                <h5 class="oder-code">Oder #0002</h5>
                                <span class="oder-date">14 tháng 7, 2023</span>
                            </div>
                            <div class="detail-right">
                                Total: 200.000 VND
                            </div>
                        </div>
                        <div class="product-row">
                            <div class="product-frame">
                                <div class="product-flex">
                                    <img src="../product_img/test.png" alt="test" style="width: 130px;">
                                    <div class="product-detail">
                                        <h5 class="product-header">
                                            Product Name 2
                                        </h5>
                                        <span class="product-kind">
                                            Color: <span>Product Color 2</span>,
                                            Size: <span>Product Size 2</span>
                                        </span>
                                        <div class="product-price">
                                            <h4 class="price">589.000 VND</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-button">
                                <a href="" class="product-link">Product Detail</a>
                            </div>
                        </div>
                        <hr class="product-hr">
                        <div class="product-row">
                            <div class="product-frame">
                                <div class="product-flex">
                                    <img src="../product_img/test.png" alt="test" style="width: 130px;">
                                    <div class="product-detail">
                                        <h5 class="product-header">
                                            Product Name 2
                                        </h5>
                                        <span class="product-kind">
                                            Color: <span>Product Color 2</span>,
                                            Size: <span>Product Size 2</span>
                                        </span>
                                        <div class="product-price">
                                            <h4 class="price">589.000 VND</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-button">
                                <a href="" class="product-link">Product Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <?php include 'footer.php' ?>
      </footer>
      <script src="../js/main.js"></script>
</body>
</html>