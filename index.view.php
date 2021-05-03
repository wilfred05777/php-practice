<?php 
    // // OOP
    // class Cars{
    //     public $name;

    //     function set_name($name){
    //         $this->name = $name;
    //     }

    //     function get_name(){
    //         return $this->name;
    //     }
    // }

    // $carName = new Cars();
    // $carName->set_name('Toyota Masarah');
    // echo $carName->get_name();

// require 'index.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>

    <style>
        header {
            background: #e4e4e4;
            padding: 2em;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <h2>
        <?php echo "Hello, ". htmlspecialchars($_GET['name']); ?>
        </h2>
    </header>

    <ul>
        <!-- shorthand -->
        <?php foreach ($names as $name): ?>
            <li><?=$name?></li>
        <?php endforeach; ?>

            <!-- first method -->
        <?php 
            foreach ($names as $name) {
                echo "<li>$name</li>";
            }
        ?>
    </ul>
</body>
</html>