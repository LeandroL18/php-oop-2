<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>php-oop-2</title>

        <?php require_once(__DIR__ . "/db.php"); 
        
        // gestione errore titolo alla creazione del prodotto
        // try {

        //     $test_exception = new Product(3, "Te", "Image" , 50, $cat, "10/05/2024");
        // } catch (Exception $e) {

        //     echo "Impossibile creare prodotto di test: " . $e -> getMessage();
        // }

        // die();

        ?>
    </head>

    <body>
    <ul style= "list-style-type: none;">
        <?php
            foreach ($prods as $prod) {
                
                ?>

                    <li>
                        <h3>
                            <?php
                                echo $prod -> getTypology();
                            ?>
                        </h3>
                        <?php
                            echo $prod -> getTitle();
                        ?>: 
                        <span style="text-decoration:line-through;">
                            <?php
                                echo $prod -> getPrice();
                            ?>
                            Euro
                        </span>
                        <span style="color:red">
                            <?php
                                echo $prod -> getDiscountedPrice();
                            ?>
                            Euro
                        </span>
                        <br><br>
                        <img src="<?php echo $prod -> getImage() ?>"  width="100" />
                        <br>
                        Category:
                        <img src="<?php echo $prod -> getCategory() -> getIcon() ?>"  width="30" style="vertical-align: -5px;" />
                        <?php
                            echo $prod -> getCategory() -> getName();
                        ?>
                        <br><br>
                    </li>

                <?php
            }
        ?>
    </ul>
    </body>
</html>