<?php

    // REQUEST
    require_once(__DIR__ . "/models/category.php");
    require_once(__DIR__ . "/models/product.php");
    require_once(__DIR__ . "/models/food.php");
    require_once(__DIR__ . "/models/animalHouse.php");

    // CATEGORIES
    $dog = new Category(1, "Dog", "https://cdn4.iconfinder.com/data/icons/eldorado-medicine/40/dog-512.png");

    $cat = new Category(2, "Cat", "https://cdn3.iconfinder.com/data/icons/animal-and-tool/283/animal_and_tool-02-512.png");

    // PRODUCTS
    $prod_croccantini = new Food(
        1, "Croccantini", "https://lh3.googleusercontent.com/proxy/2UMiBFcCAx5IHr4Hg76tt3UF1HkK89sF9JpbPevUm6hm3QYZw-i2FKDMdoJt4tw--6RLG3fJO3QRyv0hp6ZE3gqZCEfQ6-j6SCLeRJuMq-igBTb-Wo3KN2o7QqoreAspwPCjJ7j1B_ZgLKioxF44IBJz", 35, $cat, "10/05/2024"
    );

    $prod_cuccia = new animalHouse(
        2, "Cuccia per cani", "https://arcaplanet.vtexassets.com/arquivos/ids/227610/p-a-y--cuccia-alcazar-70.jpg?v=637454794658030000", 100, $dog, "120x70x50"
    );

    $prods = [ $prod_croccantini, $prod_cuccia];
?>