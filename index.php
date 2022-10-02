<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    
    <title>QR GENERATOR BY CHAERYAN</title>
</head>
<body>
    <div class="KotakUtama">
<h1>PUSAT ROMPI </h1>
<h1>BANDUNG</h1>

<!--INPUT DATA-->
<form action="" method="post">
  <label for="nama">NAMA PEMESAN</label><br>
  <input type="text" id="nama" name="nama" placeholder="ex : PUSAT ROMPI BANDUNG"><br>
  <label for="nohp">NO PESANAN</label><br>
  <input type="text" id="nohp" name="nohp" placeholder="0000"><br>
  <label for="pesanan">PESANAN</label><br>
  <input type="text" id="pesanan" name="pesanan" placeholder="ex : ROMPI WINBREAKER METALIK NAVY 20pcs"><br>
  <label for="link">LINK GOOGLE DRIVE</label><br>
  <input type="text" id="link" name="link" placeholder="ex : drive.google.com"><br><br>
  <label for="tglmasuk">TANGGAL MASUK</label><br>
  <input type="date" id="tglmasuk" name="tglmasuk" ><br><br>
  <label for="deadline">DEADLINE</label><br>
  <input type="date" id="deadline" name="deadline" ><br><br>
  <input type="submit" value="OKE">

</form>
</div>
<br><br><br>
<div class="KotakPrint">
        <div class="nama1">

        <?php
        
        $nama = $link = $tglmasuk = $deadline = "";
        if (empty($_POST["nama"])) {
            $nama = "";
          } else {
            echo $nama = $_POST["nama"]; 
            echo " - ";
            echo $nohp = $_POST["nohp"];
          }
          echo "<br>";
          if (empty($_POST["pesanan"])) {
            $pesanan = "";
          } else {
            echo $pesanan = $_POST["pesanan"]; 
          }
          echo "<br>";
          if (empty($_POST["link"])) {
            $link = "";
          } else {
            require_once 'phpqrcode/qrlib.php';
            $path = 'img/';
            $file = $path.uniqid().".png";
            $link = $_POST["link"];
            $text = $link;
            QRcode::png($text,$file);
            echo "<img src='".$file."'>";
            
          

          }

          echo "<br>";
          if (empty($_POST["tglmasuk"])) {
            $tglmasuk = "";
          } else {
            $tglmasuk = $_POST["tglmasuk"];
            echo date("d-M-Y",strtotime($tglmasuk));
          }
          echo "<br>";
          if (empty($_POST["deadline"])) {
            $deadline = "";
          } else {
            $deadline = $_POST["deadline"];
            echo date("d-M-Y",strtotime($deadline));
          }
        ?>

        <br>        
        </div>        





<input type="submit" value="PRINT">
</div>
<br><br>
<br><br><P>QR Generator by Chaeryan</P>


</body>
</html>