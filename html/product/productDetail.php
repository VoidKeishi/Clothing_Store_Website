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

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Detail</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/productDetail.css">
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

        footer #ul1,
        #social-network {
            padding-left: 0;
        }

        footer .phone-link {
            margin-bottom: 0;
        }
    </style>
</head>

<body>
    <header>
        <?php include 'productNavBar.php' ?>
    </header>
    <div id="div1" style="margin-top: 95px; margin-bottom: 20px">
        <div id="product-container">
            <?php
            $query = "";
            $startQuery;
            
            $id = isset($_GET['id']) ? $_GET['id'] : "";
            
            if($id) {
                $query = "SELECT * FROM dbo.PRODUCTS WHERE ProductID = ?";
                $params = array($id);
                $startQuery = sqlsrv_query($conn, $query, $params);
                $obj = sqlsrv_fetch_array($startQuery, SQLSRV_FETCH_ASSOC);
                
                $imgLink = $obj['Imglink'];
                $productName = $obj['NamePro'];
                $productColor = $obj['Color'];
                $productQuantity = $obj['Quantity'];
                $productPrice = $obj['Price'];
                $productSize = $obj['Size'];

                $text = <<<TEXT
                <div id="frame-content">
                <div id="left-content">
                    <img src="$imgLink" alt="test" style="width: 519px;">
                </div>
                <div id="right-content">
                    <div id="product-title">
                        <h1 id="h1-product-title" style="margin-bottom: 40px">
                            $productName
                        </h1>
                        <div id="price-description">
                            <span id="price">
                                $productPrice
                            </span>
                            <span id="inventory">
                                <i class="bi bi-box2" style="font-size: 20px;"></i>
                                <span id="inventory-number">(1000)</span>
                            </span>
                            <div id="like">
                                <button id="like-button" title="like-button"><i class="bi bi-heart" style="font-size: 20px;"></i></button>
                                <span id="like-number">(100)</span>
                            </div>
                        </div>
                    </div>
                    <div id="color-count-frame">
                        <div id="product-color">
                            <span id="color-title">MÀU SẮC: $productColor</span>
                        </div>
                        <div id="count">
                            <span id="count-title">SỐ LƯỢNG: $productQuantity</span>
                        </div>
                    </div>

                    <div id="product-size" style="margin-top: 30px; margin-bottom: 60px">
                        <span id="size-title">KÍCH CỠ: $productSize</span>
                    </div>
                TEXT;

                echo $text;
            }
            ?>
            

                    <div id="add-to-card">
                        <button id="add-to-card-button" title="add to card">THÊM VÀO GIỎ HÀNG</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <?php include 'productFooter.php' ?>
    </footer>
    <script src="../../js/main.js"></script>
</body>

</html>