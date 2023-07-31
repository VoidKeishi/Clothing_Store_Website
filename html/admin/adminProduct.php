<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="siteBar.css">
    <link rel="stylesheet" href="adminProduct.css">
    <title>Product</title>
</head>
<body>
  <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
    <div class="position-sticky">
      <div class="list-group list-group-flush mx-3 mt-4">
        <a
          href="adminProduct.php"
          class="list-group-item list-group-item-action py-2 ripple active"
          aria-current="true" 
        >
          <i class="fas fa-tshirt fa-fw me-3"></i><span>Sản Phẩm</span>
        </a>
        <a href="adminCustomer.php" class="list-group-item list-group-item-action py-2 ripple">
          <i class="fas fa-user-alt fa-fw me-3"></i><span>Khách Hàng</span>
        </a>
        <a href="adminIncome.php" class="list-group-item list-group-item-action py-2 ripple"
          ><i class="fas fa-wallet fa-fw me-3"></i><span>Doanh Thu</span></a
        >
        <a href="adminAddProduct.php" class="list-group-item list-group-item-action py-2 ripple"
          ><i class="fas fa-upload fa-fw me-3"></i><span>Thêm Sản Phẩm</span></a
        >
        <a href="adminOders.php" class="list-group-item list-group-item-action py-2 ripple"
          ><i class="fas fa-chart-bar fa-fw me-3"></i><span>Orders</span></a
        >
        <a href="#" class="list-group-item list-group-item-action py-2 ripple"
          ><i class="	fas fa-sync-alt fa-fw me-3"></i><span>Đăng Xuất</span></a
        >
      </div>
    </div>
  </nav>
  <div id="frame">
    <div id="content">
      <div id="frame-content">
        <div id="main-content">
          <div id="search-save" style="display: flex;">
            <input type="text" placeholder="Mã sản phẩm" style="border: none; background-color: rgba(0, 0, 0, 0);">
            <button style="background-color: rgba(0, 0, 0, 0); border: none; margin-left: 10px;">
              <i class="fas fa-search" style="font-size: 23px;"></i>
            </button> 
            <button id="save-button">SAVE</button>
          </div>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Delete</th>
                <th scope="col">Id</th>
                <th scope="col">Product Name</th>
                <th scope="col">Count</th>
                <th scope="col">Color</th>
                <th scope="col">Size</th>
                <th scope="col">Price</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><button class="delete-button"><i class="fas fa-times fa-fw me-3"></i></button></td>
                <th scope="row">1</th>
                <td><input type="text" placeholder="Mark"></td>
                <td><input type="text" placeholder="Otto"></td>
                <td><input type="text" placeholder="@mdo"></td>
                <td><input type="text" placeholder="@mdo"></td>
                <td><input type="text" placeholder="@mdo"></td>
              </tr>
              <tr>
                <td><button class="delete-button"><i class="fas fa-times fa-fw me-3"></i></button></td>
                <th scope="row">2</th>
                <td><input type="text" placeholder="@mdo"></td>
                <td><input type="text" placeholder="@mdo"></td>
                <td><input type="text" placeholder="@mdo"></td>
                <td><input type="text" placeholder="@mdo"></td>
                <td><input type="text" placeholder="@mdo"></td>
              </tr>
              <tr>
                <td><button class="delete-button"><i class="fas fa-times fa-fw me-3"></i></button></td>
                <th scope="row">3</th>
                <td><input type="text" placeholder="@mdo"></td>
                <td><input type="text" placeholder="NULL"></td>
                <td><input type="text" placeholder="@mdo"></td>
                <td><input type="text" placeholder="@mdo"></td>
                <td><input type="text" placeholder="@mdo"></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</body>
</html>