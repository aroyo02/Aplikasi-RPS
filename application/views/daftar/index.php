<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>List RPS</title>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
    crossorigin="anonymous"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
    <style>
    body {
      min-height: 100vh;
      background-color: #eaeaea;
      background-image: linear-gradient(to right, #7C0E9B 25%, #EC4EA9);
      }
    .navbar {
            background-color: #7C0E9B;
        }
    </style>
    <title>list</title>

    <!-- Add Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Optional: Add Bootstrap JavaScript and jQuery for interactive components -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
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
        <a href="<?= base_url('buat') ?>" class="w3-bar-item w3-button w3-margin-top" style="color: white;">Buat RPS</a>
        <a href="" class="w3-bar-item w3-button w3-margin-top" style="color: grey;">List</a>
        <a href="" class="w3-bar-item w3-button w3-margin-top" style="color: white;">Setelan</a>
        <button class="Logout" style="font-size: 7px; background: grey; color: white; border: white 0px solid; border-radius: 25px; padding: 2px 5px; margin-top: 250px;">
          <a href="<?= base_url('auth/logout') ?>" style="color: white; font-size: 14px; text-decoration: none; display: flex; align-items: center; gap: 1.5rem;">
          <span style="overflow: hidden; padding: 1rem; margin: 8px 0;border-radius: 8px;">Logout</span>
          </a>
        </button>
      </div>
    </div>
    
    <main style="padding-left: 200px;">
        <div class="card container-fluid p-2 ">

            <h5 class="px-2 pt-2 pb-2 fw-bold text-center">LIST MATA KULIAH </h5>
            <table class="table">
                <thead class="table">
                    <tr>
                        <th>No</th>
                        <th>Matkul</th>
                        <th>Deskripsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $nomor = 1; ?>
                    <?php foreach($rps as $r) : ?>
                        <tr>
                            <td>
                                <?php echo $nomor; ?>
                            </td>
                            <td>
                                <?php echo $r['matkul']; ?>
                            </td>
                            <td>
                                <?php echo $r['deskripsi']; ?>
                            </td>

                            <?php
                            echo "<td>";
                            echo "<div class='btn-group'>";
                            echo "<a href='edit/index/" . $r['id_rps'] . "' class='btn btn-primary'>EDIT</a>";
                            echo "<a href='edit_view/index/" . $r['id_rps'] . "'class='btn btn-primary'>VIEW</a>";
                            echo "<a href='view/index/" . $r['id_rps'] . "' class='btn btn-primary'>PRINT</a>";
                            echo "<a href='daftar/delete/" . $r['id_rps'] . "' onclick=\"return confirm('Anda akan menghapus RPS ini?')\" class='btn btn-danger'>DELETE</a>";
                            echo "</div>";
                            echo "</td>";
                            ?>
                        </tr>
                    <?php $nomor++; ?>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </main>

</body>

</html>