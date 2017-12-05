<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Belanja Online</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    

  </head>
  <body>
  <br/>

<form class="form-horizontal" method="POST" action = "form_belanja.php">
<fieldset>
<legend>Belanja Online</legend>
<div class="col-md-9">


<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Customer</label>
  <div class="col-md-5">
  <input id="nama" name="nama" type="text" placeholder="Nama Customer" class="form-control input-md">

  </div>
</div>

<div class="form-group" select id="produk">
  <label class="col-md-4 control-label" for="radios">Pilih Produk</label>
  <div class="col-md-4">
    <label class="radio-inline" for="radios-0" id="produk1">
      <input type="radio" name="produk1" id="produk1" value="produk1">
      TV
    </label>
    <label class="radio-inline" for="radios-1" id="produk2">
      <input type="radio" name="produk2" id="produk2" value="produk2">
      KULKAS
    </label>
    <label class="radio-inline" for="radios-2" id="produk3">
      <input type="radio" name="produk3" id="produk3" value="produk3">
      MESIN CUCI
    </label>
  </div>
</div>


<div class="form-group" name="kali">
  <label class="col-md-4 control-label" for="jumlah">Jumlah</label>
  <div class="col-md-2">
   
  <input id="jumlah" name="jumlah" type="text" placeholder="Jumlah" class="form-control input-md">

  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="kirim" name="kirim" class="btn btn-success">Kirim</button>
  </div>
</div>
</div>


<div class="col-md-3">
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="list-group">
				 <a href="#" class="list-group-item active" id="daftar">Daftar Harga</a>
				<div class="list-group-item" id="1">
					TV : 4.200.000
				</div>
       
				<div class="list-group-item" id="2">
						Kulkas : 3.100.000
				</div>
        <div class="list-group-item" id="3">
  				 Mesin Cuci : 3.800.000
         </div>
         
          <div class="list-group">
    			     <a href="#" class="list-group-item active">Harga Dapat Berubah Setiap Saat</a>
		      </div>
	      </div>
      </div>
    </div>
  </div>
</div>

</fieldset>
</form>



<?php

  if (isset($_POST['kirim'])) {
    $proses = $_POST['simpan'];
    $nama = $_POST['nama'];
    $produk = $_POST['produk'];
    $jumlah = $_POST['jumlah'];
    $total = $_POST['jumlah'];
}
    echo '<br/>Nama Customer : '.$nama;

    if (isset($_POST['produk1'])) {
        $total = $jumlah * 4200000;
        echo '<br/>Produk Pilihan : TV ';

     }elseif (isset($_POST['produk2'])) {
         $total = $jumlah * 3100000;
         echo '<br/>Produk Pilihan : KULKAS ';
     }elseif (isset($_POST['produk3'])) {
         $total = $jumlah * 3800000;
         echo '<br/>Produk Pilihan : MESIN CUCI' ;
     }


     echo '<br/>Jumlah Beli : '.$jumlah;
     echo '<br/>Total Belanja :Rp .  '.$total;




 ?>

</body>
</html>
