<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditionals PHP</title>
</head>
<body>
    <h2>Task for the day</h2>
    <h3> Conditionals </h3>
    
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
            <strong>Status: </strong> 
            <?php 
                // if($task['completed']){
                //     echo '&#9989;';
                // } else {
                //     echo 'Incomplete';
                // }
            ?>

            <?php 
                // if(!true){
                //     echo 'Incomplete';
                // }
                    
            ?>

            <?php if($task['completed']): ?>
                
                <span class="icon"> &#9989;</span>
            
            <?php else: ?>
                
                <span> Incomplete</span>

            <?php endif; ?>
        </li> 
    </ul>
</body>
</html>