<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>

    <style>
        .form  {
            text-align: center;
        }
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <?php if ($message): ?>
        <p><?php
            echo $message;
            ?></p>
    <?php endif ?>

<form method="post" action="first.php">

    <div class="form container">
        <h1>Регистрация</h1>
        <label for="first_name">Имя</label>
        <input type="text" id="first_name" name="firstName"><br><br>

        <label for="last_name">Фамилия</label>
        <input type="text" id="last_name" name="lastName"><br><br>

        <label for="email">Email</label>
        <input type="email" id="email" name="email"><br><br>

        <label for="password">Пароль</label>
        <input type="password" id="password" name="password"><br><br>

        <button type="submit">Зарегистрироваться</button>
        </div>
</form>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>