<?php
include 'classes/db.class.php'; //yukarıdan aşağıya doğru çalıştığı için db.class.php dosyasını prodcut'tan önce include etmemiz gerekiyor
include 'classes/product.class.php';


?>

<?php include('includes/header.php') ?>
<?php
if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    $product = new Product();
    if ($product->createProduct($title, $description, $price)) {
        header('Location: index.php');
    }
}
?>

<div class="container my-3">
    <div class="row">
        <form method="post">
            <div class="col-12">
                <div class="mb-3">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" id="title">
                </div>
                <div class="mb-3">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label for="price">Price</label>
                    <input type="text" class="form-control" name="price" id="price">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Kaydet</button>
            </div>
        </form>
    </div>
</div>
<?php include('includes/footer.php') ?>