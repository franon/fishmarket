<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= SITE_NAME ." - ". ucfirst($this->uri->segment(1))  ?></title>
</head>
<body>
<form action="<?= BASE_URL();?>users/login/login" method="post">

<label for="username">Username</label> <br>
<input type="text" name="username" id="username" placeholder="username"><br><br>

<label for="password">Password</label> <br>
<input type="password" name="password" id="password" placeholder="password"><br><br>

<button type="submit">Login</button>

</form>
</body>
</html>


