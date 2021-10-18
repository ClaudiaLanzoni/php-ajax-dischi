<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>

    <?php 
    include_once __DIR__ . '/db/database.php'
    ; ?>
    
    <div class="container">
        <div class="row">

            
                <?php 
                //var_dump($stampa);

                foreach ($stampa as $disco) {
                    foreach ($disco as $valoreDisco) {
                        ?>
                        <div class="col-2 m-3">
                            <div class="album_box text-center">

                            <img class="m-3" src="
                                <?php echo ($valoreDisco["poster"]);?>
                            " alt="Record image">

                            <h4>
                                <?php echo ($valoreDisco["title"]);?>
                            </h4>

                            <p>
                                <?php echo ($valoreDisco["author"]);?>
                            </p>

                            <p>
                                <?php echo ($valoreDisco["year"]);?>
                            </p>

                            
                            

                            </div>
                        </div>
                        <?php  
                    }
                }
                ?>
            
        </div>
    </div>
    
   
    
    



</body>
</html>
