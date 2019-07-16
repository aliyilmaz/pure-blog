<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?=$this->base_url; ?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Giriş Yap</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="public/admin/style.css">
</head>
<body>
    <div class='loginForm animated bounceIn'>
    <h2>Giriş Yap</h2>
    <form action="admin/login" method="POST">
        <input placeholder="Kullanıcı Adı" type="text" name="username" value="Tilo Mitra">
        <input placeholder="Parola" type="password" name="password" value="123456">
        <button class='animated infinite pulse' id="loginForm">Giriş</button>
    </form>
    </div>
    <p>
        <?php

        if(isset($this->post['username']) AND isset($this->post['password'])){

            if(
                    $this->do_have('users', $this->post['username']) AND
                    $this->do_have('users', md5($this->post['password']))
            ){

                $query = $this->samantha('users', array('username'=>$this->post['username'], 'password'=>md5($this->post['password'])));
                if(!empty($query)){
                    $_SESSION['loginStatus'] = true;
                    $this->redirect('admin');
                }

            }
        }

        ?>
    </p>
</body>
</html>