<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?=$this->baseurl; ?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Çıkış Yap</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="public/admin/style.css">
</head>
<body>
    <div class='loginForm animated bounceIn'>
    <h2>Çıkış yapmak istediğinize emin misiniz?</h2>
    <form action="admin/logout" method="POST">
        <button class='animated infinite pulse' id="logoutForm" name="loginStatus">Çıkış Yap</button>
        <button class='animated infinite pulse' id="cancelForm" name="cancelStatus">Dashboard</button>
    </form>
    </div>
    <?php
        if ($_SESSION['loginStatus'] == false) {
            $this->redirect('admin/login');
        }
        if (isset($this->post['cancelStatus'])) {
            $this->redirect('admin/dashboard');
        }
        if (isset($this->post['loginStatus'])) {
            $_SESSION['loginStatus'] = false;
            $this->redirect('admin/login');
        }

    ?>
</body>
</html>