<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
    <link href="https://fonts.gstatic.com" rel="preconnect" />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/exampledisplay.css" />
    <title>Shop</title>
</head>

<body>
    <!-- Header -->
    <header>
        <?php include 'navbar.php' ?>
    </header>

    <!-- Slider -->
    <div id="slider">
        <div id="slider-all" style="width: 100%">
            <i class="bi bi-chevron-right slider-next slider-move"></i>
            <i class="bi bi-chevron-left slider-prev slider-move"></i>
            <ul id="slider-list">
                <li class="slider-dot active" data-index="0"></li>
                <li class="slider-dot" data-index="1"></li>
                <li class="slider-dot" data-index="2"></li>
            </ul>
            <div id="slider-warpper">
                <div id="slider-main">
                    <div class="slider-item">
                        <div class="slider-div-img">
                            <img class="slider-img" src="../img/chongNang.png" alt="Phụ kiện chống nắng" style="position: relative; z-index: 2" />
                        </div>
                        <div class="contained">
                            <div class="banner-contained">
                                <div class="banner-logo">
                                    <div class="logo">
                                        <img src="../img/uvProtection.png" alt="Logo" width="100%" />
                                    </div>
                                </div>
                                <a href="">
                                    <div class="banner-content">
                                        <h2>Phụ Kiện Chống Nắng</h2>
                                        <div class="description">
                                            Khám phá bộ sưu tập chống nắng, giúp bạn thoải mái khi
                                            ra ngoài.
                                        </div>
                                        <span class="fr-btn-secondary">Xem Thêm</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="slider-item">
                        <div class="slider-div-img">
                            <img class="slider-img" src="../img/AoThun.png" alt="Áo Thun" />
                        </div>
                        <div class="contained">
                            <div class="banner-contained">
                                <a href="">
                                    <div class="banner-content">
                                        <h2>
                                            Kết cấu mềm mại <br />
                                            Kiểu dáng thời trang
                                        </h2>
                                        <div class="description">Áo thun kẻ sọc tay dài</div>
                                        <div>
                                            <span style="color: white; font-size: 32px">
                                                489.000 VND
                                            </span>
                                        </div>
                                        <span class="fr-btn-secondary">Xem Thêm</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="slider-item">
                        <div class="slider-div-img">
                            <img class="slider-img" src="../img/QuanShort.png" alt="Quần Short" />
                        </div>
                        <div class="contained">
                            <div class="banner-contained">
                                <a href="">
                                    <div class="banner-content">
                                        <h2>
                                            Thiết Kế Tỉ Mỉ <br />
                                            Phong Cách Cổ Điển
                                        </h2>
                                        <div class="description">Quần Short Chino</div>
                                        <div>
                                            <span style="color: white; font-size: 32px">
                                                588.000 VND
                                            </span>
                                        </div>
                                        <span class="fr-btn-secondary">Xem Thêm</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content -->
    <div id="content">
        <div id="content-index1">
            <div id="content1-header">
                <div id="c1h-left">
                    <ul style="display: inline-block; margin-left: 50px">
                        <li><span class="c1h-item bold">Elevate Your Style</span></li>
                        <li><span class="c1h-item">Hàng mới về</span></li>
                        <li><span class="c1h-item">Store Members' Exclusives</span></li>
                    </ul>
                </div>
                <div id="c1h-right">
                    <ul>
                        <li>
                            <a href=""><span id="viewAll">View All</span></a>
                        </li>
                        <li class="chevron">
                            <i class="bi bi-chevron-left chevron-left"></i>
                        </li>
                        <li class="chevron">
                            <i class="bi bi-chevron-right chevron-right"></i>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Display -->
            <div class="productList" id="displayexample">
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

                $query = "SELECT * FROM dbo.PRODUCTS";
                $startQuery = sqlsrv_query($conn, $query);
                if ($startQuery) {
                    while ($obj = sqlsrv_fetch_array($startQuery, SQLSRV_FETCH_ASSOC)) {
                        $imgLink = $obj['Imglink'];
                        $productName = $obj['NamePro'];
                        $productPrice = $obj['Price'];
                        $productID = $obj['ProductID'];
                        $text = <<<TEXT
                            <div class="product-item">
                                <img src="$imgLink" alt="Product 1" />
                                <h3>$productName</h3>
                                <span class="product-price">$$productPrice</span>
                                <a href="./product/productDetail.php?id=$productID" class="fr-btn-secondary">Buy Now</a>
                            </div>
                            TEXT;
                        echo $text;
                    }
                }
                ?>
            </div>
        </div>
        <!-- End display -->

        <div id="content-index2" style="position: relative">
            <div id="content-index2-frame" class="contained">
                <span id="span1">TRỞ THÀNH HỘI VIÊN & HƯỞNG ƯU ĐÃI 15%</span>
                <a href="" id="a2">
                    <span>Đăng ký miễn phí</span>
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <?php include 'footer.php' ?>
    </footer>
    <script src="../js/main.js"></script>
</body>

</html>