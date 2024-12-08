<?php
$judul = "Konoha Shop";
$tahun = 2024;
$akses_terbuka = true;
?>
<!DOCTYPE html>
<html>
 <head>
  <title>Konoha Shop | Beranda</title>
  <link rel="stylesheet" href="style.css">
  <link rel="icon" href="gambar/pdi.png" sizes="128x128" type="image/x-icon">
 </head>
 <body>
  <div class="header">
      <img alt="Logo Pemerintah Desa Konoha" height="301px" src="gambar/shop.png" width="301px"/> 
   <h1><?php echo $judul; ?></h1>
   <div class="search-bar">
    <input placeholder="Cari..." type="text" id="search"/>
   </div>
   <div class="nav">
            <a href="Beranda.php" target="_self">Beranda</a>
            <a href="penjualan.php" target="_self">Penjualan</a>
            <a href="blog.php" target="_self">Blog</a>
            <a href="kontak.php" target="_self">Kontak</a>
            <a href="login.php" target="_self" class="logout-icon"><img id="logout-icon" alt="Logout" src="gambar/icons8-logout-96.png" title="Logout"/></a>
        </div>
      </div>
    </div>
  </div>
  <div class="banner">
    <img alt="Banner Konoha Shop" src="gambar/Patung Hokage.jpg"/>
    <div class="banner-text">
      <h2>Menjual Berbagai Hasil Bumi Desa Konoha</h2>
    </div>
   </div>
   <div class="content">
        <h2 class="produk-text">Produk Terbaru</h2>
        <div class="products">
        <a href="detail-produk.php?produk=ikan-tuna" class="detail">
            <div class="product">
                <img alt="Product image 1" src="gambar/ikan tuna.webp" />
                <p>Ikan Tuna</p>
                <h3>Rp 100.000</h3>
            </div>
            </a>
            <a href="detail-produk.php?produk=asam-jawa" class="detail">
            <div class="product">
                <img alt="Product image 2" src="gambar/asam jawa.jpg" />
                <p>Asam Jawa</p>
                <h3>Rp 5.000</h3>
            </div>
            </a>
            <a href="detail-produk.php?produk=sarikaya" class="detail">
            <div class="product">
                <img alt="Product image 3" src="gambar/sarikaya.jpg" />
                <p>Sarikaya</p>
                <h3>Rp 10.000</h3>
            </div>
            </a>
            <a href="detail-produk.php?produk=udang" class="detail">
            <div class="product">
                <img alt="Product image 4" src="gambar/udang.jpg" />
                <p>Udang</p>
                <h3>Rp 70.000</h3>
            </div>
            </a>
            <div class="products">
            <a href="detail-produk.php?produk=timun-mas" class="detail">
            <div class="product">
                <img alt="Product image 1" src="gambar/timun.jpg" />
                <p>Timun Mas</p>
                <h3>Rp 15.000</h3>
            </div>
            </a>
            <a href="detail-produk.php?produk=bunga-pepaya" class="detail">
            <div class="product">
                <img alt="Product image 2" src="gambar/bunga pepaya.jpg" />
                <p>Bunga Pepaya</p>
                <h3>Rp 15.000</h3>
            </div>
            </a>
            <a href="detail-produk.php?produk=kelor" class="detail">
            <div class="product">
                <img alt="Product image 3" src="gambar/kelor.jpg" />
                <p>Kelor</p>
                <h3>Rp 5.000</h3>
            </div>
            </a>
            <a href="detail-produk.php?produk=ayam-kampung" class="detail">
            <div class="product">
                <img alt="Product image 4" src="gambar/ayam kampung.jpg" />
                <p>Ayam Kampung</p>
                <h3>Rp 300.000</h3>
            </a>
            </div>
        </div>
    </div>
</div>
<div class="footer">
  <p>&copy; <?php echo $tahun; ?> La Ode Yanuar Rahim. Semua Hak Cipta Dilindungi Oleh Pihak Berwajib.</p>
</div>
</body>
</html>
