<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SweetCake | Special Choco For Special Occasions</title>
  <link rel="stylesheet" href="../../../styles.css"/>
  <link rel="icon" href="../../../images/icon/favicon.png"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
  <header>
    <a><img src="../../../images/icon/favicon.png" height="50px" weidth="50px">
      <span class="logo">Sweet Cake</span></a>
    <ul>
      <li><a class="active" href="../../../index2.html">Home</a></li>
      <li class="nav-item dropdown">
        <a href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Kategori
          <svg width="15" height="10" viewBox="0 0 42 25">
            <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round" />
          </svg></a>
        <ul class="dropdown-menu" style="background-color: #fff;">
          <li><a class="dropdown-item" href="../../../product.html#Kategori">Birthday Cake</a></li>
          <li><a class="dropdown-item" href="#">CupCake</a></li>
          <li><a class="dropdown-item" href="#">Dessert</a></li>
          <li><a class="dropdown-item" href="#">Chocolate Brownies</a></li>
        </ul>
      </li>
      <li><a href="../../../product.html">Product</a></li>
      <li><a href="../../../index2.html#sec">About</a></li>
      <li><a href="../../../index.html"><img src="../../../images/icon/user.png" height="25px" width="25px">Logout</a></li>
    </ul>
  </header>

  <main id="main" style="margin-top:10%;">

    <!-- ======= Breadcrumbs ======= -->
    <container id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Pembayaraan</h2>
          <ol>
            <li><a href="../../../product.html">List Product</a></li>
            <li><a href="cake-a1.html">Product Detail</a></li>
            <li>Buy</li>
          </ol>
        </div>

      </div>
    </container ><!-- End Breadcrumbs -->

<div class="row g-2 row-cols-lg-4 row-cols-2 row-cols-md-3" style="margin-top:5%;">
  <?php
  if(isset($_POST['hitung'])){
    $angka1 = $_POST['angka1'];
    $angka2 = 200000;
    $operasi = $_POST['operasi'];
    switch ($operasi) {
      case 'kali':
        $hasil = $angka1*$angka2;
      break;     
    }
  }
  ?>
  <div class="container">
    <div class="card1">
      <input type="text" value="Rp.<?php echo $angka2; ?>" style="color: white;" class="bil" disabled="disable">
      <select class="opt" name="operasi">
        <option value="kali">Hitung</option>
      </select>
      <input onclick="myFunction()" type="submit" name="hitung" value="Bayar" class="tombol">                     
    </form>
      <?php if(isset($_POST['hitung'])){
      $kode = bin2hex(random_bytes(10));
        }
      ?>
      <input type="text" value="Rp.<?php echo $hasil; ?>" style="color: white;" class="bil" placeholder="Rp.190.000" disabled="disable">
      <div style="text-align: center; color: white;">
      <h4>Kode Pembayaran Anda</h4><br>
      <h5>Silahkan Screenshoot Kode Pembayaran</h5>
      <input type="text" value="Kode: <?php echo $kode; ?>" style="color: white;" class="bil" disabled="disable"><br>
<p id="time"></p>
    </div>
  </div>
 
</div>
  </main>

  <script>
    const d = new Date();
document.getElementById("time").innerHTML = d;
    
    let stars = document.getElementById("stars");
    let text = document.getElementById("text");
    let header = document.querySelector("header");

    window.addEventListener("scroll", function () {
      let value = window.scrollY;

      stars.style.top = value * 0.25 + "px";

      //text.style.marginRight = value * 4 + "px";
      text.style.marginTop = value * 1.5 + "px";

      header.style.top = value * 0.5 + "px";
    });
    function myFunction() {
  alert("Pembayaran Berhasil");
}
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
    </body>

</html>