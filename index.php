<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
    include_once __DIR__ . '/db/database.php'
    ; ?>
    
    <h1>
    <?php 
        //var_dump($stampa);

        foreach($stampa as $valore) {
            foreach($valore as $valoretto) {
                ?>
                    <img src="
                        <?php echo ($valoretto['poster']);?>
                    " alt="Record image">

                    <h6>
                        <?php echo ($valoretto['title']);?>
                    </h6>
                    <h6>
                        <?php echo ($valoretto['author']);?>
                    </h6>
                    <h6>
                        <?php echo ($valoretto['year']);?>
                    </h6>
                <?php  
            }
        }
    ?>
    </h1>
    
    



</body>
</html>
