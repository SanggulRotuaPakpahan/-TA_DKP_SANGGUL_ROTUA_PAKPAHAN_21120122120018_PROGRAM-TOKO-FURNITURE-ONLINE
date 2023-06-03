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
        <h3> Terima Kasih telah melakukan pembayaran </h3>
        </div>
        <div>
            <table>
            <tr>
                <br>
                <td> Nama </td>
                <td>: <?php echo $namalengkap = $_GET ['namalengkap']; ?></td> 
            </tr>
            <tr>
                <td> Alamat </td>
                <td>: <?php echo $alamat = $_GET ['alamat']; ?></td> 
            </tr>
            <tr>
                <td> Nomor Telepon</td>
                <td>: <?php echo $nomortelepon = $_GET ['nomortelepon']; ?></td> 
            </tr>
            <tr>
            <td>
                <?php
            

                ?>
            <tr>                  
                <td>
                <?php $metodepembayaran = $_GET['metodepembayaran'];
                if ($metodepembayaran == 'bca') {
                    $hasil = 'Anda Melakukan Pembayaran Melalui BCA';}
                else if ($metodepembayaran == 'bni'){
                    $hasil = 'Anda Melakukan Pembayaran Melalui BNI';}   
                else if ($metodepembayaran == 'bri'){
                    $hasil = 'Anda Melakukan Pembayaran Melalui BRI';}   
                else if ($metodepembayaran == 'shopee'){
                    $hasil = 'Anda Melakukan Pembayaran Melalui Shopee Pay';}  
                else if ($metodepembayaran == 'dana'){
                    $hasil = 'Anda Melakukan Pembayaran Melalui DANA';}   
                else if ($metodepembayaran == 'ovo'){
                    $hasil = 'Anda Melakukan Pembayaran Melalui OVO';}   
                else{
                    $hasil = 'Anda Melakukan Pembayaran Melalui Bank Mandiri';}   
                echo $hasil;
                ?>
                </td> 
                
            </tr>
            </table>
            <tr> Paket anda akan dikirimkan secepatnya </tr>
            <br> Terima Kasih </br>
            <br>
            <br>
            <a href="index.php" class="btn btn-primary">Back to Home</a>
            <div>
                <br>
        <?php
            class Furnitureshop {
                private $lisensi;
              
                public function setLisensi($lisensi) {
                  $this->lisensi = $lisensi;
                }
              
                public function getLisensi() {
                  return $this->lisensi;
                }
              }
              
              // Contoh penggunaan setter dan getter
              $toko = new Furnitureshop();
              $toko->setLisensi('Product by Rotua 2023');
              $lisensi = $toko->getLisensi();
              
              echo "Lisensi Toko: " . $lisensi;
             ?>
            </br>
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
