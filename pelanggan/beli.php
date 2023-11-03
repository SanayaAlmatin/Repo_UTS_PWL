<?php 
    include "../koneksi.php";
    $qry_detail_produk=mysqli_query($conn,"select * from produk where id_produk = '".$_GET['id_produk']."'");
    $dt_produk=mysqli_fetch_array($qry_detail_produk);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>NunaCraft</title>
  <script src="https://code.iconify.design/iconify-icon/1.0.0/iconify-icon.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css" />
</head>
<!-- Navbar Start  -->

<body>
  <section id="header">
    <a href="#"><img src="img/features/logo.svg" class="logo" alt="" /></a>

    <div>
      <ul id="navbar">
        <li><a href="index.php">Home</a></li>
        <li><a href="praduk.php">Product</a></li>
        <li><a href="history.html">History</a></li>
        <li><a href="logout.php">Logout</a></li>
        <li>
          <a class="active" href="chart.php">
            <iconify-icon icon="ant-design:shopping-cart-outlined" alt="cart">
          </a>
        </li>
      </ul>
    </div>
  </section>
  <!-- End of Navbar -->

  <div class="container my-5">
    <h3>Buy Product</h3>
    <div class="row">
      <div class="col-md-4">
        <img src="../petugas/gambar/<?=$dt_produk['foto_produk']?>" class="card-img-top">
      </div>
      <div class="col-md-8">
        <form action="masukkankeranjang.php?id_produk=<?=$dt_produk['id_produk']?>" method="post">
          <table class="table table-hover table-striped">
            <thead>
              <tr>
                <td>Name of Produk</td>
                <td><?=$dt_produk['nama_produk']?></td>
              </tr>
              <tr>
                <td>Price</td>
                <td><?=$dt_produk['harga']?></td>
              </tr>
              <tr>
                <td>Amount</td>
                <td><input type="number" name="jumlah_pinjam" value="1"></td>
              </tr>
              <tr>
                <td colspan="2"><input class="btn" style="color:#fff; background-color: #FFB200;" type="submit"
                    value="Add to Cart"></td>
              </tr>
            </thead>
          </table>
        </form>
      </div>
    </div>
  </div>



  <!-- Footer -->
  <footer class="section-p1">
    <div class="col">
      <h4>Contact</h4>
      <p><strong>Address</strong> : Jl. Anngajaya II No 104, Condongcatur, Depok, Sleman, Yogyakarta</p>
      <p><strong>Phone</strong> : 089618784189</p>
      <p><strong>Hours</strong> : 07:00 - 18.00 WIB, Mon - Fri</p>

      <div class="follow">
        <h4>Follow Us</h4>
        <div class="icon">
          <a href="#">
            <iconify-icon icon="ant-design:youtube-filled"></iconify-icon>
          </a>
          <a href="#">
            <iconify-icon icon="ant-design:instagram-filled"></iconify-icon>
          </a>
          <a href="#">
            <iconify-icon icon="ant-design:search-outlined"></iconify-icon>
          </a>
        </div>
      </div>
    </div>

    <div class="col">
      <h4>About</h4>
      <a href="#">About Us</a>
      <a href="#">Delivery Information</a>
      <a href="#">Privacy Policy</a>
      <a href="#">Terms & Conditions</a>
      <a href="#">Contact Us</a>
    </div>

    <div class="col">
      <h4>My Account</h4>
      <a href="#">Sign-In</a>
      <a href="#">View Cart</a>
      <a href="#">My Wishlist</a>
      <a href="#">Track My Order</a>
      <a href="#">Help</a>
    </div>

    <div class="row">
      <p>Payment Methods</p>
      <img src="img/footer/gopay.svg" alt="Gopay">
      <img src="img/footer/linkAja.svg" alt="linkAja">
    </div>
  </footer>
  <script src="script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
  </script>
</body>

</html>