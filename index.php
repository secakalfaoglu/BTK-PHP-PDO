<?php
include 'classes/db.class.php'; //yukarıdan aşağıya doğru çalıştığı için db.class.php dosyasını prodcut'tan önce include etmemiz gerekiyor
include 'classes/product.class.php';


?>

<?php include('includes/header.php') ?>

<div class="container my-3">

    <a href="create-product.php" class="btn btn-primary">Create Product</a>

    <hr>

    <?php

    //nesne oluşturma

    $product = new Product();

    // echo "<pre>";    
    // print_r($product->getProducts()); //product üzerinden getProducts methodunu çağırdık
    // echo "<br>";
    // print_r($product->getProductById(2)); //product üzerinden getProductById methodunu çağırdık
    ?>

    <?php if ($product->getProducts()): ?>
       
        <?php include('includes/product-list.php') ?>

    <?php else: ?>
        <?php include('includes/no-product.php') ?>
    <?php endif; ?>
</div>
<?php include('includes/footer.php') ?>