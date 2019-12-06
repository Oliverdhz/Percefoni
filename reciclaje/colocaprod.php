<?php
    $pdo;
    $alto = $_POST['valormayor'];
    $bajo = $_POST['valormenor'];
    $query;
    try {
        $conn = "mysql:host=localhost;dbname=persefone;charset=utf8mb4";
        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_EMULATE_PREPARES => false];
        $pdo = new PDO($conn, 'root', '', $options);
    } catch (PDOException $e) {
        print_r("Error en la conexión: " . $e->getMessage());
    }
    if(isset($_POST['categoria'])){
        $categoria = $_POST['categoria'];
        if(!empty($_POST['nombre'])){
            $nombre = $_POST['nombre'];
            $query = $pdo->prepare("SELECT * FROM producto WHERE precio BETWEEN $bajo and $alto AND categoria = '$categoria' and nombre like '%$nombre%'");
        }else{
            $query = $pdo->prepare("SELECT * FROM producto WHERE precio BETWEEN $bajo and $alto AND categoria = '$categoria'");
        }
    }else{
        if(!empty($_POST['nombre'])){
            $nombre = $_POST['nombre'];
            $query = $pdo->prepare("SELECT * FROM producto WHERE precio BETWEEN $bajo and $alto and nombre like '%$nombre%'");
        }else{
            $query = $pdo->prepare("SELECT * FROM producto WHERE precio BETWEEN $bajo and $alto");
        }
    }
    $query->execute();
    foreach($query as $currentProduct){
        $id = $currentProduct['id_producto'];
        $nombre = $currentProduct['nombre'];
        $precio = $currentProduct['precio'];
        $img = $id . $currentProduct['color1'];
        echo "<div class='col-sm-12 col-md-6 col-lg-4 p-b-50'>
            <!-- Block2 -->
            <div class='block2'>
                <div class='block2-img wrap-pic-w of-hidden pos-relative'>
                    <img src='images/$img.png' alt='IMG-PRODUCT'>

                    <div class='block2-overlay trans-0-4'>
                        <a href='#' class='block2-btn-addwishlist hov-pointer trans-0-4'>
                            <i class='icon-wishlist icon_heart_alt' aria-hidden='true'></i>
                            <i class='icon-wishlist icon_heart dis-none' aria-hidden='true'></i>
                        </a>

                        <div class='block2-btn-addcart w-size1 trans-0-4'>
                            <!-- Button -->
                            <a href='product-detail.php?view=$id' class='flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4'>
                                Ver más
                            </a>
                        </div>
                    </div>
                </div>

                <div class='block2-txt p-t-20'>
                    <a href='product-detail.php?view=$id' class='block2-name dis-block s-text3 p-b-5'>
                        $nombre
                    </a>

                    <span class='block2-price m-text6 p-r-5'>
                        $$precio
                    </span>
                </div>
            </div>
        </div>";
    }
?>