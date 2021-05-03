<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boolean</title>
</head>
<body>
    <h2>Task for the day</h2>

    <ul>
        <?php foreach ($task as $heading => $value) : ?>
            <li>
                <strong><?= ucwords($heading);?></strong>: <?=$value; ?>
            </li>
        <?php endforeach; ?>
    </ul>

    <br>
    <ul>
        <li>
            <strong>Name: </strong> <?= $task['title']; ?>
        </li>
        <li>
            <strong>Due Date: </strong> <?= $task['due']; ?>
        </li>
        <li>
            <strong>NaPerson Resposibleme: </strong> <?= $task['assigned_to']; ?>
        </li>
        <li>
            <strong>Status: </strong> <?= $task['completed'] ? 'completed': 'Incomplete'; ?>
        </li> 
    </ul>
</body>
</html>