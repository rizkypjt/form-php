<html>
  <head>
    <title>Form nilai</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" >
  </head>
  <body>
      <form method = "GET" action="form_nilai.php">

      </form>
    <form class="form-horizontal">
    <fieldset>

    <!-- Form Name -->
    <legend> Form Nilai Siswa </legend>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="textinput">Nama Lengkap</label>
      <div class="col-md-5">
      <input id="nama" name="nama" placeholder="nama lengkap" class="form-control input-md" type="text">

      </div>
    </div>

    <!-- Select Basic -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="Mata Kuliah">Mata Kuliah</label>
      <div class="col-md-5">
        <select id="matkul" name="matkul" class="form-control">
          <option >Dasar dasar pemograman</option>
          <option >basis data</option>
        </select>
      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="Nilai UTS">Nilai UTS</label>
      <div class="col-md-5">
      <input id="uts" name="uts" placeholder="Nilai uts" class="form-control input-md" type="text">

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="textinput">Nilai UAS</label>
      <div class="col-md-5">
      <input id="uas" name="uas" placeholder="nilai uas" class="form-control input-md" type="text">

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="textinput">Nilai Tugas Praktikum</label>
      <div class="col-md-5">
      <input id="tugas" name="tugas" placeholder="Tugas" class="form-control input-md" type="text">

      </div>
    </div>

    <!-- Button -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="singlebutton"></label>
      <div class="col-md-4">
        <button id="simpan" name="simpan" class="btn btn-primary">Simpan</button>
      </div>
    </div>

    </fieldset>
    </form>

    <?php
      $proses = $_GET['simpan'];
      $nama_siswa = $_GET['nama'];
      $matkul = $_GET['matkul'];
      $UTS = $_GET['uts'];
      $UAS = $_GET['uas'];
      $tugas = $_GET['tugas'];

      //menampilkan
      echo "<h5><h5>";
      echo '<br/> Nama : '.$nama_siswa;
      echo '<br/> Mata Kuliah : '.$matkul;
      echo '<br/> Nilai UTS : '.$UTS;
      echo '<br/> Nilai UAS : '>$UAS;
      echo '<br/> Nilai Tugas Praktikum : ' .$tugas;
    ?>

  </body>
</html>
