<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name-="viewport" content="width=device-width, initial-scale=1" />
    <title>Dashboard RPS</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
      crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
    <style type="text/css">
      body {
      min-height: 100vh;
      background-color: #eaeaea;
      background-image: linear-gradient(to right, #7C0E9B 25%, #EC4EA9);
      }
      .navbar {
            background-color: #7C0E9B;
        }
    </style>    
  </head>

  <body>
    <nav class="navbar">
      <div class="container-fluid">
        <a class="navbar-brand justify-self-start" href="#">
          <img src="<?= base_url('assets/img/') ?>kiriatas.png" width="200" alt=""
        /></a>
        <a href="" 
          class=" me-2 justify-content-end">
          <img src="<?= base_url('assets/img/') ?>profil.png" alt="" style="width: 50px; height: 50px;"/>
        </a>
      </div>
    </nav>

    <!-- Sidebar -->
    <div style="background: #7C0E9B;" 
      class="w3-sidebar w3-bar-block justify-content-center d-grid position-fixed "
      style="width: 200px">
      <div style="width: 120px; background:#7C0E9B;">
        <a href="" class="w3-bar-item w3-button w3-margin-top" style="color: grey;">Dashboard</a>
        <a href="<?= base_url('buat') ?>" class="w3-bar-item w3-button w3-margin-top" style="color: white;">Buat RPS</a>
        <a href="<?= base_url('daftar') ?>" class="w3-bar-item w3-button w3-margin-top" style="color: white;">List</a>
        <a href="" class="w3-bar-item w3-button w3-margin-top" style="color: white;">Setelan</a>
        <button class="Logout" style="font-size: 7px; background: grey; color: white; border: white 0px solid; border-radius: 25px; padding: 2px 5px; margin-top: 250px;">
          <a href="<?= base_url('auth/logout') ?>" style="color: white; font-size: 14px; text-decoration: none; display: flex; align-items: center; gap: 1.5rem;">
          <span style="overflow: hidden; padding: 1rem; margin: 8px 0;border-radius: 8px;">Logout</span>
          </a>
        </button>
      </div>
    </div>

    <!-- Page Content -->
    <div id="decoration-topbar" >
    </div>
    <main class="container mt-4">
      <section id="profile-card" class="card" style="margin-left: 200px; opacity: 75%;">
        <div class="p-5 px-5 d-flex" style="height: 20px; align-items: center; margin-left: 300px;">
          <div>
            <h1 style="font-size: 30px; color: black; text-align: center;">Selamat Datang</h1>
            <h4 style="font-size: 20px; color: black"><?= strtoupper($name) ?> <?= $nim ?></h4>
           </div>
        </div>
      </section>

    <section id="dashboard-menu" style="margin-left: 550px; margin-top: 20px;">
    </div>
    <div class="col-1"></div>
    <form action="" method="post">
    <div class="col-6 d-flex">
      
      <input type="text" name="keyword" class="form-control text-center" placeholder="Cari kode, matkul, atau semster..." >
      <input class="btn btn-primary" type="submit" id="button-addon2" name="submit" value="Cari">
      
    </div>
    </form>
    </section>
    <hr>

    <section>
    <div class="container" style="margin-left: 120px;">
    <div class="row">

        <?php foreach($rps as $r) : ?>
        <div class="col">
            <div class="card" style="width: 18rem; background: #900FB4;">
                <img src="<?= base_url('assets/img/') ?>kelass.png" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title" style="color: white;"><?= $r['matkul'] ?></h5>
                <p class="card-text" style="color: white;"><?= $r['kode'] ?></p>
                </div>
                <ul class="list-group list-group-flush">
                <li class="list-group-item" style="background: #900FB4; color: white;">Semester <?php if($r['semester'] % 2 === 0 ) { echo 'Genap'; } else { echo 'Gasal'; }  ?> (<?= $r['semester'] ?>)</l>
                </ul>
                <div class="card-body">
                <a href="<?= base_url('view/index/') ?><?= $r['id_rps'] ?>" class="card-link" style="color: white;">View RPS</a>
                </div>
            </div>
        </div>
        <?php endforeach ?>

    </div>
    </div>
    </section>

  </body>
</html>
