<?php

    // REQUEST
    require_once(__DIR__ . "/models/category.php");
    require_once(__DIR__ . "/models/product.php");
    require_once(__DIR__ . "/models/food.php");
    require_once(__DIR__ . "/models/animalHouse.php");

    // CATEGORIES
    $dog = new Category(1, "Cane", "https://cdn.cosedicasa.com/wp-content/uploads/2017/12/educare-un-cucciolo.jpg");

    $cat = new Category(2, "Cat", "https://assets.elanco.com/8e0bf1c2-1ae4-001f-9257-f2be3c683fb1/ddc807aa-b64f-4c1b-9553-8c07aa1ae35d/gatto-e-topolino-di-pezza.jpg?w=3840&q=75&auto=format");

    // PRODUCTS
    $prod_croccantini = new Food(
        1, "Croccantini", "https://lh3.googleusercontent.com/proxy/2UMiBFcCAx5IHr4Hg76tt3UF1HkK89sF9JpbPevUm6hm3QYZw-i2FKDMdoJt4tw--6RLG3fJO3QRyv0hp6ZE3gqZCEfQ6-j6SCLeRJuMq-igBTb-Wo3KN2o7QqoreAspwPCjJ7j1B_ZgLKioxF44IBJz", 35, $cat, "10/05/2024"
    );

    $prod_cuccia = new animalHouse(
        2, "Cuccia per cani", "https://arcaplanet.vtexassets.com/arquivos/ids/227610/p-a-y--cuccia-alcazar-70.jpg?v=637454794658030000", 100, $dog, "120x70x50"
    );

    $prods = [ $prod_croccantini, $prod_cuccia];
?>