<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?=$this->baseurl; ?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Giriş Yap</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="public/admin/style.css">
</head>
<body>
    <div class='form animated bounceIn'>
    <h2>Giriş Yap</h2>
    <form>
        <input placeholder='Kullanıcı Adı' type='text'>
        <input placeholder='Parola' type='password'>
        <button class='animated infinite pulse' id="loginForm">Giriş</button>
    </form>
    </div>

</body>
</html>