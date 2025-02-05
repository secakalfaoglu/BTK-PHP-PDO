<?php
// MySQLi 

// PDO => PHP Data Object

//print_r(PDO::getAvailableDrivers());

include_once("baglanti.php");

// $sql = "SELECT * FROM products";
// $results = $pdo->query($sql);

// while($row = $results->fetch(PDO::FETCH_ASSOC)){ // ASSOC ile dizi olarak çekme, yazılmasada default olan zaten bu ancak bu default değeri değiştirebiliriz
//     echo $row['title'] . "<br>";
// }

// while($row = $results->fetch()){ //default fetch mode'u obje olarak ayarladığımız için PDO::FETCH_OBJ yazmamıza gerek yok
//     echo $row->title. "<br>";
//     echo $row->price. "<br>";
// }

// $urunler = $results->fetchAll();

// foreach ($urunler as $urun) {
//     echo $urun->title . "<br>";
//     echo $urun->price . "<br>";
// }

// prepared statements

// $productId = 1;
// $sql = "SELECT * FROM products WHERE id = ?";
// $stmt = $pdo->prepare($sql);
// $stmt->execute([$productId]);
// $urunler = $stmt->fetchAll();

// foreach ($urunler as $urun) {
//     echo $urun->title . "<br>";
//     echo $urun->price . "<br>";
// }

// insert data

// $title = "Samsung S24";
// $price = 70000;
// $description = "güzel telefon";


// //$sql = "INSERT INTO products(title,price,description) VALUES(?,?,?)";
// $sql = "INSERT INTO products(title,price,description) VALUES(:title,:price,:description)"; //bu şekilde de eklenebilir

// $stmt = $pdo->prepare($sql);
// //$stmt->execute([$title,$price,$description]);
// $stmt->execute(['title'=>$title,'price'=>$price,'description'=>$description]); //ikinci ekleme seçeneği için bu kullanılmalıdır

// echo "ürün eklendi";

// multiple insert

// $title = "Samsung S25";
// $price = 70000;
// $description = "güzel telefon";

// $sql = "INSERT INTO products(title,price,description) VALUES(:title,:price,:description)"; 
// $stmt = $pdo->prepare($sql);

// $stmt->bindParam(':title',$title);
// $stmt->bindParam(':price',$price);
// $stmt->bindParam(':description',$description);

// $stmt->execute();


// $title = "Samsung S26";
// $price = 70000;
// $description = "güzel telefon";

// $stmt->execute();

// kayıt güncelleme

// $id=1;
// $title = "updated";

// $sql = "UPDATE products SET title = :title WHERE id = :id";
// $stmt = $pdo->prepare($sql);
// $stmt->execute(['title'=>$title,'id'=>$id]);

// echo "ürün güncellendi".$stmt ->rowCount();

// kayıt silme

$id=1;

$sql = "DELETE FROM products WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute(['id'=>$id]);

echo "ürün silindi".$stmt ->rowCount();

