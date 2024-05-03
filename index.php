<?php 

require_once __DIR__ . '/Model/Products.php';
require_once __DIR__ . '/Model/Categories.php';

$dogAliments = new Products(1, 'Umido Cane', 1.20, './img/cibocani.webp', 'C', 'Cibo per i nostri amici cani');
$catAliments = new Products(2, 'Umido Gatto', 1.10, './img/cibogatti.webp', 'G', 'Cibo per i nostri amici gatti');
$products = [$dogAliments, $catAliments];
var_dump($dogAliments);
var_dump($catAliments);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php-oop-2</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  
<div class="container text-center ">
  <h1>Shop Animale</h1>
  <div class="card-container d-flex mt-5"> 

    <?php foreach($products as $product):  ?>
    <div class="card mx-3" style="width: 18rem;">
      <img src="<?php echo $product->image ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h2><?php echo $product->name ?></h2>
        <p class="card-text"><?php echo $product->getInfo() ?></p>
      </div>
    </div>
    <?php  endforeach ?>  

  </div>
</div>


<script src="js/script.js"></script>
</body>
</html>