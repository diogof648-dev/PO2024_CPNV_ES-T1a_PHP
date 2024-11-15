<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Utilisateurs</title>
</head>
<body>
    <a href="/">< Revenir à l'accueil</a>
    <ul>
        <?php foreach ($users as $user) : ?>
        <li><?=$user->firstname . " " . $user->lastname?>
            <ul>
                <li><?=$user->email?></li>
                <li><?=$user->zip . " " . $user->city?></li>
                <li><?=$user->canton?></li>
            </ul>
        </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>