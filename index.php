<?php
  session_start();
  $msg = '';

  // jika tombol submit ditekan
  if (isset($_POST['submit'])) {
    // simpan data dari form ke dalam session dan cookie
    $_SESSION['nama'] = $_POST['nama'];
    $_SESSION['umur'] = $_POST['umur'];
    $_SESSION['uid'] = $_POST['uid'];
    $_SESSION['server'] =$_POST['server'];
    setcookie('email', $_POST['email'], time() + (86400 * 30), '/');

    // redirect ke halaman profil
    header('Location: profile.php');
    exit();
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Biodata</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container mt-5">
    <h1>Biodata Player Genshin Impact</h1>
    <?php if ($msg) : ?>
      <div class="alert alert-danger"><?php echo $msg ?></div>
    <?php endif; ?>
    <form method="post">
      <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" name="nama" required>
      </div>
      <div class="form-group">
        <label for="umur">Umur</label>
        <input type="number" class="form-control" name="umur" required>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" required>
      </div>
      <div class="form-group">
        <label for="uid">UID</label>
        <input type="uid" class="form-control" name="uid" required>
      </div>
      <div class="form-group">
        <label for="  server">Server</label>
        <input type="server" class="form-control" name="server" required>
      </div>
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</body>
</html>