<!DOCTYPE html>
<html>

<head>
    <title>VIEW DATA RPS</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
   body{
    min-height: 100vh;
    background-color: #eaeaea;
    background-image: linear-gradient(to right, #7C0E9B 25%, #EC4EA9);
    }

    .navbar {
    background-color: #7C0E9B;
    }

</style>
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
        <a href="<?= base_url('dashboard') ?>" class="w3-bar-item w3-button w3-margin-top" style="color: white;">Dashboard</a>
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

    <main class="container mt-5" style= "padding-left: 150px">
        <h1 class="text-center" style= "color: white;">VIEW DATA RPS</h1>

        

        <form action="PHP/edform.php" method="POST">
            <input type="hidden" name="Matkul" value="">
            <div class="mb-3">
                <label for="matkul" class="form-label" style= "color: white;">Matkul</label>
                <input type="text" name="matkul" class="form-control" value="<?php echo $rps['matkul']; ?>" disabled readonly>
            </div>
            <div class="mb-3">
                <label for="Deskripsi" class="form-label" style= "color: white;">Deskripsi</label>
                <input type="text" name="Deskripsi" class="form-control" value="<?php echo $rps['deskripsi']; ?>" disabled readonly>
            </div>
            <div class="mb-3">
                <label for="kode" class="form-label" style= "color: white;">Kode</label>
                <input type="text" name="kode" class="form-control" value="<?php echo $rps['kode']; ?>" disabled readonly>
            </div>
            <div class="mb-3">
                <label for="semester" class="form-label" style= "color: white;">Semester</label>
                <input type="text" name="semester" class="form-control" value="<?php echo $rps['semester']; ?>" disabled readonly>
            </div>
            <div class="mb-3">
                <label for="materi1" class="form-label" style= "color: white;">materi 1</label>
                <div class="d-flex justify-content-center">
                <input type="text" name="materi1" class="form-control" value="<?php echo $rps['materi1']; ?>" disabled readonly>
                <a class="btn btn-danger" onclick="return confirm('Anda akan menghapus materi ini?')" href="<?= base_url('edit_view/delm/') ?>materi1/<?= $rps['id_rps'] ?>">delete</a>
                </div>
            </div>
            <div class="mb-3">
                <label for="materi2" class="form-label" style= "color: white;">materi 2</label>
                <div class="d-flex justify-content-center">
                <input type="text" name="materi2" class="form-control" value="<?php echo $rps['materi2']; ?>" disabled readonly>
                <a class="btn btn-danger" onclick="return confirm('Anda akan menghapus materi ini?')" href="<?= base_url('edit_view/delm/') ?>materi2/<?= $rps['id_rps'] ?>">delete</a>
                </div>
            </div>
            <div class="mb-3">
                <label for="materi3" class="form-label" style= "color: white;">materi 3</label>
                <div class="d-flex justify-content-center">
                <input type="text" name="materi3" class="form-control" value="<?php echo $rps['materi3']; ?>" disabled readonly>
                <a class="btn btn-danger" onclick="return confirm('Anda akan menghapus materi ini?')" href="<?= base_url('edit_view/delm/') ?>materi3/<?= $rps['id_rps'] ?>">delete</a>
                </div>
            </div>
            <div class="mb-3">
                <label for="materi4" class="form-label" style= "color: white;">materi 4</label>
                <div class="d-flex justify-content-center">
                <input type="text" name="materi4" class="form-control" value="<?php echo $rps['materi4']; ?>" disabled readonly>
                <a class="btn btn-danger" onclick="return confirm('Anda akan menghapus materi ini?')" href="<?= base_url('edit_view/delm/') ?>materi4/<?= $rps['id_rps'] ?>">delete</a>
                </div>
            </div>
            <div class="mb-3">
                <label for="materi5" class="form-label" style= "color: white;">materi 5</label>
                <div class="d-flex justify-content-center">
                <input type="text" name="materi5" class="form-control" value="<?php echo $rps['materi5']; ?>" disabled readonly>
                <a class="btn btn-danger" onclick="return confirm('Anda akan menghapus materi ini?')" href="<?= base_url('edit_view/delm/') ?>materi5/<?= $rps['id_rps'] ?>">delete</a>
                </div>
            </div>
            <div class="mb-3">
                <label for="materi6" class="form-label" style= "color: white;">materi 6</label>
                <div class="d-flex justify-content-center">
                <input type="text" name="materi6" class="form-control" value="<?php echo $rps['materi6']; ?>" disabled readonly>
                <a class="btn btn-danger" onclick="return confirm('Anda akan menghapus materi ini?')" href="<?= base_url('edit_view/delm/') ?>materi6/<?= $rps['id_rps'] ?>">delete</a>
                </div>
            </div>
            <div class="mb-3">
                <label for="materi7" class="form-label" style= "color: white;">materi 7</label>
                <div class="d-flex justify-content-center">
                <input type="text" name="materi7" class="form-control" value="<?php echo $rps['materi7']; ?>" disabled readonly>
                <a class="btn btn-danger" onclick="return confirm('Anda akan menghapus materi ini?')" href="<?= base_url('edit_view/delm/') ?>materi7/<?= $rps['id_rps'] ?>">delete</a>
                </div>
            </div>
            <div class="mb-3">
                <label for="materi8" class="form-label" style= "color: white;" >materi 8</label>
                <div class="d-flex justify-content-center">
                <input type="text" name="materi8" class="form-control" value="<?php echo $rps['materi8']; ?>" disabled readonly>
                <a class="btn btn-danger" onclick="return confirm('Anda akan menghapus materi ini?')" href="<?= base_url('edit_view/delm/') ?>materi8/<?= $rps['id_rps'] ?>">delete</a>
                </div>
            </div>
            <div class="mb-3">
                <label for="materi9" class="form-label" style= "color: white;">materi 9</label>
                <div class="d-flex justify-content-center">
                <input type="text" name="materi9" class="form-control" value="<?php echo $rps['materi9']; ?>" disabled readonly>
                <a class="btn btn-danger" onclick="return confirm('Anda akan menghapus materi ini?')" href="<?= base_url('edit_view/delm/') ?>materi9/<?= $rps['id_rps'] ?>">delete</a>
                </div>
            </div>
            <div class="mb-3">
                <label for="materi10" class="form-label" style= "color: white;">materi 10</label>
                <div class="d-flex justify-content-center">
                <input type="text" name="materi10" class="form-control" value="<?php echo $rps['materi10']; ?>" disabled readonly>
                <a class="btn btn-danger" onclick="return confirm('Anda akan menghapus materi ini?')" href="<?= base_url('edit_view/delm/') ?>materi10/<?= $rps['id_rps'] ?>">delete</a>
                </div>
            </div>
            <div class="mb-3">
                <label for="materi11" class="form-label" style= "color: white;">materi 11</label>
                <div class="d-flex justify-content-center">
                <input type="text" name="materi11" class="form-control" value="<?php echo $rps['materi11']; ?>" disabled readonly>
                <a class="btn btn-danger" onclick="return confirm('Anda akan menghapus materi ini?')" href="<?= base_url('edit_view/delm/') ?>materi11/<?= $rps['id_rps'] ?>">delete</a>
                </div>
            </div>
            <div class="mb-3">
                <label for="materi12" class="form-label" style= "color: white;">materi 12</label>
                <div class="d-flex justify-content-center">
                <input type="text" name="materi12" class="form-control" value="<?php echo $rps['materi12']; ?>" disabled readonly>
                <a class="btn btn-danger" onclick="return confirm('Anda akan menghapus materi ini?')" href="<?= base_url('edit_view/delm/') ?>materi12/<?= $rps['id_rps'] ?>">delete</a>
                </div>
            </div>
            <div class="mb-3">
                <label for="materi13" class="form-label" style= "color: white;">materi 13</label>
                <div class="d-flex justify-content-center">
                <input type="text" name="materi13" class="form-control" value="<?php echo $rps['materi13']; ?>" disabled readonly>
                <a class="btn btn-danger" onclick="return confirm('Anda akan menghapus materi ini?')" href="<?= base_url('edit_view/delm/') ?>materi13/<?= $rps['id_rps'] ?>">delete</a>
                </div>
            </div>
            <div class="mb-3">
                <label for="materi14" class="form-label" style= "color: white;">materi 14</label>
                <div class="d-flex justify-content-center">
                <input type="text" name="materi14" class="form-control" value="<?php echo $rps['materi14']; ?>" disabled readonly>
                <a class="btn btn-danger" onclick="return confirm('Anda akan menghapus materi ini?')" href="<?= base_url('edit_view/delm/') ?>materi14/<?= $rps['id_rps'] ?>">delete</a>
                </div>
            </div>
        </form>
        <a href="<?= base_url('daftar') ?>" class="btn btn-danger">Back</a>
    </main>

</body>

</html>
