<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?=$this->baseurl; ?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>
<body>
  <h2>Welcome to Dashboard page.</h2>
  <a href="admin/logout">Çıkış Yap</a>
  <?php
  if ($_SESSION['loginStatus'] == false) {
      $this->redirect('admin/login');
  }
  ?>
</body>
</html>
