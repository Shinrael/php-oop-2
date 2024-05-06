<?php 

require_once __DIR__ . '/Model/Products.php';
require_once __DIR__ . '/Model/Categories.php';

$dogAliments = new Products(1, 'Friskies Dog', 1.20, './img/cibocani.webp', '<i class="fa-solid fa-dog"></i>', 'Cibo per i nostri amici cani');
$catAliments = new Products(2, 'Sheba Cat', 1.10, './img/cibogatti.webp', '<i class="fa-solid fa-cat"></i>', 'Cibo per i nostri amici gatti');
$products = [$dogAliments, $catAliments];

var_dump($products);

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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  
<div class="container text-center ">
  <h1>Shop Animale</h1>
  <div class="card-container d-flex mt-5"> 

    <?php foreach($products as $product):  ?>
    <div class="card mx-3" style="width: 18rem;">
      <img src="<?php echo $product->image ?>" class="card-img-top" alt="...">
      <div class="card-body bg-secondary ">
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