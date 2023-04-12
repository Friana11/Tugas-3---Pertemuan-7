<?php
  session_start();

  // redirect ke halaman index jika data belum disimpan di session atau cookie
  if (!isset($_SESSION['nama']) || !isset($_SESSION['umur']) || !isset($_COOKIE['email']) || !isset($_SESSION['uid']) || !isset($_COOKIE['server'])) {
    header('Location: index.php');
    exit();
  }

  $nama = $_SESSION['nama'];
  $umur = $_SESSION['umur'];
  $email = $_COOKIE['email'];
  $uid =$_SESSION['uid'];
  $server = $_COOKIE['server'];

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
        <td>UID</td>
        <td><?php echo $uid?></td>
      </tr>
      <tr>
        <td>Server</td>
        <td><?php echo $server?></td>
      </tr>
    </table>
  </div>
</body>
</html>
