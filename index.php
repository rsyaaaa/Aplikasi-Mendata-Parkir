<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>Data Parkiran</title>
  </head>

  <body>
  <body style="background-image: url('wall.png'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">
    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header" align='center'>
              DATA KENDARAAN &#128663;
            </div>
            <div class="card-body">
              <a href="tambahkendaraan.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA KENDARAAN</a>
              <table class="table table-bordered" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">Jenis Kendaraan</th>
                    <th scope="col">Nama Kendaraan</th>
                    <th scope="col">Plat Nomor</th>
                    <th scope="col">Jam Masuk</th>
                    <th scope="col">Jam Keluar</th>
                    <th scope="col">AKSI</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      include('koneksi.php');
                      $no = 1;
                      $query = mysqli_query($connection,"SELECT * FROM dataparkiran");
                      while($row = mysqli_fetch_array($query)){
                  ?>

                  <tr>
                      <td><?php echo $row['jenis_kendaraan'] ?></td>
                      <td><?php echo $row['nama_kendaraan'] ?></td>
                      <td><?php echo $row['plat_nomor'] ?></td>
                      <td><?php echo $row['jam_masuk'] ?></td>
                      <td><?php echo $row['jam_keluar'] ?></td>
                      <td class="text-center">
                        <!-- INI YG NANTI DIPASTE YAA -->
                        <a href="updatejamkeluar.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-dark">JAM</a>
                        <a href="editparkir.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-warning">EDIT</a>
                        
                        <a href="hapuskendaraan.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
                      </td>
                  </tr>

                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>

    
    <script>
      $(document).ready( function () {
          $('#myTable').DataTable();
      } );
    </script>
  </body>
</html>