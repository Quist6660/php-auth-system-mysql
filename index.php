<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>auth</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container mt-4">

    <?php
    if($_COOKIE['user'] == ''):
    ?>

    <div class="row">
        <div class="col">
            <h1>Форма регистрации</h1>
            <form action="valid-form/check.php" method="post">
                <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
                <input type="text" class="form-control" name="name" id="name" placeholder="Введите имя"><br>
                <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
                <button class="btn btn-success" type="submit">Регистрация</button>
            </form>
        </div>
        <div class="col">
            <h1>Форма авторизации</h1>
            <form action="valid-form/auth.php" method="post">
                <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
                <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
                <button class="btn btn-success" type="submit">Авторизоватся</button>
            </form>
        </div>
    </div>
    <?php else: ?>
        <p>Привет <?=$_COOKIE['user']?>. <a href="exit.php">Выход</a></p>
    <?php endif; ?>

    </div>
</body>
</html>