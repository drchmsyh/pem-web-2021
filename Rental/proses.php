<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lengkapi Data</title>
    <link rel="stylesheet" href="assets/css/style_form_data.css">
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">
</head>
<body>
    <div class="container">
        <nav>
            <div class="sewa-button">
                <a href="index.html"><img src="assets/img/sewa.svg"></a>
            </div>
            <div class="logo-text">
                <a href="index.html"><img src="assets/img/logo-text.svg" alt=""></a>
            </div>
        </nav>
        

        <!-- section confirm data-->
        <div class="data">
            <h1>Detail Konfirmasi Rental</h1>
            <p>Apakah data yang anda masukkan sudah sesuai dengan yang di bawah ini?</p>
            <h3>
                

               
               <?php 
                echo '<ol type="1">';
                echo '<li>Nama Lengkap : ' . $_POST['fnama_lengkap'];
                echo "<br /><br />";
                echo '<li>Nomor telepon : ' . $_POST['fno_telepon'];
                echo "<br /><br />";
                echo '<li>Email : ' . $_POST['femail'];
                echo "<br /><br />";
                echo '<li>Alamat Lengkap : ' . $_POST['falamat_lengkap'];
                echo "<br /><br />";
                echo '<li>Masa Sewa : ' . $_POST['fmasa_sewa'] ;
                echo " hari";
                echo "<br /><br />";
                echo '<li>Total Harga : IDR ' . $_POST['total_harga'];
                echo "<br /><br />";
                echo "<br /><br />";
               ?>
            </h3>
            <p>Metode pembayaran hanya bisa dilakukan dengan
                sistem COD (bayar di tempat). <br>
                Silahkan klik tombol 'Proses' 
                untuk melakukan rental.
            </p>
            
        </div>
        
        <a href="form_data.html"><button class="button-2">Kembali</button></a>
        <a href="done.html"><button class="button-1">Proses</button></a>
       




<div class="container">
        <footer>
            <div class="logo-desc">
                <img src="assets/img/logo-text.svg" alt="" style="margin-top: 2px;">
                <p>Website untuk keperluan rental <br>
                berupa barang, jasa, maupun tempat. <br>
                <br>
                © 2022  Rental</p>
            </div>

            <div class="sosmed">
                <p>Connect with Us</p>
                <a href="#"><img src="assets/img/WhatsApp.svg" alt=""></a>
                <a href="#"><img src="assets/img/Instagram.svg" alt=""></a>
                <a href="#"><img src="assets/img/Facebook.svg" alt=""></a>
                <a href="#"><img src="assets/img/Twitter Circled.png" alt="" style="margin-right: 35px;"></a>
            </div>
        </footer>
    </div>
</body>
</html>