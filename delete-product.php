<?php
include 'classes/db.class.php'; //yukarıdan aşağıya doğru çalıştığı için db.class.php dosyasını prodcut'tan önce include etmemiz gerekiyor
include 'classes/product.class.php';


?>


<?php

$product = new Product();


if (isset($_POST['deleteProduct'])) {
    $id = $_POST['productId'];

    if ($product->deleteProduct($id)) {
        header('Location: index.php');
    }
}
?>
