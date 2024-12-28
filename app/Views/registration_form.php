<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Реєстрація</title>
</head>
<body>
<h1>Форма реєстрації</h1>

<?php if (session()->getFlashdata('message')): ?>
    <p style="color: green;"><?= session()->getFlashdata('message') ?></p>
<?php endif; ?>

<form method="post" action="http://localhost:8080/registration">
    <?= csrf_field() ?>
    <label for="name">Ім'я:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <button type="submit">Зареєструватись</button>
</form>

</body>
</html>
