<?php
    require 'koneksi.php';

    if ( isset($username) ||isset($username)) { 

    }

$query_sql = "SELECT * FROM `admin_tu` 
        WHERE username = '$username' AND password = '$password'";

$result = mysqli_query($conn, $query_sql);

if (mysqli_num_rows($result)>0){
    header("Location: dashboard_ukm.php");
} else {
    echo "<center><h2> </h2>";
}
?>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <title>SIRDADU</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- linking css file -->
  <link rel="stylesheet" href="style_navbarlanding.css">
  <!-- font awesome -->
  <script src="https://kit.fontawesome.com/31149d48b0.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="images/logo.png">
<style> body {
    font-family: Arial, Helvetica, sans-serif;
  }</style>
    
    <style>
        <style>
.dropbtn {
  background-color: #3498DB;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropup {
  position: relative;
  display: inline-block;
}

.dropup-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  bottom: 50px;
  z-index: 1;
}

.dropup-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropup-content a:hover {background-color: #ccc}

.dropup:hover .dropup-content {
  display: block;
}

.dropup:hover .dropbtn {
  background-color: #2980B9;
}
</style>
    </style>
<div class="navbar">
    <a href="dashboard_ukm.php" class="active">Home</a>
    <div class="dropdown">
        <button class="dropbtn">DOKUMENTASI UKM</button>
        <div class="dropdown-content">
      <a href="#">RUANG LAKTASI</a>
      <a href="subdok_ukmesensial.php">UKM ESENSIAL</a>
      <a href="subdok_ukmpengembangan.php">UKM PENGEMBANGAN</a>
      </div>
      </div>

      <div class="dropdown">
      <button class="dropbtn">Akreditasi</button>
      <div class="dropdown-content">
    <a href="http://smg.city/akredkagok">DOKUMEN AKREDITASI</a>
    <a href="mutufasyankes.kemkes.go.id">NM indikator Mutu Nasional</a>
    <a href="https://bit.ly/IMUKMPKMKAGOK2023">Indikator Mutu UKM Puskesmas Kagok 2023</a>
    <a href="https://accounts.google.com/InteractiveLogin/identifier?elo=1&ifkv=Af_xneFPib73w-4IclWIbLLmMBfLYBgKcP8FLpef_LCqJ-KP-0Gg1tLynGc1LaXgrWJv1qray4hTDQ&flowName=GlifWebSignIn&flowEntry=ServiceLogin ">SIPADUKA</a>
    </div>
    </div>

    <div class="dropdown">
    <button class="dropbtn">Lokmin</button>
    <div class="dropdown-content">
  <a href="https://bit.ly/CAPAIANPKP23">Capaian PKP 2023</a>
  <a href="https://bit.ly/PUSKESMAS7G">Puskesmas 7G</a>
  <a href="https://bit.ly/SPMKAGOK23">SPM 2023</a>
  <a href="https://bit.ly/PERHITUNGANKBK">PERHITUNGAN KBK</a>
  <a href="monevpembangunan.semarangkota.go.id">MONEV</a>
  <a href="https://tinyurl.com/MONEV-PERCEPATAN-TH-2023">MONEV PERCEPATAN 2023</a>
  <a href="https://bit.ly/RAPATBULANANKAGOK">Rapat Bulanan</a>
  <a href="https://smg.city/deskpkpsik">Pelaporan</a>
</div>
</div>

<div class="dropdown">
  <button class="dropbtn">Program</button>
  <div class="dropdown-content">
<a href="https://linktr.ee/goakreodkksemarang">Goa Kreo</a>
  </div>
</div>

    <a href="landingpage.php">Logout</a>

</div>

</head>
<body>
    <p> DASHBOARD UKM</p>
</body>