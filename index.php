<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa Baru | Ridwan_arif</title>
</head>

<body>
    <header>
        <h3>Pendaftaran Siswa Baru</h3>
        <h1>SMK Coding</h1>
    </header>
  <link rel="stylesheet" href="style.css">
</head>
<body>
        <ul>
            <li><a href="form-daftar.php">Daftar Baru</a></li>
            <li><a href="list-siswa.php">Pendaftar</a></li>
        </ul>
    </nav>
    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "selamat anda telah berhasil berhasil!";
            } else {
                echo "anda telah gagal!";
            }
        ?>
    </p>
<?php endif; ?>

    </body>
</html>