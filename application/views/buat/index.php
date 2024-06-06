<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Buat RPS</title>
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

        .btn-primary {
            padding: 10px 20px;
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
        <a href="<?= base_url('dashboard') ?>" class="w3-bar-item w3-button w3-margin-top" style="color: white;">Dashboard</a>
        <a href="" class="w3-bar-item w3-button w3-margin-top" style="color: grey;">Buat RPS</a>
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

        </form>
        <form action="<?= base_url('buat/tambahRPS') ?>" method="post">
            <h5 class="px-2 pt-2 fw-bold text-center" style= "color: white;">Masukan Data RPS</h5>
            <div class="form-group p-2">
                <div class="row">
                    <input type="text" name="id_user" hidden value="<?= $id ?>">
                    <div class="col">
                        <label for="matkul" class="form-label" style= "color: white;">Mata Kuliah</label>
                        <input type="text" name="matkul" id="matkul" class="form-control mb-2"
                            placeholder="Masukkan nama Matkul">
                    </div>
                    <div class="col">
                        <label for="deskripsi" class="form-label" style= "color: white;">Deskripsi</label>
                        <input type="text" name="deskripsi" id="deskripsi" class="form-control mb-2"
                            placeholder="Masukkan Deskripsi">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="kode" class="form-label" style= "color: white;">Kode</label>
                        <input type="text" name="kode" id="kode" class="form-control mb-2"
                            placeholder="DT000">
                    </div>
                    <div class="col">
                        <label for="semester" class="form-label" style= "color: white;">Semester</label>
                        <input type="text" name="semester" id="semester" class="form-control mb-2"
                            placeholder="0">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="materi1" class="form-label" style= "color: white;">Materi 1</label>
                        <input type="text" name="materi1" id="materi1" class="form-control mb-2"
                            placeholder="Masukkan materi 1">
                    </div>
                    <div class="col">
                        <label for="materi2" class="form-label" style= "color: white;">Materi 2</label>
                        <input type="text" name="materi2" id="materi2" class="form-control mb-2"
                            placeholder="Masukkan materi 2">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="materi3" class="form-label" style= "color: white;">Materi 3</label>
                        <input type="text" name="materi3" id="materi3" class="form-control mb-2"
                            placeholder="Masukkan materi 3">
                    </div>
                    <div class="col">
                        <label for="materi4" class="form-label" style= "color: white;">Materi 4</label>
                        <input type="text" name="materi4" id="materi4" class="form-control mb-2"
                            placeholder="Masukkan materi 4">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="materi5" class="form-label" style= "color: white;">Materi 5</label>
                        <input type="text" name="materi5" id="materi5" class="form-control mb-2"
                            placeholder="Masukkan materi 5">
                    </div>
                    <div class="col">
                        <label for="materi6" class="form-label" style= "color: white;">Materi 6</label>
                        <input type="text" name="materi6" id="materi6" class="form-control mb-2"
                            placeholder="Masukkan materi 6">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="materi7" class="form-label" style= "color: white;">Materi 7</label>
                        <input type="text" name="materi7" id="materi7" class="form-control mb-2"
                            placeholder="Masukkan materi 7">
                    </div>
                    <div class="col">
                        <label for="materi8" class="form-label"style= "color: white;">Materi 8</label>
                        <input type="text" name="materi8" id="materi8" class="form-control mb-2"
                            placeholder="Masukkan materi 8">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="materi9" class="form-label" style= "color: white;">Materi 9</label>
                        <input type="text" name="materi9" id="materi9" class="form-control mb-2"
                            placeholder="Masukkan materi 9">
                    </div>
                    <div class="col">
                        <label for="materi10" class="form-label" style= "color: white;">Materi 10</label>
                        <input type="text" name="materi10" id="materi10" class="form-control mb-2"
                            placeholder="Masukkan materi 10">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="materi11" class="form-label" style= "color: white;">Materi 11</label>
                        <input type="text" name="materi11" id="materi11" class="form-control mb-2"
                            placeholder="Masukkan materi 11">
                    </div>
                    <div class="col">
                        <label for="materi12" class="form-label" style= "color: white;">Materi 12</label>
                        <input type="text" name="materi12" id="materi12" class="form-control mb-2"
                            placeholder="Masukkan materi 12">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="materi13" class="form-label" style= "color: white;">Materi 13</label>
                        <input type="text" name="materi13" id="materi13" class="form-control mb-2"
                            placeholder="Masukkan materi 13">
                    </div>
                    <div class="col">
                        <label for="materi14" class="form-label" style= "color: white;">Materi 14</label>
                        <input type="text" name="materi14" id="materi14" class="form-control mb-2"
                            placeholder="Masukkan materi 14">
                    </div>
                </div>
            </div>
            </div>
            <button name="tambahRPS" type="submit" class="btn btn-primary ">SUBMIT</i></button>
        </form>
    </main>

</body>

</html>