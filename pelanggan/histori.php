<?php 
    error_reporting(E_ERROR | E_PARSE);
    session_start();
    $id = $_SESSION['id_pelanggan'];
    if($_SESSION['status_login']!=true){
        header('location: ../login.php');
    }
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
        <li><a class="active" href="histori.php">History</a></li>
        <li><a href="logout.php">Logout</a></li>
        <li>
          <a href="chart.php">
            <iconify-icon icon="ant-design:shopping-cart-outlined" alt="cart">
          </a>
        </li>
      </ul>
    </div>
  </section>
  <!-- End of Navbar -->


  <div class="container">
    <h3>Purchase History</h3>
    <table class="table table-hover table-striped">
      <thead>
        <th>NO</th>
        <th>Purchase Date</th>
        <th>Name of Product</th>
        <th>Amount</th>
        <th>Unit Price</th>
        <th>total</th>
        <!-- <th>Aksi</th> -->
      </thead>
      <tbody>
        <?php 
        include "../koneksi.php";
        $sql = mysqli_query($conn, "SELECT A.nama_produk,B.tgl_transaksi,A.harga,C.qty,C.subtotal,B.id_transaksi FROM produk A JOIN transaksi B ON A.id_produk=B.id_produk JOIN detail_transaksi C ON B.id_transaksi=C.id_transaksi WHERE B.id_pelanggan='$id'" );
    

$no=0;

while($histori = mysqli_fetch_array($sql)){
    $no++;
    // $hapus="<td><a href='hapus_histori.php?id_transaksi=$histori[id_transaksi]' onclick='return confirm(Apakah anda yakin menghapus data ini?)' class='btn btn-danger'>Hapus Histori</a></td>";
?>
        <tr>
          <td><?=$no?></td>
          <td><?=$histori['tgl_transaksi']?></td>
          <td><?=$histori['nama_produk']?></td>
          <td><?=$histori['qty']?></td>
          <td><?=$histori['harga']?></td>
          <td><?=$histori['subtotal'].$hapus?></td>
        </tr>
        <?php
}
            ?>
      </tbody>
    </table>
  </div>


  <!-- Newsletter Subscription -->
  <section id="newsletter" class="section-p1 section-m1">
    <div class="newstext">
      <h4>Sign Up For Newsletter</h4>
      <p>Get e-mail updates about our latest item and <span>special offers</span></p>
    </div>

    <div class="form">
      <input type="text" placeholder="Your Email Address">
      <button class="normal">Sign Up</button>
    </div>
  </section>

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