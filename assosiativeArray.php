<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assosiative Array Php</title>

</head>
<body>
    <h2>Associative Array Php example</h2>
    <ul>
        <?php foreach ($person as $key => $feature) : ?>

            <li><strong><?=$key; ?></strong> <?= $feature; ?> </li>

        <?php endforeach; ?>
   
    </ul>
</body>
</html>