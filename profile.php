<?php
  session_start();

  // redirect ke halaman index jika data belum disimpan di session atau cookie
  if (!isset($_SESSION['nama']) || !isset($_SESSION['umur']) || !isset($_COOKIE['email']) || !isset($_SESSION['pekerjaan'])) {
    header('Location: index.php');
    exit();
  }

  $nama = $_SESSION['nama'];
  $umur = $_SESSION['umur'];
  $email = $_COOKIE['email'];
  $pekerjaan =$_SESSION['pekerjaan'];
?>

<!DOCTYPE html>
<html>
<head>
  <title>Profil</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-5">
    <h1>Profil</h1>
    <table class="table">
      <tr>
        <td>Nama</td>
        <td><?php echo $nama ?></td>
      </tr>
      <tr>
        <td>Umur</td>
        <td><?php echo $umur ?></td>
      </tr>
      <tr>
        <td>Email</td>
        <td><?php echo $email ?></td>
      </tr>
      <tr>
        <td>Pekerjaan</td>
        <td><?php echo $pekerjaan?></td>
      </tr>
    </table>
  </div>
</body>
</html>
