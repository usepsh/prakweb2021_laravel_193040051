<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <title>YYS Blog | About</title>
</head>
<body>
  <h1>Halaman About</h1>
  <h3>
    <?= $name; ?>
  </h3>
  <p><?= $email; ?></p>
  <img src="img/<?= $image; ?>" alt="<?= $name; ?>" width="350">
</body>
</html>