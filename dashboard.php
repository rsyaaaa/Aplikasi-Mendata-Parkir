<?php

  session_start();

  if(!$_SESSION['id_user']){
    header("location: login.php");
  }

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <title>Dashboard</title>
  </head>
  <body>
  <body style="background-image: url('walldash2.jpg'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">
  
  <ul class="nav nav-pills justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="dashboard.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="index.php">Data Parkir</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="profile.php">Profile</a>
  </li>
  
  
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">...</div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">...</div>
  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">...</div>
  <div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">...</div>
</div>
<center>
          <div class="col-md-9">
            <div class="card">
              <div class="card-body">
                <h2>DASHBOARD</h2>
                <hr>

                Selamat Datang, <?php echo $_SESSION['nama_lengkap'] ?>
</center>
              </div>
            </div>
          </div>

      </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
</body>
</html>