<?php 
  
  include('koneksi.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM dataparkiran WHERE id = $id LIMIT 1";

  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_array($result);
  

  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit Siswa</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT SISWA
            </div>
            <div class="card-body">
              <form action="updatekendaraan.php" method="POST">
                
                <div class="form-group">
                  <label>Jenis Kendaraan</label>
                  <input type="text" name="jenis_kendaraan" value="<?php echo $row['jenis_kendaraan'] ?>" placeholder="Masukkan NISN Siswa" class="form-control">
                  <input type="hidden" name="jenis_kendaraan" value="<?php echo $row['id_kendaraan'] ?>">
                </div>

                <div class="form-group">
                  <label>Plat Nomor</label>
                  <input type="text" name="plat_nomor" value="<?php echo $row['plat_nomor'] ?>" placeholder="Masukkan Nama Siswa" class="form-control">
                </div>

                
                <button type="submit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>