<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Detail</title>
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
    />
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
        <?php include 'productNavBar.php' ?>
      </header>
    <div id="div1" style="margin-top: 95px; margin-bottom: 20px">
        <div id="product-container">
            <div id="frame-content">
                <div id="left-content">
                    <img src="../../productDetail.img/test.png" alt="test" style="width: 519px;">
                </div>
                <div id="right-content">
                    <div id="product-title">
                        <h1 id="h1-product-title" style="margin-bottom: 40px">
                            AIRism Áo Polo Cổ Thường
                        </h1>
                        <div id="price-description">
                            <span id="price">
                                391.000 VND
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
                        <div id="text-description">
                            Vải 'AIRism' mượt mà, thoáng mát. Một chiếc polo đa năng cho trang phục thường ngày hoặc tinh tế
                        </div>
                    </div>
                    <div id="color-count-frame">
                        <div id="product-color">
                            <span id="color-title">MÀU SẮC:</span>
                            <ul>
                                <li><button class="color-button">
                                    <div class="square white" style="border: 3px solid rgb(255, 225, 0)"></div>
                                </button></li>
                                <li><button class="color-button">
                                    <div class="square black"></div>
                                </button></li>
                                <li><button class="color-button">
                                    <div class="square blue"></div>
                                </button></li>
                                <script>
                                    var divItem = document.querySelectorAll("#product-color ul li div")
                                    for (let i=0; i<3; i++) {
                                        divItem[i].onclick = function(e) {
                                            for (let j=0; j<3; j++) {
                                                divItem[j].style = "border: none"
                                            }
                                            e.target.style = "border: 3px solid rgb(255, 225, 0)"
                                        }
                                    }
                                </script>
                            </ul>
                        </div>
                        <div id="count">
                            <span id="count-title">SỐ LƯỢNG:</span>
                            <label for="">
                                <input type="text" id="count-input" placeholder="số lượng">
                            </label>
                        </div>
                    </div>

                    <div id="product-size" style="margin-top: 30px; margin-bottom: 60px">
                        <span id="size-title">KÍCH CỠ:</span>
                        <ul>
                            <li><button class="size-button">
                                <div class="size" style="border: 3px solid black">XS</div>
                            </button></li>
                            <li><button class="size-button">
                                <div class="size">S</div>
                            </button></li>
                            <li><button class="size-button">
                                <div class="size">M</div>
                            </button></li>
                            <li><button class="size-button">
                                <div class="size">L</div>
                            </button></li>
                            <li><button class="size-button">
                                <div class="size">XL</div>
                            </button></li>
                            <li><button class="size-button">
                                <div class="size">XXL</div>
                            </button></li>
                            <script>
                                var divItem2 = document.querySelectorAll("#product-size ul li div")
                                for (let i=0; i<6; i++) {
                                    divItem2[i].onclick = function(e) {
                                        for (let j=0; j<6; j++) {
                                            divItem2[j].style = "border: 0.8px solid rgb(177, 177, 177)"
                                        }
                                        e.target.style = "border: 3px solid black"
                                    }
                                }
                            </script>
                        </ul>
                    </div>

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