<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Edit RPS</title>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
    crossorigin="anonymous"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
    <style>
        body{
        min-height: 100vh;
        background-color: #eaeaea;
        background-image: linear-gradient(to right, #7C0E9B 25%, #EC4EA9);
        }

        .navbar {
            background-color: #7C0E9B;
        }

        .main {
            padding left: 150px;
        }

        .btn-primary {
            padding: 10px 20px;
        }
    </style>
</head>
<body>
<nav class="navbar">
      <div class="container-fluid">
        <a class="navbar-brand justify-self-start" href="#">
          <img src="<?=base_url('assets/img/') ?>kiriatas.png" width="200" alt=""
        /></a>
        <a href="" 
          class=" me-2 justify-content-end">
          <img src="<?=base_url('assets/img/') ?>profil.png" alt="" style="width: 50px; height: 50px;"/>
        </a>
      </div>
    </nav>

    <!-- Sidebar -->
    <div style="background: #7C0E9B;" 
      class="w3-sidebar w3-bar-block justify-content-center d-grid position-fixed "
      style="width: 200px">
      <div style="width: 120px; background:#7C0E9B;">
        <a href="<?= base_url('dashboard') ?>" class="w3-bar-item w3-button w3-margin-top" style="color: white;">Dashboard</a>
        <a href="<?= base_url('buat') ?>"" class="w3-bar-item w3-button w3-margin-top" style="color: white;">Buat RPS</a>
        <a href="<?= base_url('daftar') ?>"" class="w3-bar-item w3-button w3-margin-top" style="color: white;">List</a>
        <a href="" class="w3-bar-item w3-button w3-margin-top" style="color: white;">Setelan</a>
        <button class="Logout" style="font-size: 7px; background: grey; color: white; border: white 0px solid; border-radius: 25px; padding: 2px 5px; margin-top: 250px;">
          <a href="<?= base_url('auth/logout') ?>" style="color: white; font-size: 14px; text-decoration: none; display: flex; align-items: center; gap: 1.5rem;">
          <span style="overflow: hidden; padding: 1rem; margin: 8px 0;border-radius: 8px;">Logout</span>
          </a>
        </button>
      </div>
    </div>
        
    <main class="container mt-5" style= "padding-left: 150px">
        <form action="<?= base_url('edit/editRPS') ?>" method="POST">
        <h1 class="px-2 pt-2 fw-bold text-center" style= "color: white;">Edit Data RPS</h1><p></p>
            <input type="hidden" name="id_rps" value="<?php echo $rps['id_rps']; ?>">
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="matkul" class="form-label" style= "color: white;">Matkul</label>
                        <input type="text" name="matkul" class="form-control" value="<?php echo $rps['matkul']; ?>">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label" style= "color: white;">Deskripsi</label>
                        <input type="text" name="deskripsi" class="form-control"
                            value="<?php echo $rps['deskripsi']; ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                    <div class="col">
                        <label for="kode" class="form-label" style= "color: white;">Kode</label>
                        <input type="text" name="kode" id="kode" class="form-control mb-2"
                            placeholder="DT000" value="<?php echo $rps['kode']; ?>">
                    </div>
                    <div class="col">
                        <label for="semester" class="form-label" style= "color: white;">Semester</label>
                        <input type="text" name="semester" id="semester" class="form-control mb-2"
                            placeholder="0" value="<?php echo $rps['semester']; ?>">
                    </div>
                </div>
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="materi1" class="form-label" style= "color: white;">Materi pertemuan 1</label>
                        <input type="text" name="materi1" class="form-control" value="<?php echo $rps['materi1']; ?>">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="materi2" class="form-label" style= "color: white;">Materi pertemuan 2</label>
                        <input type="text" name="materi2" class="form-control" value="<?php echo $rps['materi2']; ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="materi3" class="form-label" style= "color: white;">Materi pertemuan 3</label>
                        <input type="text" name="materi3" class="form-control" value="<?php echo $rps['materi3']; ?>">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="materi4" class="form-label" style= "color: white;">Materi pertemuan 4</label>
                        <input type="text" name="materi4" class="form-control" value="<?php echo $rps['materi4']; ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="materi5" class="form-label" style= "color: white;">Materi pertemuan 5</label>
                        <input type="text" name="materi5" class="form-control" value="<?php echo $rps['materi5']; ?>">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="materi6" class="form-label" style= "color: white;">Materi pertemuan 6</label>
                        <input type="text" name="materi6" class="form-control" value="<?php echo $rps['materi6']; ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="materi7" class="form-label" style= "color: white;">Materi pertemuan 7</label>
                        <input type="text" name="materi7" class="form-control" value="<?php echo $rps['materi7']; ?>">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="materi8" class="form-label" style= "color: white;"> Materi pertemuan 8</label>
                        <input type="text" name="materi8" class="form-control" value="<?php echo $rps['materi8']; ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="materi9" class="form-label" style= "color: white;">Materi pertemuan 9</label>
                        <input type="text" name="materi9" class="form-control" value="<?php echo $rps['materi9']; ?>">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="materi10" class="form-label" style= "color: white;">Materi pertemuan 10</label>
                        <input type="text" name="materi10" class="form-control" value="<?php echo $rps['materi10']; ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="materi11" class="form-label" style= "color: white;">Materi pertemuan 11</label>
                        <input type="text" name="materi11" class="form-control" value="<?php echo $rps['materi11']; ?>">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="materi12" class="form-label" style= "color: white;">Materi pertemuan 12</label>
                        <input type="text" name="materi12" class="form-control" value="<?php echo $rps['materi12']; ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="materi13" class="form-label" style= "color: white;">Materi pertemuan 13</label>
                        <input type="text" name="materi13" class="form-control" value="<?php echo $rps['materi13']; ?>">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="materi14" class="form-label" style= "color: white;">Materi pertemuan 14</label>
                        <input type="text" name="materi14" class="form-control" value="<?php echo $rps['materi14']; ?>">
                    </div>
                </div>
            </div>


            <button name="update" type="submit" class="btn btn-primary">SUBMIT</i></button>
        </form>
    </main>

</body>

</html>