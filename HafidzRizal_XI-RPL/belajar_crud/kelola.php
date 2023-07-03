<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <title>belajar_crud</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
</head>
<body>
    <nav class="navbar navbar-light bg-light mb-4">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            CRUD - BS5
          </a>
        </div>
      </nav>
      <div class="container">
        <form method="POST" action="proses.php">
            <div class="mb-3 row">
              <label for="nisn" class="col-sm-2 col-form-label">NISN</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="nisn" placeholder="Ex : 112233">
              </div>
            </div>
            <div class="mb-3 row">
              <label for="nama" class="col-sm-2 col-form-label">Nama Siswa</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="nama" placeholder="Ex : Alexander">
              </div>
            </div>
            <div class="mb-3 row">
              <label for="jkel" class="col-sm-2 col-form-label">Jenis Kelamin</label>
              <div class="col-sm-10">
                  <select id="jkel" class="form-select" aria-label="Default select example">
                      <option selected>Jenis Kelamin</option>
                      <option value="1">Laki-Laki</option>
                      <option value="2">Perempuan</option>
                    </select>
              </div>
            </div>
            <div class="mb-3 row">
              <label for="foto" class="col-sm-2 col-form-label">Foto</label>
              <div class="col-sm-10">
                  <input class="form-control" type="file" id="formFile">
              </div>
            </div>
            <div class="mb-3 row">
              <label for="alamat" class="col-sm-2 col-form-label">Alamat Lengkap</label>
              <div class="col-sm-10">
                  <div class="mb-3">
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
              </div>
            </div>
            <?php
                if(isset($_GET['ubah'])){
            ?>
            <button type="submit" name="aksi" value="edit" class="btn btn-primary">
              <i class="fa fa-floppy-o" aria-hidden="true"></i> Simpan Perubahan
          </button>
          <?php
                } else {
          ?>
          <button type="submit" name="aksi" value="add" class="btn btn-primary">
              <i class="fa fa-floppy-o" aria-hidden="true"></i> Tambahkan
          </button>
          <?php
                }
          ?>
            <a href="index.php" type="button" class="btn btn-danger">
              <i class="fa fa-reply" aria-hidden="true"></i> Batal
            </a>
        </form>
      </div>
</body>
</html>