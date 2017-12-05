<!DOCTYPE html>
<html>
<head>
  <title>Form Nilai</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<form class="form-horizontal" method = "POST" action = "array_siswa.php">
<fieldset>

<!-- Form Name -->
<legend>Form Name</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nama">Nama lengkap</label>  
  <div class="col-md-6">
  <input id="nama" name="nama" placeholder="Nama lengkap" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="mapel">Mata Kuliah</label>
  <div class="col-md-6">
    <select id="mapel" name="mapel" class="form-control">
      <option value=""> Dasar Dasar Pemrograman </option>
      <option value=""> Basis Data </option>
      <option value=""> web </option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="uts">Nilai Uts</label>  
  <div class="col-md-4">
  <input id="uts" name="uts" placeholder="Nilai UTS" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="uas">Nilai Uas</label>  
  <div class="col-md-4">
  <input id="uas" name="uas" placeholder="Nilai UAS" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="tugas">Nilai Tugas / Praktikum</label>  
  <div class="col-md-4">
  <input id="tugas" name="tugas" placeholder="Nilai Tugas" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="kirim"></label>
  <div class="col-md-4">
    <button id="kirim" name="kirim" class="btn btn-primary">KIRIM</button>
  </div>
</div>

</fieldset>
</form>

</body>
</html>