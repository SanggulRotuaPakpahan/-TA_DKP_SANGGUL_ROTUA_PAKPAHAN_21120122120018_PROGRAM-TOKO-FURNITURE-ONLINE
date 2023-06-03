<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Toko Furniture</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="fontawesome/css/all.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>

<section class="checkout" id="checkout">
    <div class="container-fluid py-4">
        <div class="container">
        <h3> Check out </h3>

        <div>
            <form action = "nota.php" method="GET">
            <p> Lakukan Pembayaran Anda </p>
            <div> 
                <label for ="namalengkap"> <b> Masukkan Nama Anda <b> </label> <br>
                <input type="text" placeholder= "Masukkan Nama Lengkap" name="namalengkap" required autocomplete='off'>
                <br><br>
            </div>
            <div>
                <label for ="alamat"> <b> Alamat Rumah Anda <b> </label> <br>
                <input type="text" placeholder= "Masukkan Alamat" name="alamat" required autocomplete='off'>
                <br><br>
            </div>
            <div>
            <label for="nomortelepon"><b>Nomor Telepon Anda</b></label><br>
            <input type="number" placeholder="Masukkan Nomor" name="nomortelepon" maxlength=12 required autocomplete="off" >
            <br><br>
            </div>
            <div>
                <label for ="jumlahbarang"> <b>Jumlah Barang  <b> </label> <br>
                <input type="number" placeholder= "" name="jumlahbarang" required autocomplete='off'min ="1">
                <br><br>
            </div>
                <div>
                <label for = "metodepembayaran"> Pilih Metode Pembayaran : </label> <br>
                <select name = "metodepembayaran">
                <option value=bca>BCA</option>
                <option value=bni>BNI</option>
                <option value=bri>BRI</option>
                <option value=shopee>Shopee Pay</option>
                <option value=dana>Dana</option>
                <option value=ovo>OVO</option>
                <option value=mandiri>Bank Mandiri</option>
                </select>
                <br> <br>
            </div>
            <input type="submit" name="kumpulkan" value="Lakukan Pembayaran">
            </form>
        </div>       
        </div>
    </div>
</section>

<script src="js/jquery-3.6.0.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="fontawesome/js/all.min.js"></script> 
  <script src="js/script.js"></script>
</body>
</html>
